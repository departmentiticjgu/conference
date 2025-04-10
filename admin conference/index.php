<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard -Conference Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span> Dashboard</span>
                            </a>
                        </li>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Data Table</li>

                        <!-- <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Admin Conference</span>
                            </a>
                        </li> -->

                        <li class="sidebar-item">
                            <a href="data_topic.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Topic & Sub-Topic Data</span>
                            </a>
                            <!-- <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="#">User Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Conference Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Registration Data<a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Session Data </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Feedback Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-carousel.html">Carousel</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-dropdown.html">Dropdown</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-list-group.html">List Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-modal.html">Modal</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-navs.html">Navs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-pagination.html">Pagination</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-progress.html">Progress</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-spinner.html">Spinner</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-tooltip.html">Tooltip</a>
                                </li>
                            </ul> -->
                        </li>

                        <li class="sidebar-item">
                            <a href="data_host.php" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Co-Host Data</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="data_board.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Editorial Board Data</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="data_associate.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Associate Editors Data</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="data_chief.php" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Chief Editors Data</span>
                            </a>
                        </li>

                        <li class="sidebar-title">CRUD Table</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Topic</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="insert_topic.php">Create Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update_topic.php">Update Data</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="form-element-select.html">Dele</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-radio.html">Radio</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-checkbox.html">Checkbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-textarea.html">Textarea</a>
                                </li> -->
                            </ul>
                        </li>

                        <!-- <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li> -->

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Co-Host</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="insert_host.php">Create Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update_host.php">Update Data</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="form-editor-summernote.html">Summernote</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-tinymce.html">TinyMCE</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Editorial Board</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="insert_board.php">Create Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update_board.php">Update Data</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="ui-widgets-todolist.html">To-do List</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Associate Editors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="insert_associate.php">Create Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update_associate.php">Update Data</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="ui-icons-dripicons.html">Dripicons</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Chief Editors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="insert_chief.php">Create Data</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update_chief.php">Update Data</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-item">
                            <a href="table.html" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="table-datatable.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Datatable</span>
                            </a>
                        </li> -->

                        <!-- <li class="sidebar-title">Extra UI</li> -->


                        <!-- <li class="sidebar-item  ">
                            <a href="ui-file-uploader.html" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  ">
                            <a href="application-email.html" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-chat.html" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-gallery.html" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-checkout.html" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Errors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403.html">403</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-404.html">404</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-500.html">500</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Raise Support</li>

                        <li class="sidebar-item  ">
                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Donate</span>
                            </a>
                        </li> -->

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard Admin</h3>
            </div>
            <!-- <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Followers</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Following</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> -->

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <!-- Conference Overview Cards -->
                        <div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                            <i class="bi bi-people-fill"></i> <!-- Changed to people icon -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Total Attendees</h6>
                        <h6 class="font-extrabold mb-0">1,248</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi bi-calendar-event-fill"></i> <!-- Changed to calendar event icon -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Active Conferences</h6>
                                    <h6 class="font-extrabold mb-0">5</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi bi-cash-stack"></i> <!-- Changed to cash stack icon -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Revenue</h6>
                                    <h6 class="font-extrabold mb-0">$15,850</h6> <!-- Fixed the number format -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="bi bi-chat-square-text-fill"></i> <!-- Changed to feedback icon -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pending Feedback</h6>
                                    <h6 class="font-extrabold mb-0">50</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
                        <!-- Upcoming Conferences -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Upcoming Conferences</h4>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="conferenceFilter" data-bs-toggle="dropdown" aria-expanded="false">
                                                This Month
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="conferenceFilter">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Conference</th>
                                                        <th>Date</th>
                                                        <th>Location</th>
                                                        <th>Attendees</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tech Summit 2023</td>
                                                        <td>Nov 15-17, 2023</td>
                                                        <td>San Francisco</td>
                                                        <td>420</td>
                                                        <td><span class="badge bg-success">Active</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary">Manage</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Digital Marketing Conference</td>
                                                        <td>Dec 5-6, 2023</td>
                                                        <td>New York</td>
                                                        <td>315</td>
                                                        <td><span class="badge bg-success">Active</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary">Manage</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>AI & Machine Learning Expo</td>
                                                        <td>Jan 10-12, 2024</td>
                                                        <td>Chicago</td>
                                                        <td>278</td>
                                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary">Manage</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025)</td>
                                                        <td>Oct 25-26, 2025</td>
                                                        <td>Campus JGU</td>
                                                        <td>200</td>
                                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-primary">Manage</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Registration Trends and Recent Activity -->
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Registration Trends</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                            <div class="text-center">
                                                <h5 class="text-muted">Registration Chart Placeholder</h5>
                                                <p>This would display registration trends over time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Recent Activity</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="activity-list">
                                            <div class="activity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bi bi-person-plus-fill"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">New registration</h6>
                                                    <p class="small text-muted mb-0">John Smith registered for Tech Summit 2023</p>
                                                    <small class="text-muted">10 minutes ago</small>
                                                </div>
                                            </div>
                                            <div class="activity-item d-flex mt-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-success">
                                                            <i class="bi bi-check-circle-fill"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">Payment received</h6>
                                                    <p class="small text-muted mb-0">Payment of $299 from Sarah Johnson</p>
                                                    <small class="text-muted">35 minutes ago</small>
                                                </div>
                                            </div>
                                            <div class="activity-item d-flex mt-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-info">
                                                            <i class="bi bi-chat-square-text-fill"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">New feedback</h6>
                                                    <p class="small text-muted mb-0">Michael Brown submitted feedback for Digital Marketing Conference</p>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Sidebar -->
                    <div class="col-12 col-lg-3">
                        <!-- Admin Profile -->
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Admin Profile">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Conference Admin</h5>
                                        <h6 class="text-muted mb-0">Administrator</h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-3">
                                    <button class="btn btn-sm btn-outline-primary">Profile</button>
                                    <button class="btn btn-sm btn-outline-danger">Logout</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quick Stats -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Quick Stats</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Today's Registrations
                                        <span class="badge bg-primary rounded-pill">24</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Pending Approvals
                                        <span class="badge bg-warning rounded-pill">12</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Unread Messages
                                        <span class="badge bg-info rounded-pill">8</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Speakers Confirmed
                                        <span class="badge bg-success rounded-pill">18</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Feedback Summary -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Feedback Summary</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center" style="height: 150px;">
                                    <div class="text-center">
                                        <h5 class="text-muted">Feedback Chart Placeholder</h5>
                                        <p>This would display feedback ratings</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-success me-2">4.8</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-primary me-2">4.0</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-warning me-2">3.2</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        // Update current time
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            const dateString = now.toLocaleDateString();
            document.getElementById('current-time').textContent = `${dateString} ${timeString}`;
        }
        
        // Update time immediately and then every minute
        updateTime();
        setInterval(updateTime, 60000);
    </script>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Registration Trend Chart
            var registrationOptions = {
                series: [{
                    name: 'Registrations',
                    data: [31, 40, 28, 51, 42, 82, 56, 45, 53, 59, 70, 78, 90, 85, 79, 70, 62, 55, 58, 65, 75, 85, 90, 95, 100, 110, 120, 130, 140, 150]
                }],
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                        show: false,
                    }
                },
                colors: ['#5b73e8'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                xaxis: {
                    type: 'datetime',
                    categories: generateDates(30),
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy'
                    },
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.3,
                    }
                }
            };

            var registrationChart = new ApexCharts(document.querySelector("#chart-registration-trend"), registrationOptions);
            registrationChart.render();

            // Demographic Charts
            var academicOptions = {
                series: [45],
                chart: {
                    height: 80,
                    type: 'radialBar',
                    toolbar: {
                        show: false,
                    }
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '50%',
                        },
                        dataLabels: {
                            show: false
                        }
                    },
                },
                colors: ['#435ebe'],
            };

            var industryOptions = {
                series: [38],
                chart: {
                    height: 80,
                    type: 'radialBar',
                    toolbar: {
                        show: false,
                    }
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '50%',
                        },
                        dataLabels: {
                            show: false
                        }
                    },
                },
                colors: ['#4fbe7d'],
            };

            var studentsOptions = {
                series: [17],
                chart: {
                    height: 80,
                    type: 'radialBar',
                    toolbar: {
                        show: false,
                    }
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '50%',
                        },
                        dataLabels: {
                            show: false
                        }
                    },
                },
                colors: ['#dc3545'],
            };

            var academicChart = new ApexCharts(document.querySelector("#chart-academic"), academicOptions);
            var industryChart = new ApexCharts(document.querySelector("#chart-industry"), industryOptions);
            var studentsChart = new ApexCharts(document.querySelector("#chart-students"), studentsOptions);
            
            academicChart.render();
            industryChart.render();
            studentsChart.render();

            // Feedback Summary Chart
            var feedbackOptions = {
                series: [45, 35, 15, 5],
                chart: {
                    type: 'donut',
                    height: 200,
                    toolbar: {
                        show: false,
                    }
                },
                colors: ['#4fbe7d', '#435ebe', '#ffc107', '#dc3545'],
                labels: ['Excellent', 'Good', 'Average', 'Poor'],
                legend: {
                    show: false
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%'
                        }
                    }
                }
            };

            var feedbackChart = new ApexCharts(document.querySelector("#chart-feedback-summary"), feedbackOptions);
            feedbackChart.render();

            // Helper function to generate dates for the chart
            function generateDates(days) {
                var dates = [];
                var today = new Date();
                
                for (var i = days - 1; i >= 0; i--) {
                    var date = new Date();
                    date.setDate(today.getDate() - i);
                    dates.push(date.toISOString().split('T')[0]);
                }
                
                return dates;
            }
        });
    </scri> -->
</body>

</html>