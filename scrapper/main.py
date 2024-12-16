import json
import requests
from bs4 import BeautifulSoup
import os
import re
import time

scraped_products_counter = 0

num_of_products_from_category = 82

class Product_view:
    def __init__(self, name, link, images, price, manufacturer):
        self.name = name
        self.link = link  # Link do produktu
        self.images = []  # Główne zdjęcie
        self.price = price
        self.manufacturer = manufacturer
        self.description = None

    def to_dict(self):
        # Reprezentacja obiektu w postaci słownika
        return {
            "name": self.name,
            "images": self.images,  # Główne zdjęcie
            "price": self.price,
            "manufacturer": self.manufacturer,
            "description": self.description,
        }

    def scrape_product_details(self, images_dir):
        """Scrapuje szczegóły produktu z jego podstrony i aktualizuje obiekt."""
        full_url = f"https://ovczarnia.pl{self.link}"
        response = requests.get(full_url)
        soup = BeautifulSoup(response.text, 'html.parser')

        # Pobranie opisu
        description_element = soup.find('div', class_='resetcss', itemprop='description')
        if description_element:
            paragraphs = description_element.find_all('p')
            self.description = [p.get_text(strip=True) for p in paragraphs if p.get_text(strip=True)]
        else:
            self.description = ["Brak opisu"]

        # Pobranie sekcji produktu
        product_section = soup.find('div', class_='centercol s-grid-9')
        if not product_section:
            print("Nie znaleziono sekcji produktu.")
            return  # Jeśli sekcja nie istnieje, kończymy metodę

        # Szukamy sekcji galerii
        gallery_section = product_section.find('div', class_='smallgallery row')

        # Jeśli galeria jest pusta (jeden obrazek)
        if str(gallery_section) == '<div class="smallgallery row">\n</div>':
            main_img_section = product_section.find('div', class_='mainimg productdetailsimgsize row')
            if main_img_section:
                main_img_anchor = main_img_section.find('a', id=re.compile('^prodimg'))
                if main_img_anchor:
                    img_tag = main_img_anchor.find('img')
                    if img_tag and img_tag.get('src'):
                        # Pobieramy obrazek z "src"
                        img_src = img_tag['src']
                        formatted_name = f"{sanitize_filename(self.name)}_1.webp"
                        self.images.append(formatted_name)
                        save_image(img_src, images_dir, formatted_name)

        else:  # Jeśli galeria zawiera zdjęcia (więcej niż jeden obrazek)
            gallery_items = gallery_section.find_all('li', class_='r--l-flex r--l-flex-vcenter')
            for idx, item in enumerate(gallery_items[:2]):  # Pobierz maksymalnie dwa obrazki
                img_tag = item.find('img')
                if img_tag and img_tag.get('data-img-name'):
                    img_src = img_tag['data-img-name']
                    formatted_name = f"{sanitize_filename(self.name)}_{idx + 1}.webp"
                    self.images.append(formatted_name)
                    save_image(img_src, images_dir, formatted_name)


def get_html_with_requests(url):
    """Pobierz HTML strony za pomocą requests."""
    response = requests.get(url)
    response.raise_for_status()
    return response.text


class Category:
    def __init__(self, name, link, parent_hierarchy=None):
        self.name = name
        self.link = link
        self.parent_hierarchy = parent_hierarchy  # Dodajemy informację o nadrzędnej hierarchii
        self.subcategories = []  # Lista podkategorii

    def add_subcategory(self, subcategory):
        """Dodaje podkategorię do listy podkategorii."""
        self.subcategories.append(subcategory)

    def to_dict(self):
        """Zwraca dane kategorii i jej podkategorii w formie słownika."""
        return {
            "name": self.name,
            #"link": self.link,
            #"subcategories": [{"name": sub.name, "link": sub.link} for sub in self.subcategories],
            "subcategories": [{"name": sub.name} for sub in self.subcategories],
        }

    def save_to_json(self, output_dir):
        """Zapisuje kategorię i jej podkategorie do pliku JSON z pełną hierarchią."""
        full_name = f"{self.parent_hierarchy}~{self.name}" if self.parent_hierarchy else self.name
        sanitized_name = sanitize_filename(f"{full_name}.json")
        output_file = os.path.join(output_dir, sanitized_name)

        # Zapisz kategorię
        data = self.to_dict()
        with open(output_file, 'w', encoding='utf-8') as f:
            json.dump(data, f, ensure_ascii=False, indent=4)
        print(f"Zapisano do pliku: {output_file}")

    def scrape_products(self, output_dir, images_dir):
        """Scrapuje produkty tylko dla podkategorii głównych kategorii."""
        for subcategory in self.subcategories:
            full_hierarchy = f"{self.name}~{subcategory.name}"
            scrape_products_from_subcategory(subcategory.link, full_hierarchy, output_dir, images_dir)


