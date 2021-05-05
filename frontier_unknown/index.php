<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $db = "frontier_unknown";
// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=frontier_unknown',
        'fuadmin',
        '123'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $output = "Connected Successfully<br>Welcome back, Jarod";
    // $sql = 'UPDATE ammo SET fire_rate_mod = 20
    //          WHERE ammo_id = 1156';
    // $result = $pdo->exec($sql);
    // $output = "Updated $result rows.";
    include 'output.html.php';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server.<br><br>' . $e->getMessage();
    include 'output.html.php';
    exit();
}

if (isset($_GET['addammo'])) {
    include 'ammoform.html.php';
    exit();
}

if (isset($_POST['ammo_id'])) {
    $sql = 'INSERT INTO ammo SET
        ammo_id = :ammo_id,
        ammo_name = :ammo_name,
        damage_type = :damage_type,
        fire_rate_mod = :fire_rate_mod,
        damage_mod = :damage_mod,
        speed_mod = :speed_mod,
        range_mod = :range_mod';
    $stmt = $pdo->prepare($sql);
    $data = array(
        ':ammo_id' => (int)$_POST['ammo_id'],
        ':ammo_name' => $_POST['ammo_name'],
        ':damage_type' => $_POST['damage_type'],
        ':fire_rate_mod' => (int)$_POST['fire_rate_mod'],
        ':damage_mod' => (int)$_POST['damage_mod'],
        ':speed_mod' => (int)$_POST['speed_mod'],
        ':range_mod' => (int)$_POST['range_mod']);
    $stmt->execute($data);
}

try {
    $sql = 'SELECT * FROM ammo';
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include 'error.html.php';
    exit();
}

while ($row = $result->fetch()) {
    $names[] = $row['ammo_name'];
}
include 'ammo.html.php';

// function CloseCon($pdo)
// {
//     $pdo -> close();
// }
// CloseCon($pdo);
