<?php
if (!isset($_POST["title"])) {
    die("請循正常管道進入此頁");
}

require_once("../db_connect_bark_bijou.php");

$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "UPDATE article SET title = '$title' ,content = '$content' WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    // echo "文章編輯成功";
    header("location:article-detail.php?id=$id");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();