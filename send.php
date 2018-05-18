<!doctype html>
<?php
$action = $_POST['action'];
$name = htmlspecialchars($_POST['name']);
$message = htmlspecialchars($_POST['message']);
$to = 'onepiece@sakura-ic.com';
$subject = 'お問い合わせ';
$comment = '[お名前]'."\n".$name."\n";
$comment = '[本文]'."\n".$message."\n\n\n";
if($action == "post"){
	$status = mb_send_mail($to, $subject, $comment);
	if($status) {
		echo '<p>メッセージは正常に送信されました</p>';
		echo '<button type="button" onclick="history.go(-1)">フォームに戻る</button>';
	} else {
		echo '<p>メッセージの送信に失敗しました</p>';
		echo '<button type="button" onclick="history.go(-1)">フォームに戻る</button>';
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>メールが送信されました。</title>
</head>
<body>
<p>メールが送信されました。</p>
</body>
</html>