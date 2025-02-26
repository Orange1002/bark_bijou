<?php
if (!isset($_GET["id"])) {
    header("location: course.php");
}
$id = $_GET["id"];

require_once("../db_connect_bark_bijou.php");
$sql = "SELECT * FROM course WHERE id = $id AND valid=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sqlImg = "SELECT course_img.*, course.img_id FROM course_img
JOIN course ON course_img.id = course.img_id
WHERE course_img.id = $id
";
$resultImg= $conn->query($sqlImg);
$courseImgs = $resultImg->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>課程內容</title>

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
                    <h1 class="h1 mb-0 text-gray-800 fw-bold">課程內容</h1>
                    <div class="d-flex justify-content-center mt-3">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程名稱</label>
                        <div class="col-6 bg-info d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["name"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程內容</label>
                        <div class="col-6 bg-primary d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["content"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程照片</label>
                        <div class="col-6 bg-info d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $courseImgs["images"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程金額</label>
                        <div class="col-6 bg-primary d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["cost"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程方法</label>
                        <div class="col-6 bg-info d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["method_id"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程地點</label>
                        <div class="col-6 bg-primary d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["location_id"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">教師資訊</label>
                        <div class="col-6 p-0">
                            <div class="bg-info d-flex align-items-center py-3 px-12">
                                <h4 class="mb-0 bg-white col text-start"><?= $row["teacher_id"] ?></h4>
                            </div>
                            <div class="bg-info d-flex align-items-center py-3 px-12">
                                <h4 class="mb-0 bg-white col text-start"><?= $row["teacher_id"] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">報名日期</label>
                        <div class="col-6 bg-primary d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["registration_start"] ?></h4>
                            <h4 class="mx-2 text-white">~</h4>
                            <h4 class="mb-0 bg-white col text-start"><?= $row["registration_end"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center">課程日期</label>
                        <div class="col-6 bg-info d-flex align-items-center py-3">
                            <h4 class="mb-0 bg-white col text-start"><?= $row["course_start"] ?></h4>
                            <h4 class="mx-2 text-white">~</h4>
                            <h4 class="mb-0 bg-white col text-start"><?= $row["course_end"] ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center justify-content-center">優惠卷</label>
                        <div class="col-6 bg-primary d-flex align-items-center py-3">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <label for="" class="form-label col-1 bg-secondary text-white mb-0 h5 d-flex align-items-center justify-content-center">編輯</label>
                        <div class="col-6 bg-info d-flex align-items-center justify-content-between py-3">
                            <a href="course.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i></a>
                            <a class="btn btn-orange" href="course_edit">編輯</a>
                        </div>
                    </div>

                </div>
                <!-- Begin Page Content -->

            </div>
        </div>
</body>


<?php include("../js.php") ?>
<script>

</script>

</html>