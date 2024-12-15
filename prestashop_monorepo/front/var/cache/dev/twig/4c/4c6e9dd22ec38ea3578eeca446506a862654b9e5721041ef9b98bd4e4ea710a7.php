<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c7cd83f06480cceda0252a62b728ddb9ec162d8dc97ca636ecf3d038c2ef2384 */
class __TwigTemplate_7158e625a0f54527ad9b58cdeb0378be2df614d7ccc7db245ab0d47e87e3dca8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__c7cd83f06480cceda0252a62b728ddb9ec162d8dc97ca636ecf3d038c2ef2384"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__c7cd83f06480cceda0252a62b728ddb9ec162d8dc97ca636ecf3d038c2ef2384"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Payment Methods • Ovczarnia</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPayment';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '88ed5c37a096079ae418839ea53326fe';
    var token_admin_orders = tokenAdminOrders = '133c356945da4dd5c1923248cc68c562';
    var token_admin_customers = '7e11d356d6e613d1cfdc926d11a30e67';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '38e30d7c6b67dc4e40e15874e7207f26';
    var currentIndex = 'index.php?controller=AdminPayment';
    var employee_token = '9affb77fcd437f30cc07a507d64bde7e';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin961m2objh/index.php/improve/modules/catalog/recommended?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI';
    var admin_notification_get_link = '/admin961m2objh/index.php/common/notifications?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI';
    var admin_notificati";
        // line 43
        echo "on_push_link = adminNotificationPushLink = '/admin961m2objh/index.php/common/notifications/ack?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/admin961m2objh/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin961m2objh/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminAfterHeader.css?version=3.6.3\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin961m2objh\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin961m2objh\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Polish Zlo";
        // line 67
        echo "ty\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/default/js/bundle/module/module_card.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnoti";
        // line 87
        echo "ficationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin961m2objh/index.php/common/notifications?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminpayment\"
  data-base-url=\"/admin961m2objh/index.php\"  data-token=\"aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=594d936bc02bd5072a8c8d6b51839d12\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/improve/modules/manage?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/sell/catalog/categories/new?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/sell/catalog/products/new?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
";
        // line 144
        echo "         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=177586d5b9df82805333b9a6f46624dd\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminOrders&amp;token=133c356945da4dd5c1923248cc68c562\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"80\"
        data-icon=\"icon-AdminParentPayment\"
        data-method=\"add\"
        data-url=\"index.php/improve/payment/payment_methods?-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
        data-post-link=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminQuickAccesses&token=78009fa980ec3a3861edff0a483b48e1\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Payment Methods - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminQuickAccesses&token=78009fa980ec3a3861edff0a483b48e1\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin961m2objh/index.php?controller=AdminSearch&amp;token=ff6bf44924af9d4e27cccdf539764349\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, custom";
        // line 181
        echo "er name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"subm";
        // line 197
        echo "it\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/admin961m2objh/index.php/configure/advanced/performance/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
          ";
        // line 245
        echo "    class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=1821bb16025b3d1a4eaa58b93cc43c7b\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-e";
        // line 295
        echo "lements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Tymon</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin961m2objh/index.php/configure/advanced/employees/1/edit?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyD";
        // line 343
        echo "WXjgZsI\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminLogin&amp;logout=1&amp;token=ae95028fbfae4c0deb773858618231d9\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin961m2objh/index.php/confi";
        // line 367
        echo "gure/advanced/employees/toggle-navigation?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin961m2objh/index.php/sell/orders/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                    ";
        // line 410
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/invoices/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/credit-slips/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/delivery-slips/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                        ";
        // line 441
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarts&amp;token=1821bb16025b3d1a4eaa58b93cc43c7b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin961m2objh/index.php/sell/catalog/products?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/products?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Products
                                </a>
                              </li>

                              ";
        // line 473
        echo "                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/categories?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/monitoring/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminAttributesGroups&amp;token=27b1d49a8bad569ed85a8a80e034b869\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/brands/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjg";
        // line 501
        echo "ZsI\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin961m2objh/index.php/sell/attachments/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCartRules&amp;token=177586d5b9df82805333b9a6f46624dd\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin961m2objh/index.php/sell/stocks/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" ";
        // line 535
        echo "data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin961m2objh/index.php/sell/customers/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin961m2objh/index.php/sell/customers/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin961m2objh/index.php/sell/addresses/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  ";
        // line 565
        echo "
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCustomerThreads&amp;token=38e30d7c6b67dc4e40e15874e7207f26\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCustomerThreads&amp;token=38e30d7c6b67dc4e40e15874e7207f26\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin961m2objh/index.php/sell/customer-service/order-messages/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Order Messages
                                </a>
                              </li>

                       ";
        // line 595
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminReturn&amp;token=0c98d8ac0a247d3c5634afa706d0b19f\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin961m2objh/index.php/modules/metrics/legacy/stats?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin961m2objh/index.php/modules/metrics/legacy/stats?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDW";
        // line 624
        echo "XjgZsI\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin961m2objh/index.php/modules/metrics?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin961m2objh/index.php/modules/addons/modules/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
