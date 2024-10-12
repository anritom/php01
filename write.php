<?php
//文字作成
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$job = $_POST["job"];
$c   = ",";
$str =  $name.$c.$mail.$c.$age.$job;

//date("Y-m-d H:i:s");
//File書き込み
$file = fopen("./data.csv", "a");	// ファイル読み込み
fwrite($file, $str);
fclose($file);

// header("Location: index.php");
exit;
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>


