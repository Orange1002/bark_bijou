<?php
require_once("../db_connect_bark_bijou.php");

$sql = "SELECT * FROM article";
$result = $conn->query($sql);

// 顯示查詢到的筆數
echo "查詢到的筆數: " . $result->num_rows . "<br>";

// ⚠️ 這行 `exit;` 會中斷程式，應該移除或註解掉
// exit;

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - 標題: " . $row["title"] . " - 內容: " . $row["content"] . "<br>";
    }
} else {
    echo "0 results";
}
