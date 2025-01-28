import os
import base64

API_KEY = "PLVQBA8H3Q83GW1FN933EQLTQLGE8N32"

API_URL = "https://localhost:19333/api"
HEADERS = {
    'Authorization': f'Basic {base64.b64encode(f"{API_KEY}:".encode()).decode()}'
}