";
        // line 663
        echo "                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin961m2objh/index.php/modules/addons/modules/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin961m2objh/index.php/improve/modules/manage?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin961m2objh/index.php/modules/addons/themes/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keybo";
        // line 692
        echo "ard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin961m2objh/index.php/modules/addons/themes/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin961m2objh/index.php/improve/design/themes/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin961m2objh/index.php/improve/design/mail_theme/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                             ";
        // line 722
        echo "               
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin961m2objh/index.php/improve/design/cms-pages/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin961m2objh/index.php/improve/design/modules/positions/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminImages&amp;token=780cf5752257ce244d344a98289ee150\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin961m2objh/index.php/modules/link-widget/list?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Link List
                                </a>
                              </li>

                                                      ";
        // line 752
        echo "                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarriers&amp;token=d7792855c10a202588997c5aa1806d74\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarriers&amp;token=d7792855c10a202588997c5aa1806d74\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin961m2objh/index.php/improve/shipping/preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Prefere";
        // line 781
        echo "nces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-";
        // line 813
        echo "AdminPaymentPreferences\">
                                <a href=\"/admin961m2objh/index.php/improve/payment/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin961m2objh/index.php/improve/international/localization/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin961m2objh/index.php/improve/international/localization/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 845
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin961m2objh/index.php/improve/international/zones/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin961m2objh/index.php/improve/international/taxes/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin961m2objh/index.php/improve/international/translations/settings?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsfacebookModule&amp;token=691bb272854ff98c10c9921629abd0d7\" cl";
        // line 874
        echo "ass=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsfacebookModule&amp;token=691bb272854ff98c10c9921629abd0d7\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b536143d7eacf346fbd02bbaf05e8b58\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab";
        // line 908
        echo "-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin961m2objh/index.php/configure/shop/preferences/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/preferences/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/order-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"lin";
        // line 939
        echo "k\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/product-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/customer-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/contacts/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
              ";
        // line 971
        echo "                  <a href=\"/admin961m2objh/index.php/configure/shop/seo-urls/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminSearchConf&amp;token=2d9a155ea66efecae823d3366944ba6d\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin961m2objh/index.php/configure/advanced/system-information/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
 ";
        // line 1002
        echo "                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/system-information/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/performance/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/administration/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/emails/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> E-mail
                                </a>
                         ";
        // line 1030
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/import/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/employees/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/sql-requests/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/logs/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjg";
        // line 1060
        echo "ZsI\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/webservice-keys/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/feature-flags/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</";
        // line 1104
        echo "nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Payment</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" aria-current=\"page\">Payment Methods</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Payment Methods          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin961m2objh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin961m2objh/index.ph";
        // line 1165
        echo "p/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Improve the checkout experience',
        'description': \"Offer the payment methods your customers expect and improve your checkout process so you never miss a sale.<br>\\r\\n                Here\\'s a selection of modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals.\",
        'Close': 'Close',
      },
      recommendedModulesUrl: '/admin961m2objh/index.php/modules/addons/modules/recommended?tabClassName=AdminPayment&_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI',
      shouldAttachRecommendedModulesAfterContent: 1,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<!-- end /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"";
        // line 1211
        echo "width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\r\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\r\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\r\\n  <div class=\\\"content\\\">\\r\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\r\\n    <p>You will discover a few essential steps before you can launch your shop:\\r\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"started\\\">\\r\\n    <p>Let's get started!<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"buttons\\\">\\r\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\r\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost:8080\\/admin961m2objh\\/index.php?controller=AdminDashboard&token=c61f146fdfbfdc9824a366bb7122f57c\"}]},{\"name\":\"product\",\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)";
        // line 1234
        echo "\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin961m2objh\\/index.php\\/sell\\/catalog\\/products\\/new?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"admin961m2objh\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"admin961m2objh\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"admin961m2objh\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"admin961m2objh\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"admin961m2objh\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin961m2objh\\/index.php\\/improve\\/design\\/themes\\/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\/admin961m2objh\\/index.ph";
        echo "p\\/improve\\/design\\/themes-catalog\\/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin961m2objh\\/index.php\\/improve\\/payment\\/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost:8080\\/admin961m2objh\\/index.php?controller=AdminCarriers&token=d7792855c10a202588997c5aa1806d74\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\r\\n    <div class=\\\"col-12\\\">\\r\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\r\\n        <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\r\\n    <\\/div>\\r\\n    <div class=\\\"col-12\\\">\\r\\n        <p class=\\\"text-center text-md-center\\\">\\r\\n          You've seen the essential, but there's a lot more to explore.<br \\/>\\r\\n          Some resources can help you go further:\\r\\n        <\\/p>\\r\\n        <div class=\\\"container-fluid\\\">\\r\\n          <div class=\\\"row\\\">\\r\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"starter-guide\\\"><\\/div>\\r\\n                <sp";
        echo "an class=\\\"link\\\">Starter Guide<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"forum\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Forum<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n          <\\/div>\\r\\n          <div class=\\\"row\\\">\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"training\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Training<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Video tutorial<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n          <\\/div>\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"modal-footer\\\">\\r\\n        <div class=\\\"col-12\\\">\\r\\n            <div class=\\\"text-center text-md-center\\\">\\r\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\r\\n            <\\/div>\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost:8080\\/admin961m2objh\\/index.php?controller=AdminDashboard&token=c61f146fdfbfdc9824a366bb7122f57c\"}]}]}, 1, \"http://localhost:8080/admin961m2objh/index.php?controller=AdminWelcome&token=264a42d14a36543a2f44d1a0f82e9ca9\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <";
        // line 1236
        echo "p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\" data-test=\"ps-checkout-card\">
                <h3 class=\"card-header\">
                    <i class=\"material-icons\">extension</i> One module, all payments methods.
                </h3>
                <div class=\"card-block\">
                    <div class=\"module-item-list\"";
        // line 1274
        echo ">
                        <div class=\"row module-item-wrapper-list py-3\">
                            <div class=\"col-12 col-sm-2 col-md-2 col-lg-3\">
                                <div class=\"img m-auto\">
                                </div>
                            </div>
                            <div class=\"row col-12 col-sm-6 col-md-7 col-lg-7 pl-0\">
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 pl-0\">
                                    <ul class=\"text-muted\">
                                        <li class=\"mb-1\">Offer the widest range of payment methods: cards, PayPal, etc.</li>
                                        <li class=\"mb-1\">Benefit from all PayPal expertise and advantages</li>
                                        <li>Give access to relevant local payment methods for customers around the globe</li>
                                    </ul>
                                </div>
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 pl-0\">
                                    <label class=\"text-muted\">
                                        Including:
                                    </label>
                                    <div>
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/paypal.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/visa.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/mastercard.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto\">
                                <div class=\"text-xs-center\">
                                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminModules&amp;co";
        // line 1301
        echo "nfigure=ps_checkout&amp;token=c0fb3678a3bba8ea836a6905ab02db8d\" class=\"btn btn-primary-reverse btn-outline-primary light-button\">
                                        Configure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1321
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40ovczarnia.pl&amp;firstname=Tymon&amp;lastname=Musyznski&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin961m2objh/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md";
        // line 1371
        echo "-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40ovczarnia.pl&amp;firstname=Tymon&amp;lastname=Musyznski&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-u";
        // line 1410
        echo "nlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1429
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1321
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1429
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__c7cd83f06480cceda0252a62b728ddb9ec162d8dc97ca636ecf3d038c2ef2384";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1683 => 1429,  1618 => 1321,  1585 => 106,  1570 => 1429,  1549 => 1410,  1508 => 1371,  1452 => 1321,  1430 => 1301,  1401 => 1274,  1361 => 1236,  1355 => 1234,  1330 => 1211,  1282 => 1165,  1219 => 1104,  1173 => 1060,  1141 => 1030,  1111 => 1002,  1078 => 971,  1044 => 939,  1011 => 908,  975 => 874,  944 => 845,  910 => 813,  876 => 781,  845 => 752,  813 => 722,  781 => 692,  750 => 663,  709 => 624,  678 => 595,  646 => 565,  614 => 535,  578 => 501,  548 => 473,  514 => 441,  481 => 410,  436 => 367,  410 => 343,  360 => 295,  308 => 245,  258 => 197,  240 => 181,  201 => 144,  158 => 106,  137 => 87,  115 => 67,  89 => 43,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Payment Methods • Ovczarnia</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPayment\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'PL\\';
    var _PS_VERSION_ = \\'1.7.8.11\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your shop.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your shop.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your shop.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'88ed5c37a096079ae418839ea53326fe\\';
    var token_admin_orders = tokenAdminOrders = \\'133c356945da4dd5c1923248cc68c562\\';
    var token_admin_customers = \\'7e11d356d6e613d1cfdc926d11a30e67\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'38e30d7c6b67dc4e40e15874e7207f26\\';
    var currentIndex = \\'index.php?controller=AdminPayment\\';
    var employee_token = \\'9affb77fcd437f30cc07a507d64bde7e\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin961m2objh/index.php/improve/modules/catalog/recommended?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\\';
    var admin_notification_get_link = \\'/admin961m2objh/index.php/common/notifications?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\\';
    var admin_notificati' | raw }}{{ 'on_push_link = adminNotificationPushLink = \\'/admin961m2objh/index.php/common/notifications/ack?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var errorLogin = \\'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.\\';
    var search_product_msg = \\'Search for a product\\';
  </script>

      <link href=\"/admin961m2objh/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin961m2objh/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminAfterHeader.css?version=3.6.3\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin961m2objh\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin961m2objh\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\\\u0142\",\"name\":\"Polish Zlo' | raw }}{{ 'ty\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\\\u0142\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin961m2objh/themes/default/js/bundle/module/module_card.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnoti' | raw }}{{ 'ficationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin961m2objh/index.php/common/notifications?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminpayment\"
  data-base-url=\"/admin961m2objh/index.php\"  data-token=\"aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=594d936bc02bd5072a8c8d6b51839d12\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/improve/modules/manage?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/sell/catalog/categories/new?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php/sell/catalog/products/new?token=3210b4a1f7d26d5a340581a8db68b89a\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
