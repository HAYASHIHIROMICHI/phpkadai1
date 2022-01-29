<html>
<head>
    <meta charset="utf-8">
    <style>
    .place{
            background-color: #green;
            text-align: left;
            width: 80%;
        }
    </style>
    <title>引っ越し先
    </title>
</head>

<body>
    <div class="place">
        <h3>引っ越し先</h3>
        <ul>
            <li>引っ越し先を記入</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>

    <form action="post_confirm.php" method="post">
    <input type="text" name="date"> 日付<br>
     <input type="text" name="place">場所<br>
     <input type="text" name="rent">家賃<br>
     <input type="submit" value="送信">
    </form>
</body>

</html>