def scrape_categories_and_subcategories(html, output_dir):
    """Scrapowanie kategorii i ich hierarchii z divu o klasie 'menu row'."""
    soup = BeautifulSoup(html, 'html.parser')
    categories = []
    visited_links = set()

    menu_div = soup.find('div', class_='menu row')  # Wyszukujemy div o klasie 'menu row'

    main_categories = menu_div.find_all('a', class_='spanhover mainlevel')

    for category in main_categories:
        name = category.get_text(strip=True)
        link = category.get('href')

        if name.lower() == "menu":
            main_category = Category(name=name, link=link, parent_hierarchy=None)
            # Znajdujemy podkategorie
            parent_element = category.find_parent('li', class_='parent')
            if parent_element:
                main_category.subcategories = process_subcategories(parent_element, visited_links, name)
            visited_links = set()
            categories.append(main_category)
            continue

        if link not in visited_links:
            visited_links.add(link)

            # Tworzymy główną kategorię z pustą hierarchią nadrzędną
            main_category = Category(name=name, link=link, parent_hierarchy=None)

            # Znajdujemy podkategorie
            parent_element = category.find_parent('li', class_='parent')
            if parent_element:
                main_category.subcategories = process_subcategories(parent_element, visited_links, name)

            categories.append(main_category)

    return categories


def process_subcategories(parent_element, visited_links, parent_hierarchy=None):
    """Rekurencyjne przetwarzanie podkategorii."""
    subcategories = []
    sub_elements = parent_element.find('ul')

    if sub_elements:
        sub_links = sub_elements.find_all('li', recursive=False)

        for sub in sub_links:
            sub_anchor = sub.find('a', class_='spanhover')
            if sub_anchor:
                sub_name = sub_anchor.get_text(strip=True)
                sub_link = sub_anchor.get('href')

                if sub_link not in visited_links:
                    visited_links.add(sub_link)

                    # Tworzenie subkategorii z hierarchią nadrzędną
                    subcategory = Category(name=sub_name, link=sub_link, parent_hierarchy=parent_hierarchy)
                    subcategories.append(subcategory)

    return subcategories


def scrape_products_from_subcategory(url, category_hierarchy, output_dir, images_dir, max_products=num_of_products_from_category):
    """Scrapowanie produktów z podkategorii z paginacją, z kontrolą powtarzających się stron."""
    global scraped_products_counter
    page_number = 1  # Zaczynamy od pierwszej strony
    products = []
    last_scraped_first_product = None  # Przechowujemy pierwszy produkt z poprzedniej strony
    base_url = "https://ovczarnia.pl"  # Dodajemy pełny adres podstawowy

    while len(products) < max_products:
        # Budowanie URL do aktualnej strony
        current_page_url = f"{base_url}{url}/{page_number}" if page_number > 1 else f"{base_url}{url}"
        print(f"Scrapuję stronę: {current_page_url}")

        # Pobierz HTML strony
        html = get_html_with_requests(current_page_url)
        soup = BeautifulSoup(html, 'html.parser')

        # Znajdź sekcję z produktami
        products_section = soup.find('div', class_='products products_extended viewphot s-row')
        if not products_section:
            print(f"Nie znaleziono produktów na stronie: {current_page_url}")
            break

        # Pobierz produkty na tej stronie
        product_elements = products_section.find_all('div', class_='product-inner-wrap',
                                                     limit=max_products - len(products))

        if not product_elements:
            print(f"Brak produktów na stronie: {current_page_url}")
            break

        # Sprawdź pierwszy produkt na stronie
        current_first_product = product_elements[0].find('span', class_='productname').get_text(strip=True) \
            if product_elements[0].find('span', class_='productname') else None

        if current_first_product == last_scraped_first_product:
            print("Osiągnięto powtarzającą się stronę, przerywam.")
            break

        # Zaktualizuj ostatni zescrapowany pierwszy produkt
        last_scraped_first_product = current_first_product

        # Przetwarzanie produktów
        for product in product_elements:
            # Pobierz nazwę produktu
            name = product.find('span', class_='productname').get_text(strip=True) if product.find('span',
                                                                                                   class_='productname') else "Brak nazwy"
            # Pobierz cenę produktu
            price = "Brak ceny"
            price_container = product.find('div', class_='price f-row')
            if price_container:
                price_element = price_container.find('p').find('em') if price_container.find('p') else None
                price = price_element.get_text(strip=True) if price_element else "Brak ceny"
            # Pobierz link do produktu
            link = product.find('a', class_='prodname f-row')['href'] if product.find('a',
                                                                                      class_='prodname f-row') else None

            # Pobierz producenta
            manufacturer = None
            manufacturer_section = product.find('div', class_='f-row manufacturer')
            if manufacturer_section:
                manufacturer_tag = manufacturer_section.find('a', class_='brand')
                if manufacturer_tag:
                    manufacturer = manufacturer_tag.get_text(strip=True)

            # Tworzenie obiektu produktu
            product_obj = Product_view(name=name, link=link, images=None, price=price, manufacturer=manufacturer)

            # Pobranie szczegółowych danych produktu
            product_obj.scrape_product_details(images_dir)

            # Dodanie produktu do listy
            products.append(product_obj)

            scraped_products_counter += 1

            # Jeśli osiągniemy limit produktów, przerywamy
            if len(products) >= max_products:
                break

        # Przechodzimy do następnej strony
        page_number += 1

    # Zapisanie produktów do pliku JSON
    if products:
        sanitized_name = sanitize_filename(f"{category_hierarchy}~produkty.json")
        output_file = os.path.join(output_dir, sanitized_name)

        with open(output_file, 'w', encoding='utf-8') as f:
            json.dump([product.to_dict() for product in products], f, ensure_ascii=False, indent=4)
        print(f"Zapisano produkty do pliku: {output_file}")


