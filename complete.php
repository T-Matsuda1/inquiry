<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

$subject = "お問い合わせありがとうございます。";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>完了画面</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
</style>
</head>
<body>
	<h2>送信完了</h2>
 	<p>ご意見頂きありがとうございました。</p>
 	<p><a href="index.php">フォームトップへ</p>
</body>
</html>