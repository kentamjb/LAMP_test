<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'kentamjb';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];

    $sql = "delete from user where id=:id";
    $stmt = $dbh->prepare($sql);
    $prams = array(':id'=> $id);
    $stmt->execute($prams);

    header('Location: index.php?fg=1');
    
} catch (PDOException $e) {
	header('Location: index.php?fg=2?err='.$e->getMessage());
	exit();
}
?>