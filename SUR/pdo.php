<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=sur');
if(isset($_POST['password'])){
	echo("Handling POST data \n");
	$sql="SELECT * FROM user WHERE password= :pw";
	echo "<pre>\n$sql\n</pre>\n";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(
		':pw'=>$_POST['Password']));
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}
?>