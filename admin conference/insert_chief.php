<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

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
                        <li class="sidebar-item">
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

                        <li class="sidebar-item active">
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
                <h3>Chief Editors Data</h3>
            </div>

    <div class="page-content">
        <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Insert Chief Editors</h4>
            </div>
            <div class="card-body">
                <form action="action.php?action=insert_chief" method="post" class="form">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <!-- Nama Conference -->
    
                            <!-- Name -->
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">
                                    <i class="bi bi-person-fill me-2"></i>Name Chief Editors
                                </label>
                                <div class="input-group">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="form-group mb-4">
                                <label for="title" class="form-label">
                                    <i class="bi bi-lock-fill me-2"></i>Title
                                </label>
                                <div class="input-group">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <!-- University -->
                            <div class="form-group mb-4">
                                <label for="university" class="form-label">
                                    <i class="bi bi-file-fill me-2"></i>University
                                </label>
                                <input type="text" name="university" id="university" class="form-control">
                            </div>

                            <!-- Nomor Telepon -->
                            <!-- <div class="form-group mb-4">
                                <label for="telepon" class="form-label">
                                    <i class="bi bi-file-fill me-2"></i>Deskripsi
                                </label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="10" rows="5"></textarea>
                            </div> -->

                            <!-- Role -->
                            <!-- <div class="form-group mb-4">
                                <label for="role" class="form-label">
                                    <i class="bi bi-person-badge me-2"></i>Role
                                </label>
                                <select class="form-select" name="role" id="role" required>
                                    <option value="" selected disabled>Pilih Role</option>
                                    <option value="peserta">Peserta</option>
                                    <option value="pembicara">Pembicara</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div> -->
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-start mt-4">
                        <button type="reset" class="btn btn-light-secondary me-3">
                            <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i> Tambah Data
                        </button>
                    </div>
                </form>
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
</body>

</html>