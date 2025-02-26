<?php
require_once("/xampp/htdocs/Bark_Bijou/course/db_connect_bark_bijou.php");
if (!isset($_POST["title"]) || !isset($_POST["content"])) {
    die("請循正常管道進入此頁面");
}
$title = $_POST["title"];
$content = $_POST["content"];
$now = date("Y-m-d H:i:s");


// $title = "想幫助流浪狗首先怎麼做？";
// $content = "在路上看到瘦骨嶙峋的流浪狗，我們通常會心生憐憫，希望能給予狗狗幫助。不過，現實不如想像中簡單，在任何善意行動之前，要先有以下觀念，才不會帶給自己太大的負擔，也不會對狗狗造成負面影響哦！

// 理性評估自身能力：救援、安頓、送養狗狗到適合的家庭，這之間的過程，需要耗費不少人力、時間與金錢。如果一時衝動帶回狗狗，一旦無法照護或送養困難，很難避免狗狗再次被遺棄，如此一來，不僅人類會陷入自責，對狗狗的心理也會造成二度傷害。建議在行動前，先理性評估自身能力，才能讓善心舉動有更圓滿的結局。

// 不要貿然行動、需有耐心：在路上遇到流浪狗，不可輕舉妄動、貿然接近。有些狗狗因在外生活的負面經驗，可能懼怕人類，甚至出現攻擊行為；因此，最好的方式是先觀察，適時試探狗狗的性情，並根據其肢體語言進行判斷。面對人類的接近，若流浪犬出現吠叫等激烈反應，建議暫緩所有動作並避免直視狗狗的眼睛。如果狗狗願意主動走近，代表牠可能不具攻擊性，此時不可心急，可在原地輕喚或拿食物誘惑，等牠願意走到身旁，再慢慢伸手讓牠嗅聞、並輕慢地撫摸；倘若狗狗完全不抗拒，才能利用身邊現有的物品，如繩索或箱子帶牠們離開。

// 花時間互動及培養信任：若浪浪不願意離開原先的地方，則要花點時間慢慢親近，和牠們有良好的互動。建立人犬之間的信任感，需要耐心等待與陪伴，千萬不要強迫牠們接受人類的善意，等牠們主動敞開心胸，才有助於牠們走向有愛的未來。";
// $comment = "這篇文章太棒了吧";
if (empty($title) || empty($content)) {
    die("標題或內容不得為空");
}

$sql = "INSERT INTO article (title, content, created_date) 
VALUES ('$title','$content','$now')";
$stmt = $conn->prepare($sql);


if ($stmt) {
    $stmt->bind_param("sss", $title, $content, $now);
    if ($stmt->execute()) {
        $last_id = $stmt->insert_id;
        echo "文章新增成功, id 為 $last_id";
        $stmt->close();
        $conn->close();
        header("Location: article-list.php");
        exit(); // **確保後續程式不會執行**
    } else {
        echo "發生錯誤：" . $stmt->error;
    }
} else {
    echo "SQL 錯誤：" . $conn->error;
}


$conn->close();

header("location:article-list.php");
