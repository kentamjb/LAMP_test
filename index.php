<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'otsubo';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * from user;";
    $result = $dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

$sql = "select * from user"
$result = $dbh->query($sql);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP TEST PAGE</title>
</head>
<body>
    <?php foreach( $result as $value ) { ?>
        
        <h1><?php echo "$value[name]"; ?></h1>
    
    <?php } ?>
</body>
</html>