' | raw }}{{ '         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=177586d5b9df82805333b9a6f46624dd\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminOrders&amp;token=133c356945da4dd5c1923248cc68c562\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"80\"
        data-icon=\"icon-AdminParentPayment\"
        data-method=\"add\"
        data-url=\"index.php/improve/payment/payment_methods?-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
        data-post-link=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminQuickAccesses&token=78009fa980ec3a3861edff0a483b48e1\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Payment Methods - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminQuickAccesses&token=78009fa980ec3a3861edff0a483b48e1\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin961m2objh/index.php?controller=AdminSearch&amp;token=ff6bf44924af9d4e27cccdf539764349\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, custom' | raw }}{{ 'er name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"subm' | raw }}{{ 'it\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Your shop is in debug mode.</strong></p><p class=\\'text-left\\'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/admin961m2objh/index.php/configure/advanced/performance/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
          ' | raw }}{{ '    class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=1821bb16025b3d1a4eaa58b93cc43c7b\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-e' | raw }}{{ 'lements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Tymon</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin961m2objh/index.php/configure/advanced/employees/1/edit?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyD' | raw }}{{ 'WXjgZsI\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminLogin&amp;logout=1&amp;token=ae95028fbfae4c0deb773858618231d9\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin961m2objh/index.php/confi' | raw }}{{ 'gure/advanced/employees/toggle-navigation?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin961m2objh/index.php/sell/orders/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                    ' | raw }}{{ '        
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/invoices/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/credit-slips/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin961m2objh/index.php/sell/orders/delivery-slips/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                        ' | raw }}{{ '      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarts&amp;token=1821bb16025b3d1a4eaa58b93cc43c7b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin961m2objh/index.php/sell/catalog/products?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/products?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Products
                                </a>
                              </li>

                              ' | raw }}{{ '                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/categories?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/monitoring/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminAttributesGroups&amp;token=27b1d49a8bad569ed85a8a80e034b869\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin961m2objh/index.php/sell/catalog/brands/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjg' | raw }}{{ 'ZsI\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin961m2objh/index.php/sell/attachments/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCartRules&amp;token=177586d5b9df82805333b9a6f46624dd\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin961m2objh/index.php/sell/stocks/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" ' | raw }}{{ 'data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin961m2objh/index.php/sell/customers/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin961m2objh/index.php/sell/customers/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin961m2objh/index.php/sell/addresses/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  ' | raw }}{{ '
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCustomerThreads&amp;token=38e30d7c6b67dc4e40e15874e7207f26\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCustomerThreads&amp;token=38e30d7c6b67dc4e40e15874e7207f26\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin961m2objh/index.php/sell/customer-service/order-messages/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Order Messages
                                </a>
                              </li>

                       ' | raw }}{{ '                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminReturn&amp;token=0c98d8ac0a247d3c5634afa706d0b19f\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin961m2objh/index.php/modules/metrics/legacy/stats?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin961m2objh/index.php/modules/metrics/legacy/stats?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDW' | raw }}{{ 'XjgZsI\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin961m2objh/index.php/modules/metrics?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin961m2objh/index.php/modules/addons/modules/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
