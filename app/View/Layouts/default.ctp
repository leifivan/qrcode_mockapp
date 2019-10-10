<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <meta name="description" content="QR Code" />
    <meta name="keywords" content="QR Code" />
    <meta name="author" content="QR Code" />
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- food icons -->
    <link rel="stylesheet" type="text/css" href="/css/organicfoodicons.css" />
    <!-- demo styles -->
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <!-- menu styles -->
    <link rel="stylesheet" type="text/css" href="/css/component.css" />
    <script src="/vendor/jquery/dist/jquery.min.js"></script>

    <script src="/js/template/modernizr-custom.js"></script>
</head>
<body>
    <div id="container">
        <!-- Blueprint header -->
        <header class="bp-header cf">
            <div class="dummy-logo">
                <div class="dummy-icon foodicon foodicon--coconut"></div>
                <h2 class="dummy-heading">QR Code Mock App</h2>
            </div>
        </header>
        <nav id="ml-menu" class="menu">
            <div class="menu__wrap">
                <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
<!--                     <li class="menu__item" id="sub-menu1" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" >All QR Codes</a></li> -->
                    <li class="menu__item" id="sub-menu2" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="/qr_code/new_qrcode_google_api">Google Infographics API</a></li>
                    <li class="menu__item" id="sub-menu2" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="/qr_code/new_qrcode_javascript">Javascript</a></li>
                    <li class="menu__item" id="sub-menu2" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="/qr_code/new_qrcode_php">PHP</a></li>
                </ul>
            </div>
        </nav>
          <!-- Content -->
          <main>
            <div class="content">
              <?= $this->fetch('content') ?>
            </div>
          </main>
            <script src="/js/template/classie.js"></script>
            <script src="/js/template/dummydata.js"></script>
            <script src="/js/template/main.js"></script>
            <script>
            (function() {
                var menuEl = document.getElementById('ml-menu'),
                    mlmenu = new MLMenu(menuEl, {
                        // breadcrumbsCtrl : true, // show breadcrumbs
                        // initialBreadcrumb : 'all', // initial breadcrumb text
                        backCtrl : false, // show back button
                        // itemsDelayInterval : 60, // delay between each menu item sliding animation
                        onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
                    });

                // simulate grid content loading
                var gridWrapper = document.querySelector('.content');

                function loadDummyData(ev, itemName) {
                    // ev.preventDefault();

                    gridWrapper.innerHTML = '';
                    classie.add(gridWrapper, 'content--loading');
                    setTimeout(function() {
                        classie.remove(gridWrapper, 'content--loading');
                        gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
                    }, 700);
                }
            })();
            </script>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
