<?php
session_start();
include 'koneksi.php';

$koneksi = new Koneksi();
$conn = mysqli_connect($koneksi->local, $koneksi->username, $koneksi->password, $koneksi->database);

// Cek apakah admin sudah login
if (isset($_SESSION['admin'])) {
    $username = $_SESSION['admin'];
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $admin = mysqli_fetch_assoc($result);
} else {
    // Kalau belum login, redirect ke login
    echo "<script>
            alert('Maaf anda belum login, silahkan login terlebih dahulu');
            window.location='login.php';
          </script>";
    exit();
}
?>


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
   <style>
        .stats-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: white;
            font-size: 1.5rem;
        }
        .stats-icon.purple { background-color: #9694ff; }
        .stats-icon.blue { background-color: #57caeb; }
        .stats-icon.green { background-color: #5ddab4; }
        .stats-icon.orange { background-color: #ff9f43; }
        .avatar-md img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-body {
            padding: 1.5rem;
        }
        .table th {
            color: #6c757d;
            font-weight: 600;
        }
        .badge {
            padding: 0.5em 0.8em;
            font-weight: 500;
        }
        .admin-bar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            font-weight: 500;
        }
        .nav-tabs .nav-link.active {
            color: #435ebe;
            border-bottom: 2px solid #435ebe;
            background: transparent;
        }
        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }
        .quick-actions .card {
            transition: all 0.3s ease;
        }
        .quick-actions .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/jgu.png" alt="Logo" srcset=""></a>
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

    <div class="admin-bar">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Conference Dashboard</h4>
                <div class="d-flex align-items-center">
                    <div class="avatar-md me-3">
                        <img src="image/<?php echo $admin['image']; ?>" alt="Admin Profile">
                    </div>
                    <div>
                        <h6 class="mb-0">
                            <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Conference Admin'; ?>
                        </h6>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <div class="ms-3">
                        <a href="logout.php" class="btn btn-sm btn-outline-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="page-content py-2">
            <!-- Quick Action Cards -->
            <div class="row quick-actions mb-4">
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-body px-4 py-4">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Attendees</h6>
                                    <h6 class="font-extrabold mb-0">1,248 ±</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-body px-4 py-4">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi bi-calendar-event-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Active Conferences</h6>
                                    <h6 class="font-extrabold mb-0">1</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-body px-4 py-4">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi bi-building"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Event Venues</h6>
                                    <h6 class="font-extrabold mb-0">1</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="data_admin.php" class="text-decoration-none">
                        <div class="card h-100">
                            <div class="card-body px-4 py-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="stats-icon orange">
                                            <i class="bi bi-person-badge"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Admin Data</h6>
                                        <h6 class="font-extrabold mb-0">Manage <i class="bi bi-arrow-right"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Upcoming Conferences -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Upcoming Conferences</h4>
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
                                            <td>1st Joint Global Innovation and Technology Conference 2025 (JGITeC2025)</td>
                                            <td>Oct 25-26, 2025</td>
                                            <td>Campus JGU</td>
                                            <td>200 ±</td>
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