' | raw }}{{ '                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin961m2objh/index.php/modules/addons/modules/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin961m2objh/index.php/improve/modules/manage?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin961m2objh/index.php/modules/addons/themes/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keybo' | raw }}{{ 'ard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin961m2objh/index.php/modules/addons/themes/catalog?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin961m2objh/index.php/improve/design/themes/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin961m2objh/index.php/improve/design/mail_theme/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                             ' | raw }}{{ '               
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin961m2objh/index.php/improve/design/cms-pages/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin961m2objh/index.php/improve/design/modules/positions/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminImages&amp;token=780cf5752257ce244d344a98289ee150\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin961m2objh/index.php/modules/link-widget/list?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Link List
                                </a>
                              </li>

                                                      ' | raw }}{{ '                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarriers&amp;token=d7792855c10a202588997c5aa1806d74\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminCarriers&amp;token=d7792855c10a202588997c5aa1806d74\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin961m2objh/index.php/improve/shipping/preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Prefere' | raw }}{{ 'nces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-' | raw }}{{ 'AdminPaymentPreferences\">
                                <a href=\"/admin961m2objh/index.php/improve/payment/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin961m2objh/index.php/improve/international/localization/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin961m2objh/index.php/improve/international/localization/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
   ' | raw }}{{ '                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin961m2objh/index.php/improve/international/zones/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin961m2objh/index.php/improve/international/taxes/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin961m2objh/index.php/improve/international/translations/settings?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsfacebookModule&amp;token=691bb272854ff98c10c9921629abd0d7\" cl' | raw }}{{ 'ass=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsfacebookModule&amp;token=691bb272854ff98c10c9921629abd0d7\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b536143d7eacf346fbd02bbaf05e8b58\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab' | raw }}{{ '-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin961m2objh/index.php/configure/shop/preferences/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/preferences/preferences?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/order-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"lin' | raw }}{{ 'k\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/product-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/customer-preferences/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin961m2objh/index.php/configure/shop/contacts/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
              ' | raw }}{{ '                  <a href=\"/admin961m2objh/index.php/configure/shop/seo-urls/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminSearchConf&amp;token=2d9a155ea66efecae823d3366944ba6d\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin961m2objh/index.php/configure/advanced/system-information/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
 ' | raw }}{{ '                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/system-information/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/performance/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/administration/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/emails/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> E-mail
                                </a>
                         ' | raw }}{{ '     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/import/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/employees/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/sql-requests/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/logs/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjg' | raw }}{{ 'ZsI\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/webservice-keys/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin961m2objh/index.php/configure/advanced/feature-flags/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</' | raw }}{{ 'nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Payment</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin961m2objh/index.php/improve/payment/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\" aria-current=\"page\">Payment Methods</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Payment Methods          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin961m2objh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin961m2objh/index.ph' | raw }}{{ 'p/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Improve the checkout experience\\',
        \\'description\\': \"Offer the payment methods your customers expect and improve your checkout process so you never miss a sale.<br>\\\\r\\\\n                Here\\\\\\'s a selection of modules,<\\\\strong> compatible with your store<\\\\/strong>, to help you achieve your goals.\",
        \\'Close\\': \\'Close\\',
      },
      recommendedModulesUrl: \\'/admin961m2objh/index.php/modules/addons/modules/recommended?tabClassName=AdminPayment&_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\\',
      shouldAttachRecommendedModulesAfterContent: 1,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<!-- end /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"' | raw }}{{ 'width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\\\"onboarding-welcome\\\\\">\\\\r\\\\n  <i class=\\\\\"material-icons onboarding-button-shut-down\\\\\">close<\\\\/i>\\\\r\\\\n  <p class=\\\\\"welcome\\\\\">Welcome to your shop!<\\\\/p>\\\\r\\\\n  <div class=\\\\\"content\\\\\">\\\\r\\\\n    <p>Hi! My name is Preston and I\\'m here to show you around.<\\\\/p>\\\\r\\\\n    <p>You will discover a few essential steps before you can launch your shop:\\\\r\\\\n    Create your first product, customize your shop, configure shipping and payments...<\\\\/p>\\\\r\\\\n  <\\\\/div>\\\\r\\\\n  <div class=\\\\\"started\\\\\">\\\\r\\\\n    <p>Let\\'s get started!<\\\\/p>\\\\r\\\\n  <\\\\/div>\\\\r\\\\n  <div class=\\\\\"buttons\\\\\">\\\\r\\\\n    <button class=\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\">Later<\\\\/button>\\\\r\\\\n    <button class=\\\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\\\">Start<\\\\/button>\\\\r\\\\n  <\\\\/div>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost:8080\\\\/admin961m2objh\\\\/index.php?controller=AdminDashboard&token=c61f146fdfbfdc9824a366bb7122f57c\"}]},{\"name\":\"product\",\"title\":\"Let\\'s create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don\\'t worry, you can edit it later :)' | raw }}{{ '\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\\\/admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"admin961m2objh\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\\\/admin961m2objh\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\\\/admin961m2objh\\\\/index.ph' | raw }}{{ 'p\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\\\/admin961m2objh\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=aZKJzFS-Cgb7fhyn9ZzrnDoebSXin2q4mRyDWXjgZsI\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\\\/\\\\/localhost:8080\\\\/admin961m2objh\\\\/index.php?controller=AdminCarriers&token=d7792855c10a202588997c5aa1806d74\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\\\"onboarding-welcome\\\\\" class=\\\\\"modal-body\\\\\">\\\\r\\\\n    <div class=\\\\\"col-12\\\\\">\\\\r\\\\n        <button class=\\\\\"onboarding-button-next pull-right close\\\\\" type=\\\\\"button\\\\\">&times;<\\\\/button>\\\\r\\\\n        <h2 class=\\\\\"text-center text-md-center\\\\\">Over to you!<\\\\/h2>\\\\r\\\\n    <\\\\/div>\\\\r\\\\n    <div class=\\\\\"col-12\\\\\">\\\\r\\\\n        <p class=\\\\\"text-center text-md-center\\\\\">\\\\r\\\\n          You\\'ve seen the essential, but there\\'s a lot more to explore.<br \\\\/>\\\\r\\\\n          Some resources can help you go further:\\\\r\\\\n        <\\\\/p>\\\\r\\\\n        <div class=\\\\\"container-fluid\\\\\">\\\\r\\\\n          <div class=\\\\\"row\\\\\">\\\\r\\\\n            <div class=\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\">\\\\r\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\" target=\\\\\"_blank\\\\\">\\\\r\\\\n                <div class=\\\\\"starter-guide\\\\\"><\\\\/div>\\\\r\\\\n                <sp' | raw }}{{ 'an class=\\\\\"link\\\\\">Starter Guide<\\\\/span>\\\\r\\\\n              <\\\\/a>\\\\r\\\\n            <\\\\/div>\\\\r\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\r\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\" target=\\\\\"_blank\\\\\">\\\\r\\\\n                <div class=\\\\\"forum\\\\\"><\\\\/div>\\\\r\\\\n                <span class=\\\\\"link\\\\\">Forum<\\\\/span>\\\\r\\\\n              <\\\\/a>\\\\r\\\\n            <\\\\/div>\\\\r\\\\n          <\\\\/div>\\\\r\\\\n          <div class=\\\\\"row\\\\\">\\\\r\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\r\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\r\\\\n                <div class=\\\\\"training\\\\\"><\\\\/div>\\\\r\\\\n                <span class=\\\\\"link\\\\\">Training<\\\\/span>\\\\r\\\\n              <\\\\/a>\\\\r\\\\n            <\\\\/div>\\\\r\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\r\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\r\\\\n                <div class=\\\\\"video-tutorial\\\\\"><\\\\/div>\\\\r\\\\n                <span class=\\\\\"link\\\\\">Video tutorial<\\\\/span>\\\\r\\\\n              <\\\\/a>\\\\r\\\\n            <\\\\/div>\\\\r\\\\n          <\\\\/div>\\\\r\\\\n        <\\\\/div>\\\\r\\\\n    <\\\\/div>\\\\r\\\\n    <div class=\\\\\"modal-footer\\\\\">\\\\r\\\\n        <div class=\\\\\"col-12\\\\\">\\\\r\\\\n            <div class=\\\\\"text-center text-md-center\\\\\">\\\\r\\\\n                <button class=\\\\\"btn btn-primary onboarding-button-next\\\\\">I\\'m ready<\\\\/button>\\\\r\\\\n            <\\\\/div>\\\\r\\\\n        <\\\\/div>\\\\r\\\\n    <\\\\/div>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost:8080\\\\/admin961m2objh\\\\/index.php?controller=AdminDashboard&token=c61f146fdfbfdc9824a366bb7122f57c\"}]}]}, 1, \"http://localhost:8080/admin961m2objh/index.php?controller=AdminWelcome&token=264a42d14a36543a2f44d1a0f82e9ca9\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <' | raw }}{{ 'p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\" data-test=\"ps-checkout-card\">
                <h3 class=\"card-header\">
                    <i class=\"material-icons\">extension</i> One module, all payments methods.
                </h3>
                <div class=\"card-block\">
                    <div class=\"module-item-list\"' | raw }}{{ '>
                        <div class=\"row module-item-wrapper-list py-3\">
                            <div class=\"col-12 col-sm-2 col-md-2 col-lg-3\">
                                <div class=\"img m-auto\">
                                </div>
                            </div>
                            <div class=\"row col-12 col-sm-6 col-md-7 col-lg-7 pl-0\">
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 pl-0\">
                                    <ul class=\"text-muted\">
                                        <li class=\"mb-1\">Offer the widest range of payment methods: cards, PayPal, etc.</li>
                                        <li class=\"mb-1\">Benefit from all PayPal expertise and advantages</li>
                                        <li>Give access to relevant local payment methods for customers around the globe</li>
                                    </ul>
                                </div>
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 pl-0\">
                                    <label class=\"text-muted\">
                                        Including:
                                    </label>
                                    <div>
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/paypal.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/visa.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/modules/ps_checkout/views/img/mastercard.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto\">
                                <div class=\"text-xs-center\">
                                    <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminModules&amp;co' | raw }}{{ 'nfigure=ps_checkout&amp;token=c0fb3678a3bba8ea836a6905ab02db8d\" class=\"btn btn-primary-reverse btn-outline-primary light-button\">
                                        Configure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8080/admin961m2objh/index.php?controller=AdminDashboard&amp;token=c61f146fdfbfdc9824a366bb7122f57c\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40ovczarnia.pl&amp;firstname=Tymon&amp;lastname=Musyznski&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin961m2objh/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop\\'s marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md' | raw }}{{ '-6\">
\t\t\t\t\t\t<h4>Don\\'t have an account?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40ovczarnia.pl&amp;firstname=Tymon&amp;lastname=Musyznski&amp;website=http%3A%2F%2Flocalhost%3A8080%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-u' | raw }}{{ 'nlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__c7cd83f06480cceda0252a62b728ddb9ec162d8dc97ca636ecf3d038c2ef2384", "");
    }
}
