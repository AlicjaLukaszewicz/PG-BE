<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__74f4e7dcd07f27f66f6603d14ff611c4 */
class __TwigTemplate_b8010f369d94b7cd264912611cc6574f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
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

<title>Localization • hm</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminLocalization';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '18d015672daae7d91afd6b20ae50fcab';
    var currentIndex = 'index.php?controller=AdminLocalization';
    var employee_token = '48e527437ea88d8efc31855503bedf61';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/admin147fswq9o4qcew1s72f/index.php/improve/modules/manage?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew';
    var admin_notification_get_link = '/admin147fswq9o4qcew1s72f/index.php/common/notifications?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew';
    var admin_notification_push_link = adminNotificationPushLink = '/admin147fswq9o4qcew1s72f/index.php/common/notifications/ack?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var s";
        // line 43
        echo "earch_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin147fswq9o4qcew1s72f/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin147fswq9o4qcew1s72f\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin147fswq9o4qcew1s72f\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Polish Zloty\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"se";
        // line 67
        echo "condaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin147fswq9o4qcew1s72f/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin147fswq9o4qcew1s72f/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin147fswq9o4qcew1s72f/index.php/common/notifications?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminlocalization\"
  data-base-url=\"/admin147fswq9o4qcew1s72f/index.php\"  data-token=\"ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminDashboard&amp;token=04284916d7e7056c6db17de805ae7a2b\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7dd7c8cca8cc5d4f34a0b58cda407cf0\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/improve/modules/manage?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/catalog/categories/new?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/catalog/products-v2/create?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
                 data-it";
        // line 137
        echo "em=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=12d16c011ec2c61db0db953f6fe333fb\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/orders?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"150\"
        data-icon=\"icon-AdminParentLocalization\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/localization/?-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\"
        data-post-link=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminQuickAccesses&token=51748fbc43fdbb2698806ae1d0f990fb\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Localization - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminQuickAccesses&token=51748fbc43fdbb2698806ae1d0f990fb\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin147fswq9o4qcew1s72f/index.php?controller=AdminSearch&amp;token=4b2c0b00c3e0958d28234f4a358d5059\"
      role=\"search\">
  <input type=\"hidden\" na";
        // line 177
        echo "me=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
     ";
        // line 193
        echo "   <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7dd7c8cca8cc5d4f34a0b58cda407cf0\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/improve/modules/manage?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/catalog/categories/new?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/catalog/products-v2/create?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=12d16c011ec2c61db0db953f6fe333fb\"
             data-item=\"New vouch";
        // line 230
        echo "er\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php/sell/orders?token=f1a1880766bf9f3f00d5b9fa29a3b5b8\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"140\"
      data-icon=\"icon-AdminParentLocalization\"
      data-method=\"add\"
      data-url=\"index.php/improve/international/localization/?-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\"
      data-post-link=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminQuickAccesses&token=51748fbc43fdbb2698806ae1d0f990fb\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Localization - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminQuickAccesses&token=51748fbc43fdbb2698806ae1d0f990fb\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
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
    <span id=\"notifications-t";
        // line 276
        echo "otal\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
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
              Have you checked your <strong><a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fa2bac14b1c6ed68637c99f4c7c0504c\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                               ";
        // line 328
        echo "     <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img ";
        // line 379
        echo "class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" alt=\"Alicja\" /></span>
        <span class=\"employee_profile\">Welcome back Alicja</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/employees/1/edit?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminLogin&amp;logout=1&amp;token=70e4ce274d0b933d6e4e6a6c72c3f47c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/employees/toggle-navigation?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminDashboard&amp;token=04284916d7e7056c6db17de805ae7a2b\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminDashboard&amp;token=04284916d7e7056c6db17de805ae7a2b\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <sp";
        // line 422
        echo "an>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/orders/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/orders/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices";
        // line 461
        echo "\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/orders/invoices/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/orders/credit-slips/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/orders/delivery-slips/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCarts&amp;token=fa2bac14b1c6ed68637c99f4c7c0504c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
              ";
        // line 492
        echo "                                
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/catalog/products?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
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
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/catalog/products?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/catalog/categories?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Categories
                                </a>
                              </li>

                                              ";
        // line 523
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/catalog/monitoring/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminAttributesGroups&amp;token=22f06f194f16acf7f10c6999c007b744\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/catalog/brands/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/attachments/?_token=ef7yb-Aco";
        // line 551
        echo "7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCartRules&amp;token=12d16c011ec2c61db0db953f6fe333fb\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/stocks/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/customers/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
        ";
        // line 584
        echo "                                                            keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/customers/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/addresses/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCustomerThreads&amp;token=0767add95deb9f79eaf8a7e70d8c0d38\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                ";
        // line 613
        echo "      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCustomerThreads&amp;token=0767add95deb9f79eaf8a7e70d8c0d38\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/sell/customer-service/order-messages/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminReturn&amp;token=b913c1068cd7abbe253c3b524a02214c\" ";
        // line 641
        echo "class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminStats&amp;token=7dd7c8cca8cc5d4f34a0b58cda407cf0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/modules/manage?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                 ";
        // line 682
        echo "                                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/modules/manage?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/design/themes/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class";
        // line 711
        echo "=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/design/themes/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/design/mail_theme/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/design/cms-pages/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/design/modules/positions/?_t";
        // line 740
        echo "oken=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminImages&amp;token=5309f001d1158c3c136c187900737b05\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/modules/link-widget/list?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCarriers&amp;token=624dbcba295af1b09aa0e993b821ff8b\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i cla";
        // line 772
        echo "ss=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminCarriers&amp;token=624dbcba295af1b09aa0e993b821ff8b\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/shipping/preferences/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/payment/payment_methods?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
      ";
        // line 802
        echo "                <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/payment/payment_methods?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/payment/preferences?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a hre";
        // line 833
        echo "f=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/localization/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/localization/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/zones/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 862
        echo "veltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/taxes/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/translations/settings?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/preferences/preferences?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                           ";
        // line 898
        echo "         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/preferences/preferences?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/order-preferences/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/product-preferences/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                 ";
        // line 928
        echo "                                           
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/customer-preferences/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/contacts/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/shop/seo-urls/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminSearchConf&amp;token=962f4b1a5f166c838fa034a8b3b5265d\" class=\"link\"> Search
                        ";
        // line 955
        echo "        </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/system-information/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/system-information/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
      ";
        // line 987
        echo "                          <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/performance/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/administration/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/emails/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/import/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1017
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/employees/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/sql-requests/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/logs/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/webservice-keys/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Webservice
                                </a>
                              </li>

  ";
        // line 1047
        echo "                                                                                                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/feature-flags/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin147fswq9o4qcew1s72f/index.php/configure/advanced/security/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Localization</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Localization          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
         ";
        // line 1098
        echo "                     <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin147fswq9o4qcew1s72f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminLocalization%253Fversion%253D8.1.2%2526country%253Den/Help?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/localization/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" id=\"subtab-AdminLocalization\" class=\"nav-link tab active current\" data-submenu=\"58\">
                      Localiza";
        // line 1119
        echo "tion
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/languages/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" id=\"subtab-AdminLanguages\" class=\"nav-link tab \" data-submenu=\"59\">
                      Languages
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/currencies/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" id=\"subtab-AdminCurrencies\" class=\"nav-link tab \" data-submenu=\"60\">
                      Currencies
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin147fswq9o4qcew1s72f/index.php/improve/international/geolocation/?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\" id=\"subtab-AdminGeolocation\" class=\"nav-link tab \" data-submenu=\"61\">
                      Geolocation
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                          ";
        // line 1149
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
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
               data-url=\"/admin147fswq9o4qcew1s72f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminLocalization%253Fversion%253D8.1.2%2526country%253Den/Help?_token=ef7yb-Aco7oClAfc1UuRun6K40Ibqv5znlLBTP4mVew\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1185
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

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
  <a href=\"http://localhost:8080/admin147fswq9o4qcew1s72f/index.php?controller=AdminDashboard&amp;token=04284916d7e7056c6db17de805ae7a2b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1219
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1185
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1219
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__74f4e7dcd07f27f66f6603d14ff611c4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1384 => 1219,  1363 => 1185,  1352 => 102,  1343 => 1219,  1303 => 1185,  1265 => 1149,  1233 => 1119,  1210 => 1098,  1157 => 1047,  1125 => 1017,  1093 => 987,  1059 => 955,  1030 => 928,  998 => 898,  960 => 862,  929 => 833,  896 => 802,  864 => 772,  830 => 740,  799 => 711,  768 => 682,  725 => 641,  695 => 613,  664 => 584,  629 => 551,  599 => 523,  566 => 492,  533 => 461,  492 => 422,  447 => 379,  394 => 328,  340 => 276,  292 => 230,  253 => 193,  235 => 177,  193 => 137,  153 => 102,  116 => 67,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__74f4e7dcd07f27f66f6603d14ff611c4", "");
    }
}