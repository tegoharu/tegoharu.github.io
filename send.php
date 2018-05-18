<!doctype html>
<?php
$message = "名前：".$_POST["name"]."\n本文：".$_POST["message"];

if(!mb_send_mail("onepiece@sakura-ic.com",$message)){
	exit("error");
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