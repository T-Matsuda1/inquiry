<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//各項目を内容を取得
$evaluation = filter_input(INPUT_POST,'evaluation');
$originality = filter_input(INPUT_POST,'originality');
$appearance = filter_input(INPUT_POST,'appearance');
$opinion_body = filter_input(INPUT_POST,'opinion_body');


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>
 	<form action="complete.php" method="post">
 		<h2>ご意見内容の確認</h2>
	 	<div class="input-area">
		 	<p>ポートフォリオの完成度</p>
		 	<?php echo htmlspecialchars($evaluation,ENT_QUOTES,'UTF-8');?>
		</div>

		<div class="input-area">
		 	<p>ポートフォリオのオリジナリティ</p>
		 	<?php echo htmlspecialchars($originality,ENT_QUOTES,'UTF-8');?>
	 	</div>

		 <div class="input-area">
		 	<p>ポートフォリオの見やすさ</p>
		 	<?php echo htmlspecialchars($appearance,ENT_QUOTES,'UTF-8');?>
	 	</div>

		<div class="input-area">
	 		<p>その他ご意見</p>
	 		<?php echo nl2br(htmlspecialchars($opinion_body,ENT_QUOTES,'UTF-8'));?>
		</div>

	 	<div class="input-area">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" name="submit" value="送信" class="btn-border">

	 	</div>
	</form>
</body>
</html