def sanitize_filename(filename):
    """Usuwa niedozwolone znaki w nazwach plików."""
    return re.sub(r'[\\/*?:"<>|]', '_', filename)

def save_main_categories_to_json(main_categories, output_dir):
    """Zapisuje plik JSON z listą głównych kategorii."""
    #main_categories_data = [
    #    {"name": category.name, "link": category.link} for category in main_categories
    #]

    main_categories_data = [
        {"name": category.name} for category in main_categories  # Tylko nazwa, bez linków
    ]
    main_categories_file = os.path.join(output_dir, 'main_categories.json')
    with open(main_categories_file, 'w', encoding='utf-8') as f:
        json.dump(main_categories_data, f, ensure_ascii=False, indent=4)
    print(f"Zapisano plik głównych kategorii: {main_categories_file}")

def format_image_link(link):
    """Zamienia ukośniki w linku na tyldy."""
    return link.replace('/', '~')


def save_image(image_url, output_dir, filename):
    """Pobiera obrazek z URL i zapisuje go w podanym katalogu."""
    output_path = os.path.join(output_dir, filename)

    # Tworzymy folder docelowy, jeśli nie istnieje
    os.makedirs(output_dir, exist_ok=True)

    try:
        response = requests.get(f"https://ovczarnia.pl{image_url}", stream=True)
        response.raise_for_status()  # Wyrzuca wyjątek w razie błędu HTTP
        with open(output_path, 'wb') as img_file:
            for chunk in response.iter_content(chunk_size=8192):
                img_file.write(chunk)
    except Exception as e:
        print(f"Błąd podczas pobierania obrazka {image_url}: {e}")




def main():
    url = "https://ovczarnia.pl/"  # URL strony głównej
    base_dir = os.path.join("..", "scrapper-results")  # Katalog główny dla wyników
    output_dir = os.path.join(base_dir, "output_json")  # Katalog na JSON
    images_dir = os.path.join(base_dir, "images")  # Katalog na obrazy

    # Tworzymy folder główny 'scrapper_results', jeśli nie istnieje
    os.makedirs(base_dir, exist_ok=True)

    # Tworzymy folder 'output_json' i 'images', jeśli nie istnieją
    os.makedirs(output_dir, exist_ok=True)
    os.makedirs(images_dir, exist_ok=True)

    start_time = time.time()  # Zapisujemy czas startu

    # Pobranie HTML strony głównej
    html = get_html_with_requests(url)

    # Scrapowanie kategorii i podkategorii
    categories = scrape_categories_and_subcategories(html, output_dir)

    # Zapisanie pliku głównych kategorii
    save_main_categories_to_json(categories, output_dir)

    # zapisanie struktury kategorii menu
    categories[0].save_to_json(output_dir)

    # Zapisanie pliku głównych kategorii
    for category in categories[1:]:
        # Scrapuj produkty tylko dla podkategorii głównych kategorii
        category.scrape_products(output_dir, images_dir)

        # Zapisz strukturę kategorii do JSON
        category.save_to_json(output_dir)

    end_time = time.time()  # Zapisujemy czas końcowy
    elapsed_time = end_time - start_time  # Obliczamy różnicę
    print(f"Cały proces scrapowania zajął {elapsed_time:.2f} sekund." + '\n')  # Wyświetlamy czas trwania

    print(f"Zescrapowanych produktów: {scraped_products_counter}")  # ile produktów zescrapowaliśmy

if __name__ == "__main__":
    main()
