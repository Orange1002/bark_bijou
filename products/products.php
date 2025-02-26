<?php

require_once("../pdo_connect_bark_bijou.php");

$items_per_page = 8;
$current_page = isset($_GET["page"]) ? max(1, intval($_GET["page"])) : 1;
$offset = ($current_page - 1) * $items_per_page;

$search = $_GET["search"] ?? "";
$category_id = $_GET["category_id"] ?? "";

$categories_stmt = $db_host->prepare("SELECT * FROM product_categories");
$categories_stmt->execute();
$categories = $categories_stmt->fetchAll();

$sql = "SELECT products.*, 
       COALESCE((SELECT img_url FROM product_images WHERE product_images.product_id = products.id LIMIT 1), 'uploads/default.png') AS img_url
    FROM products 
    WHERE products.valid = 1 AND products.product_name LIKE :search";
$params = [":search" => "%$search%"];

if (!empty($category_id)) {
    $sql .= " AND products.category_id = :category_id";
    $params[":category_id"] = $category_id;
}

$count_stmt = $db_host->prepare("SELECT COUNT(*) FROM products WHERE valid = 1 AND product_name LIKE :search" . (!empty($category_id) ? " AND category_id = :category_id" : ""));
$count_stmt->execute($params);
$total_items = $count_stmt->fetchColumn();

$total_pages = ceil($total_items / $items_per_page);

$sql .= " LIMIT :limit OFFSET :offset";
$params[":limit"] = $items_per_page;
$params[":offset"] = $offset;

$stmt = $db_host->prepare($sql);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
}
$stmt->execute();
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bark & Bijou</title>

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
    <link href="./style.css" rel="stylesheet">
    <link href="./courseStyle.css" rel="stylesheet">

    <?php include("../css.php") ?>
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
                <a class="nav-link" href="products.php">
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
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">商品列表</h1>
                        <!-- 搜尋 + 類別篩選 -->
                        <form method="GET" action="products.php" class="d-flex">
                            <select name="category_id" class="form-select me-3" onchange="this.form.submit()">
                                <option value="">所有類別</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category["category_id"] ?>" <?= ($category_id == $category["category_id"]) ? "selected" : "" ?>>
                                        <?= htmlspecialchars($category["category_name"]) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (!empty($_GET["search"])): ?>
                                <a class="btn btn-outline-primary mr-2" href="products.php"><i class="fa-solid fa-arrow-left"></i></a>
                            <?php endif; ?>
                            <input type="text" name="search" class="form-control me-2" placeholder="搜尋商品..." value="<?= htmlspecialchars($search) ?>">
                            <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-search"></i></button>
                        </form>
                    </div>

                    <div class="py-2">
                        <a class="btn btn-primary" href="index.php"><i class="fa-solid fa-arrow-left fa-fw"></i> 回首頁</a>
                        <a class="btn btn-success float-end" href="create_product.php"><i class="fa-solid fa-plus fa-fw"></i> 新增商品</a>
                    </div>
                    <?php if (count($products) > 0): ?>
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>圖片</th>
                                    <th>商品名稱</th>
                                    <th>價格 (TWD)</th>
                                    <th>庫存</th>
                                    <th>狀態</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($product["id"]) ?></td>
                                        <td><img src="<?= htmlspecialchars($product['img_url']) ?>"
                                                alt="商品圖片" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                        <td><?= htmlspecialchars($product["product_name"]) ?></td>
                                        <td><?= number_format($product["price"]) ?> TWD</td>
                                        <td><?= $product["stock"] ?></td>
                                        <td>
                                            <?php if ($product["status"] === 'active'): ?>
                                                <span class="badge bg-success">上架中</span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">已下架</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="product_edit.php?id=<?= $product["id"] ?>" class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-pen fa-fw"></i> 編輯
                                            </a>
                                            <a href="product_delete.php?id=<?= $product["id"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('確定要刪除這個商品嗎？');">
                                                <i class="fa-solid fa-trash fa-fw"></i> 刪除
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- 分頁 -->
                        <?php if ($total_pages > 1): ?>
                            <nav>
                                <ul class="pagination justify-content-center mt-3">
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                        <li class="page-item <?= ($current_page == $i) ? 'active' : '' ?>">
                                            <a class="page-link" href="?search=<?= urlencode($search) ?>&page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                        <a href="products_deleted.php" class="btn btn-warning mb-2 float-end">
                            <i class="fa-solid fa-trash fa-fw"></i> 回收站
                        </a>
                    <?php else: ?>
                        <div class="alert alert-warning">目前沒有商品。</div>
                    <?php endif; ?>
                </div>
                <!-- End of Page Wrapper -->
            </div>
            <!-- Scroll to Top Button-->
        </div>
    </div>
    </div>



</body>

</html>