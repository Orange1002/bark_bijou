<?php
require_once("../db_connect_bark_bijou.php");
if (!isset($_POST["title"]) || !isset($_POST["content"])) {
    die("請循正常管道進入此頁面");
}
$title = $_POST["title"];
$content = $_POST["content"];
$now = date("Y-m-d H:i:s");
$category_id =$_POST["category_id"];

if (empty($title)) {
    die("標題不得為空");
}
if (empty($content)) {
    die("內容不得為空");
}

$sql = "INSERT INTO article (title, content, created_date, category_id) 
VALUES ('$title','$content','$now' ,'$category_id')";

if ($conn->query($sql) === TRUE) {
    // $last_id = $conn->insert_id;
    // echo "文章新增成功, id 為 $last_id";
    $conn->close();
    header("Location:article-list.php");
    exit();
} else {
    echo "發生錯誤：" . $conn->error;
}

$conn->close();
