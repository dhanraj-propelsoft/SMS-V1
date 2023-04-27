<?php
function active($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active'; //class name in css 
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- <title>Without navbar - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title> -->

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <!-- <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container"> -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item dashboard ">
                        <a href="Dashboard.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Account Settings">DASHBOARD</div>
                        </a>
                    </li>
                    <li class="menu-item report">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">REPORTS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ownerlist.php" class="menu-link">
                                    <div data-i18n="Error">OWNER LIST</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tenantlist.php" class="menu-link">
                                    <div data-i18n="Under Maintenance">TENANT LIST</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="unitlist.php" class="menu-link">
                                    <div data-i18n="Under Maintenance">UNIT LIST</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item master">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">MASTERS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="addowner.php" class="menu-link ">

                                    <div data-i18n="Basic">ADD OWNER</div>
                                </a>

                            </li>
                            <li class="menu-item">
                                <a href="transferowner.php" class="menu-link">
                                    <div data-i18n="Basic">TRANSFER OWNER</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="addresident.php" class="menu-link">
                                    <div data-i18n="Basic">ADD RESIDENT</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="vacateresident.php" class="menu-link">
                                    <div data-i18n="Basic">VACATE RESIDENT</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item setting">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">SETTINGS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="apartment.php" class="menu-link">
                                    <div data-i18n="Account">Apartment</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="signin.php" class="menu-link">
                            <!-- <script>alert("Welcome to Geeks for Geeks")</script> -->


                            <!-- <button class="btn btn-primary d-grid w-100" type="submit" name="logout">LOGOUT</button>-->

                            <button class="btn btn-primary d-grid w-100" type="submit" name="logout"
                                onclick="return confirm('Are you sure you want to log out?')">LOGOUT</button>
                        </a>
                    </li>
                </ul>
            </aside>        
</body>



<!-- / Menu -->