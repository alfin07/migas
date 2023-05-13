<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/range-slider.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header ">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/coba.png" alt="" style="width: 22%"></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
            <p class="mb-0 font-roboto">Human Resources Department</p>
            <ul>
              <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
              </li>
              <li><span>2 year</span>
                <p>Experince</p>
              </li>
              <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
              </li>
            </ul>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="index.html">Default</a></li>
                      <li><a href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Page layout</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                      <li><a href="layout-dark.html">Dark</a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Components             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="state-color.html">State color</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="loader.html">Spinners</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                          <li><a href="tab-material.html">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="navs.html">Navs</a></li>
                      <li><a href="box-shadow.html">Shadow</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="steps.html">Steps</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky         </a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="tabbed-card.html">Tabbed Card</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="timeline-v-1.html">Timeline 1</a></li>
                          <li><a href="timeline-v-2.html">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Builders</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-builder-1.html">Form Builder 1</a></li>
                      <li><a href="form-builder-2.html">Form Builder 2</a></li>
                      <li><a href="pagebuild.html">Page Builder</a></li>
                      <li> <a href="button-builder.html">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Thimify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon             </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="buttons-flat.html">Flat Style</a></li>
                      <li><a href="buttons-edge.html">Edge Style</a></li>
                      <li><a href="raised-button.html">Raised Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Forms</h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls                </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-validation.html">Form Validation</a></li>
                      <li><a href="base-input.html">Base Inputs</a></li>
                      <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                      <li><a href="input-group.html">Input Groups</a></li>
                      <li><a href="megaoptions.html">Mega Options </a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>Form Widgets</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datepicker.html">Datepicker</a></li>
                      <li><a href="time-picker.html">Timepicker</a></li>
                      <li><a href="datetimepicker.html">Datetimepicker</a></li>
                      <li><a href="daterangepicker.html">Daterangepicker</a></li>
                      <li><a href="touchspin.html">Touchspin</a></li>
                      <li><a href="select2.html">Select2</a></li>
                      <li><a href="switch.html">Switch</a></li>
                      <li><a href="typeahead.html">Typeahead</a></li>
                      <li><a href="clipboard.html">Clipboard </a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Form layout</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="default-form.html">Default Forms</a></li>
                      <li><a href="form-wizard.html">Form Wizard 1</a></li>
                      <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                      <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Table</h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="server"></i><span>Bootstrap Tables             </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                      <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                      <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                      <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                      <li><a href="table-components.html">Table components</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Data Tables   </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datatable-basic-init.html">Basic Init</a></li>
                      <li><a href="datatable-advance.html">Advance Init</a></li>
                      <li><a href="datatable-styling.html">Styling</a></li>
                      <li><a href="datatable-AJAX.html">AJAX</a></li>
                      <li><a href="datatable-server-side.html">Server Side</a></li>
                      <li><a href="datatable-plugin.html">Plug-in</a></li>
                      <li><a href="datatable-API.html">API</a></li>
                      <li><a href="datatable-data-source.html">Data Sources</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables  </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                      <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                      <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                      <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                      <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                      <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                      <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                      <li><a href="datatable-ext-scroller.html">Scroller                      </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="jsgrid-table.html"><i data-feather="file-text"></i><span>Js Grid Table</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Applications             </h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Project                </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="projects.html">Project List</a></li>
                      <li><a href="projectcreate.html">Create new             </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="file-manager.html"><i data-feather="git-pull-request"></i><span>File manager</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="kanban.html"><i data-feather="monitor"></i><span>kanban Board</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="product.html">Product</a></li>
                      <li><a href="product-page.html">Product page</a></li>
                      <li><a href="list-products.html">Product list</a></li>
                      <li><a href="payment-details.html">Payment Details</a></li>
                      <li><a href="order-history.html">Order History</a></li>
                      <li><a href="invoice-template.html">Invoice</a></li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="list-wish.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="email_inbox.html">Mail Inbox</a></li>
                      <li><a href="email_read.html">Read mail</a></li>
                      <li><a href="email_compose.html">Compose</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="chat.html">Chat App</a></li>
                      <li><a href="chat-video.html">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="heart"></i><span>Bookmarks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="contacts.html"><i data-feather="list"></i><span>Contacts</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="task.html"><i data-feather="check-square"></i><span>Tasks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="calendar-basic.html"><i data-feather="calendar"></i><span>Calender        </span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="social-app.html"><i data-feather="zap"></i><span>Social App</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="to-do.html"><i data-feather="clock"></i><span>To-Do</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="search.html"><i data-feather="search"></i><span>Search Result</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages             </h6>
                    </div>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="landing-page.html"><i data-feather="navigation-2"></i><span>Landing page</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="sample-page.html"><i data-feather="file"></i><span>Sample page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="internationalization.html"><i data-feather="aperture"></i><span>Internationalization</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="../starter-kit/index.html"><i data-feather="anchor"></i><span>Starter kit   </span></a></li>
                  <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                                  <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                                  <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                                  <li><a href="error-page4.html" target="_blank">Error page 4                         </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="login.html" target="_blank">Login Simple</a></li>
                                  <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                  <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                  <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                  <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                  <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                  <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                  <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                  <li><a href="sign-up-two.html" target="_blank">Register with Bg video                          </a></li>
                                  <li><a href="unlock.html">Unlock User</a></li>
                                  <li><a href="forget-password.html">Forget Password</a></li>
                                  <li><a href="creat-password.html">Creat Password</a></li>
                                  <li><a href="maintenance.html">Maintenance</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="comingsoon.html">Coming Simple</a></li>
                                  <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                  <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="basic-template.html">Basic Email</a></li>
                                  <li><a href="email-header.html">Basic With Header</a></li>
                                  <li><a href="template-email.html">Ecomerce Template</a></li>
                                  <li><a href="template-email-2.html">Email Template 2</a></li>
                                  <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                  <li><a href="email-order-success.html">Order Success      </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Miscellaneous             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="faq.html"><i data-feather="help-circle"></i><span>FAQ</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Knowledgebase</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="knowledgebase.html">Knowledgebase</a></li>
                      <li><a href="knowledge-category.html">Knowledge category</a></li>
                      <li><a href="knowledge-detail.html">Knowledge detail</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          {{-- <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Product</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div> --}}
          <!-- Container-fluid starts-->
          <div class="container-fluid product-wrapper">
            <div class="product-grid">
              <div class="feature-products">
                {{-- <div class="row m-b-10">
                  <div class="col-md-3 col-sm-2 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a></div>
                    <div class="d-none-productlist filter-toggle">
                      <h6 class="mb-0">Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6>
                    </div>
                    <div class="grid-options d-inline-block">
                      <ul>
                        <li><a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                        <li><a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                        <li><a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                        <li><a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-10 text-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                    <div class="select2-drpdwn-product select-options d-inline-block">
                      <select class="form-control btn-square" name="select">
                        <option value="opt1">Featured</option>
                        <option value="opt2">Lowest Prices</option>
                        <option value="opt3">Highest Prices</option>
                      </select>
                    </div>
                  </div>
                </div> --}}
                <div class="row">                            
                  <div class="col-md-12">
                    <div class="pro-filter-sec">
                      <div class="product-sidebar">
                        <div class="filter-section">
                          <div class="card">
                            <div class="card-header">
                              <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                            </div>
                            <div class="left-filter">
                              <div class="card-body filter-cards-view animate-chk">
                                <div class="product-filter">
                                  <h6 class="f-w-600">Category</h6>
                                  <div class="checkbox-animated mt-0">
                                    <label class="d-block" for="edo-ani5">
                                      <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title="">Man Shirt
                                    </label>
                                    <label class="d-block" for="edo-ani6">
                                      <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="">Man Jeans
                                    </label>
                                    <label class="d-block" for="edo-ani7">
                                      <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="">Woman Top
                                    </label>
                                    <label class="d-block" for="edo-ani8">
                                      <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="">Woman Jeans
                                    </label>
                                    <label class="d-block" for="edo-ani9">
                                      <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="">Man T-shirt
                                    </label>
                                  </div>
                                </div>
                                <div class="product-filter">
                                  <h6 class="f-w-600">Brand</h6>
                                  <div class="checkbox-animated mt-0">
                                    <label class="d-block" for="chk-ani">
                                      <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title=""> Levi's
                                    </label>
                                    <label class="d-block" for="chk-ani1">
                                      <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="">Diesel
                                    </label>
                                    <label class="d-block" for="chk-ani2">
                                      <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="">Lee
                                    </label>
                                    <label class="d-block" for="chk-ani3">
                                      <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="">Hudson
                                    </label>
                                    <label class="d-block" for="chk-ani4">
                                      <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="">Denizen
                                    </label>
                                    <label class="d-block" for="chk-ani5">
                                      <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="">Spykar
                                    </label>
                                  </div>
                                </div>
                                <div class="product-filter slider-product">
                                  <h6 class="f-w-600">Colors</h6>
                                  <div class="color-selector">
                                    <ul>
                                      <li class="white"></li>
                                      <li class="gray"></li>
                                      <li class="black"></li>
                                      <li class="orange"></li>
                                      <li class="green"></li>
                                      <li class="pink"></li>
                                      <li class="yellow"></li>
                                      <li class="blue"></li>
                                      <li class="red"></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="product-filter pb-0">
                                  <h6 class="f-w-600">Price</h6>
                                  <input id="u-range-03" type="text">
                                  <h6 class="f-w-600">New Products</h6>
                                </div>
                                <div class="product-filter pb-0 new-products">
                                  <div class="owl-carousel owl-theme" id="testimonial">
                                    <div class="item">
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  product-wrapper-grid</ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="media">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="media-body">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-filter text-center"><img class="img-fluid banner-product" src="../assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-search">
                        <form>
                          <div class="form-group m-0">
                            <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-wrapper-grid">
                <div class="row">
                    @for($i=0; $i <25;$i++)
                  <div class="col-xl-3 col-sm-3">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="http://source.unsplash.com/917x1000?{{ $barang[rand(0,4)]}}" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter16">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="http://source.unsplash.com/917x1000?basketball" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Nama Barang</h4></a>
                                    <div class="product-price">Rp. 150.000
                                      <del>Rp.200.000</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart                                                     </a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Nama Barang</h4></a>
                          <p>Kategori Barang</p>
                          <div class="product-price">Rp. 150.000
                            <del>Rp. 200.000</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endfor
                  {{-- <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter1">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>fido dido</h4></a>
                                    <div class="product-price">$55.00
                                      <del>$62.00 </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>fido dido</h4></a>
                          <p>Solid Polo Collar T-shirt</p>
                          <div class="product-price">$55.00
                            <del>$62.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter2">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Wonder Woman</h4></a>
                                    <div class="product-price">$45.00
                                      <del>$52.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Wonder Woman</h4></a>
                          <p>Woman Gray Round T-shirt</p>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter3">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Roadster</h4></a>
                                    <div class="product-price">$38.00
                                      <del>$45.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Roadster</h4></a>
                          <p>Women Solid Denim Jacket</p>
                          <div class="product-price">$38.00
                            <del>$45.00 </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter4">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Roadster</h4></a>
                                    <div class="product-price">$38.00
                                      <del>$45.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Roadster</h4></a>
                          <p>Women Solid Denim Jacket</p>
                          <div class="product-price">$38.00
                            <del>$45.00 </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter5">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Man's Jacket                                       </h4></a>
                                    <div class="product-price">$26.00
                                      <del>$35.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Man's Jacket                                       </h4></a>
                          <p>Solid Denim Jacket</p>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>fido dido</h4></a>
                                    <div class="product-price">$55.00
                                      <del>$62.00 </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>fido dido</h4></a>
                          <p>Solid Polo Collar T-shirt</p>
                          <div class="product-price">$55.00
                            <del>$62.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Wonder Woman</h4></a>
                                    <div class="product-price">$45.00
                                      <del>$52.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Wonder Woman</h4></a>
                          <p>Woman Gray Round T-shirt</p>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Wonder Woman</h4></a>
                                    <div class="product-price">$45.00
                                      <del>$52.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Wonder Woman</h4></a>
                          <p>Woman Gray Round T-shirt</p>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Roadster</h4></a>
                                    <div class="product-price">$38.00
                                      <del>$45.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Roadster</h4></a>
                          <p>Women Solid Denim Jacket</p>
                          <div class="product-price">$38.00
                            <del>$45.00 </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter10">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Man's Jacket                                       </h4></a>
                                    <div class="product-price">$26.00
                                      <del>$35.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Man's Jacket                                       </h4></a>
                          <p>Solid Denim Jacket</p>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>fido dido</h4></a>
                                    <div class="product-price">$55.00
                                      <del>$62.00 </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>fido dido</h4></a>
                          <p>Solid Polo Collar T-shirt</p>
                          <div class="product-price">$55.00
                            <del>$62.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>fido dido</h4></a>
                                    <div class="product-price">$55.00
                                      <del>$62.00 </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>fido dido</h4></a>
                          <p>Solid Polo Collar T-shirt</p>
                          <div class="product-price">$55.00
                            <del>$62.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Wonder Woman</h4></a>
                                    <div class="product-price">$45.00
                                      <del>$52.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Wonder Woman</h4></a>
                          <p>Woman Gray Round T-shirt</p>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Roadster</h4></a>
                                    <div class="product-price">$38.00
                                      <del>$45.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Roadster</h4></a>
                          <p>Women Solid Denim Jacket</p>
                          <div class="product-price">$38.00
                            <del>$45.00 </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter15"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter15">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                      <h4>Man's Jacket                                       </h4></a>
                                    <div class="product-price">$26.00
                                      <del>$35.00</del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4>Man's Jacket                                       </h4></a>
                          <p>Solid Denim Jacket</p>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/range-slider/rangeslider-script.js"></script>
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/product-tab.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>