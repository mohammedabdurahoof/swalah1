<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swalah | App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    
  

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

      
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom topnav-navbar">
                    <div class="container-fluid">

                        <!-- LOGO -->
                        <a href="" class="topnav-logo">
                            <span class="topnav-logo-lg">
                                <img src="images/logo.png" alt="" height="60">
                            </span>
                            <span class="topnav-logo-sm">
                                <img src="images/logo.png" alt="" height="60">
                            </span>
                        </a>

                        <ul class="list-unstyled topbar-menu float-end mb-0">

                            <li class="dropdown notification-list d-xl-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
        
                        <a class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <div class="app-search dropdown">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text  btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                          
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-dark navbar-expand-lg bg-dark topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-home me-1"></i>Home <div class="arrow-down"></div>
                                        </a>
                                       
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-info-circle me-1"></i>About <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                            <a href="apps-calendar.html" class="cc">Calendar</a>
                                            <a href="apps-chat.html" class="dropdown-item">Chat</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ecommerce <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                    <a href="apps-ecommerce-products.html" class="dropdown-item">Products</a>
                                                    <a href="apps-ecommerce-products-details.html" class="dropdown-item">Products Details</a>
                                                    <a href="apps-ecommerce-orders.html" class="dropdown-item">Orders</a>
                                                    <a href="apps-ecommerce-orders-details.html" class="dropdown-item">Order Details</a>
                                                    <a href="apps-ecommerce-customers.html" class="dropdown-item">Customers</a>
                                                    <a href="apps-ecommerce-shopping-cart.html" class="dropdown-item">Shopping Cart</a>
                                                    <a href="apps-ecommerce-checkout.html" class="dropdown-item">Checkout</a>
                                                    <a href="apps-ecommerce-sellers.html" class="dropdown-item">Sellers</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Email <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                    <a href="apps-email-inbox.html" class="dropdown-item">Inbox</a>
                                                    <a href="apps-email-read.html" class="dropdown-item">Read Email</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Projects <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                                    <a href="apps-projects-list.html" class="dropdown-item">List</a>
                                                    <a href="apps-projects-details.html" class="dropdown-item">Details</a>
                                                    <a href="apps-projects-gantt.html" class="dropdown-item">Gantt</a>
                                                    <a href="apps-projects-add.html" class="dropdown-item">Create Project</a>
                                                </div>
                                            </div>
                                            <a href="apps-social-feed.html" class="dropdown-item">Social Feed</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tasks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tasks <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                                    <a href="apps-tasks.html" class="dropdown-item">List</a>
                                                    <a href="apps-tasks-details.html" class="dropdown-item">Details</a>
                                                    <a href="apps-kanban.html" class="dropdown-item">Kanban Board</a>
                                                </div>
                                            </div>
                                            <a href="apps-file-manager.html" class="dropdown-item">File Manager</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-copy-alt me-1"></i>Pages <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Authenitication <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                    <a href="pages-login.html" class="dropdown-item">Login</a>
                                                    <a href="pages-login-2.html" class="dropdown-item">Login 2</a>
                                                    <a href="pages-register.html" class="dropdown-item">Register</a>
                                                    <a href="pages-register-2.html" class="dropdown-item">Register 2</a>
                                                    <a href="pages-logout.html" class="dropdown-item">Logout</a>
                                                    <a href="pages-logout-2.html" class="dropdown-item">Logout 2</a>
                                                    <a href="pages-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                    <a href="pages-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                                    <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                    <a href="pages-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                                    <a href="pages-confirm-mail.html" class="dropdown-item">Confirm Mail</a>
                                                    <a href="pages-confirm-mail-2.html" class="dropdown-item">Confirm Mail 2</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Error <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                    <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                    <a href="pages-404-alt.html" class="dropdown-item">Error 404-alt</a>
                                                    <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                </div>
                                            </div>
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-preloader.html" class="dropdown-item">With Preloader</a>
                                            <a href="pages-profile.html" class="dropdown-item">Profile</a>
                                            <a href="pages-profile-2.html" class="dropdown-item">Profile 2</a>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-faq.html" class="dropdown-item">FAQ</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="landing.html" class="dropdown-item">Landing</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-package me-1"></i>Components <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <a href="widgets.html" class="dropdown-item">Widgets</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Base UI 1 <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                    <a href="ui-accordions.html" class="dropdown-item">Accordions</a>
                                                    <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                    <a href="ui-avatars.html" class="dropdown-item">Avatars</a>
                                                    <a href="ui-badges.html" class="dropdown-item">Badges</a>
                                                    <a href="ui-breadcrumb.html" class="dropdown-item">Breadcrumb</a>
                                                    <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                    <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                    <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                    <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                    <a href="ui-embed-video.html" class="dropdown-item">Embed Video</a>
                                                    <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                    <a href="ui-list-group.html" class="dropdown-item">List Group</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Base UI 2 <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                                    <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                    <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                                                    <a href="ui-offcanvas.html" class="dropdown-item">Offcanvas</a>
                                                    <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                    <a href="ui-popovers.html" class="dropdown-item">Popovers</a>
                                                    <a href="ui-progress.html" class="dropdown-item">Progress</a>
                                                    <a href="ui-ribbons.html" class="dropdown-item">Ribbons</a>
                                                    <a href="ui-spinners.html" class="dropdown-item">Spinners</a>
                                                    <a href="ui-tabs.html" class="dropdown-item">Tabs</a>
                                                    <a href="ui-tooltips.html" class="dropdown-item">Tooltips</a>
                                                    <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Extended UI <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                                    <a href="extended-dragula.html" class="dropdown-item">Dragula</a>
                                                    <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                                    <a href="extended-ratings.html" class="dropdown-item">Ratings</a>
                                                    <a href="extended-scrollbar.html" class="dropdown-item">Scrollbar</a>
                                                    <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                                    <a href="extended-treeview.html" class="dropdown-item">Treeview</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Forms <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                                    <a href="form-elements.html" class="dropdown-item">Basic Elements</a>
                                                    <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                    <a href="form-validation.html" class="dropdown-item">Validation</a>
                                                    <a href="form-wizard.html" class="dropdown-item">Wizard</a>
                                                    <a href="form-fileuploads.html" class="dropdown-item">File Uploads</a>
                                                    <a href="form-editors.html" class="dropdown-item">Editors</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Charts <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                    <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                                    <a href="charts-brite.html" class="dropdown-item">Britecharts</a>
                                                    <a href="charts-apex-line.html" class="dropdown-item">Apex Charts</a>
                                                    <a href="charts-sparkline.html" class="dropdown-item">Sparklines</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tables <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                    <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                    <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Icons <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                    <a href="icons-mdi.html" class="dropdown-item">Material Design</a>
                                                    <a href="icons-unicons.html" class="dropdown-item">Unicons</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Maps <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                    <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                                    <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-window me-1"></i>Layouts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                            <a href="index.html" class="dropdown-item">Vertical</a>
                                            <a href="layouts-detached.html" class="dropdown-item">Detached</a>
                                            <a href="layouts-horizontal.html" class="dropdown-item">Horizontal</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
              
          




   

   

    <!-- bundle -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/dataTables.checkboxes.min.js"></script>

    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.products.js"></script>
    <script src="assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->

</body>

</html>
