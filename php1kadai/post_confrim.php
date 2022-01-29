<?php
var_dump($_POST);
$date = $_POST['date'];
$place = $_POST['place'];
$rent = $_POST['rent'];

define( 'FILENAME', './message.txt');

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <br>
    日付:<?php echo $date ?></p>
    引っ越し先:<?php echo $place ?></p>
    家賃:<?php echo $rent ?></p>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post_comfirm.php">戻る</a></li>
    </ul>
</body>

</html>