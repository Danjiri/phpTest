<?php
$name = $_GET['name'];
$sex = (int)$_GET['sex'];
$blood = $_GET['blood'];
$comment = $_GET['comment'];
var_dump($_GET);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>受信ページ</h1>
<p>あなたの名前は<?php echo $name;?>さんです。</p>
<p>性別は
<?php
if($sex === 1){
	echo '男性';
}elseif($sex === 2){
	echo '女性';
}
?>
です。</p>
<p>血液型は<?php echo $blood;?>型です。</p>
<p>
<?php echo nl2br($comment);?>
</p>
</body>
</html>



