<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Medicine Delivery System |</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3>Angel Locsin</h3>
                    <p>Cashier</p>
                    <strong>MDS</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="active">
                            <a href="dashboard.php" role="button"  ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span></a>
                         
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Customer</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="customerregistrationform.php" class="dropdown-item">Registration Form</a>
                                <a href="customerinformation.php" class="dropdown-item">Information</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user-secret"></i> <span class="mini-dn">User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="userlogs.php" class="dropdown-item">Logs</a>
                                <a href="usermanagement.php" class="dropdown-item">Management</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-medkit"></i> <span class="mini-dn">Medicine</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="medicineinformation.php" class="dropdown-item">Information</a>
                                <a href="medicinecategory.php" class="dropdown-item">Category</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Order</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="orderdetails.php" class="dropdown-item">Details</a>
                                <a href="orderinformation.php" class="dropdown-item">Information</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="driverinfo.php" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Driver Information</span></a>
                        </li>
                        <li class="nav-item"><a href="deliveryinfo.php" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Delivery Information</span></a>
                        </li>
                        <li class="nav-item"><a href="report.php" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-newspaper-o"></i> <span class="mini-dn">Report</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                    
                                        
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Angel Locsin</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                            
                                                <li><a href="index.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                        
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"></a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            
            <!-- stockprice, feed area start-->
            <div class="stockprice-feed-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2 style="margin-left:-11px"><i class="fa fa-medkit"></i>Total Medicine</h2>
                                        <div class="main-income-phara" >
                                            <p >High Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span></span><span class="counter">608,200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"><canvas style="display: inline-block; width: 27px; height: 16px; vertical-align: top;" width="27" height="16"></canvas></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                        <p>Percentage</p>
                                        <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2><i class="fa fa-shopping-cart"></i>Total Orders</h2>
                                        <div class="main-income-phara order-cl">
                                            <p>High Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">72,320</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"><canvas style="display: inline-block; width: 56px; height: 16px; vertical-align: top;" width="56" height="16"></canvas></span>
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>Percentage</p>
                                        <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2 style="margin-left:-8px"><i class="fa fa-truck"></i>Total Deilvery</h2>
                                        <div class="main-income-phara visitor-cl">
                                            <p>High Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">888,200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"><canvas style="display: inline-block; width: 39px; height: 16px; vertical-align: top;" width="39" height="16"></canvas></span>
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>Percentage</p>
                                        <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2><i class="fa fa-user"></i>Total Drivers</h2>
                                        <div class="main-income-phara low-value-cl">
                                            <p>Low Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">80</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline5"><canvas style="display: inline-block; width: 59px; height: 16px; vertical-align: top;" width="59" height="16"></canvas></span>
                                        </div>
                                    </div>
                                    <div class="income-range low-value-cl">
                                        <p>Percentage</p>
                                        <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stockprice, feed area end-->
        </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>