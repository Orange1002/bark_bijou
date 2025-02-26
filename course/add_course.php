<?php
$today = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>新增課程</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include("../css.php") ?>
    <link href="./style.css" rel="stylesheet">

    <style>
        .box1 {
            height: 100px;
        }

        .px-12 {
            padding-inline: 12px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion primary" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Bark & Bijou</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>會員專區</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>商品列表</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>課程管理</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>旅館管理</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>文章管理</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>優惠券管理</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <!-- Nav Item - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container mb-4 text-center">
                    <h1 class="h1 mb-0 text-gray-800 fw-bold">新增課程</h1>
                    <form action="doAddCourse.php" method="post" enctype="multipart/form-data">
                        <div class="d-flex justify-content-center mt-3">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程名稱</label>
                            <div class="col-6 bg-info d-flex align-items-center py-3">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程內容</label>
                            <div class="col-6 bg-primary d-flex align-items-center py-3">
                                <textarea type="text" class="form-control" name="content" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程照片</label>
                            <div class="col-6 bg-info d-flex align-items-center py-3">
                                <input type="file" class="form-control" name="image" accept=".jpg, .jpeg, .png" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程金額</label>
                            <div class="col-6 bg-primary d-flex align-items-center py-3">
                                <input type="number" class="form-control" name="cost" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程方法</label>
                            <div class="col-6 bg-info d-flex align-items-center py-3">
                                <input type="radio" name="method" value="1" required>線上
                                <input type="radio" class="ms-3" name="method" value="2" required>線下
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程地點</label>
                            <div class="col-6 bg-primary d-flex align-items-center py-3">
                                <select name="location">
                                    <option value="1">線上無地點</option>
                                    <option value="2">地點1</option>
                                    <option value="3">地點2</option>
                                    <option value="4">地點3</option>
                                    <option value="5">地點4</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">教師資訊</label>
                            <div class="col-6 p-0">
                                <div class="bg-info d-flex align-items-center py-3 px-12">
                                    <input type="text" class="form-control" name="teacher_name" placeholder="名稱" required>
                                </div>
                                <div class="bg-info d-flex align-items-center py-3 px-12">
                                    <input type="tel" class="form-control" name="teacher_phone" placeholder="電話" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">報名日期</label>
                            <div class="col-6 bg-primary d-flex align-items-center py-3">
                                <input type="date" name="registration_start" required value="<?= $today ?>">
                                <h4 class="mx-2 text-white">~</h4>
                                <input type="date" name="registration_end" required value="<?= $today ?>">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程日期</label>
                            <div class="col-6 bg-info d-flex align-items-center py-3">
                                <input type="date" name="course_start" required value="<?= $today ?>">
                                <h4 class="mx-2 text-white">~</h4>
                                <input type="date" name="course_end" required value="<?= $today ?>">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center justify-content-center">優惠卷</label>
                            <div class="col-6 bg-primary d-flex align-items-center py-3">

                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center justify-content-center">結束編輯</label>
                            <div class="col-6 bg-info d-flex align-items-center justify-content-between py-3">
                                <a href="course.php" class="btn btn-danger">放棄新增</a>
                                <button class="btn btn-orange" type="submit">上傳課程</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Begin Page Content -->

            </div>
        </div>
</body>


<?php include("../js.php") ?>
<script>

</script>

</html>