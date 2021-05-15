<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $db = "frontier_unknown";
// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$items = array(
    "viewammo" => "ammo",
    "viewdefense" => "defense",
    "viewfiretype" => "fire_type",
    "viewhardpoints" => "hardpoints",
    "viewship" => "ship",
    "viewshoots" => "shoots",
    "viewutility" => "utility",
    "viewweapons" => "weapon"
);

echo "<body style='background-color:AAAAA0'>";
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=frontier_unknown',
        'root',
        ''
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $output = "Frontier Unknown Inventory System";
    // $sql = 'UPDATE ammo SET fire_rate_mod = 20
    //          WHERE ammo_id = 1156';
    // $result = $pdo->exec($sql);
    // $output = "Updated $result rows.";
    include 'output.html.php';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server.<br><br><b>' . $e->getMessage();
    include 'output.html.php';
    exit();
}

if (isset($_GET['viewweapons'])) {
    try {
        $sql = 'SELECT * FROM weapon';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching weapons: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    while ($row = $result->fetch()) {
        $weapons[] = array('name' => $row['weapon_name'], 'id' => $row['weapon_id']);
    }
    include 'weapons.html.php';
    exit();
}

if (isset($_GET['viewammo'])) {
    try {
        $sql = 'SELECT * FROM ammo';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching ammo: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('name' => $row['ammo_name'], 'id' => $row['ammo_id']);
    }
    include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewdefense'])) {
    try {
        $sql = 'SELECT * FROM defense';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching defense: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('name' => $row['defense_name'], 'id' => $row['defense_id']);
    }
    #include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewfiretypes'])) {
    try {
        $sql = 'SELECT * FROM ammo';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching ammo: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('ammo' => $row['ammo_id'], 'fire_type' => $row['fire_type']);
    }
    #include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewhardpoints'])) {
    try {
        $sql = 'SELECT * FROM hardpoints';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching hardopoints: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('id' => $row['hardpoint_id'], 'slot_size' => $row['slot_size']);
    }
    #include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewship'])) {
    try {
        $sql = 'SELECT * FROM ship';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching ship: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('id' => $row['model_id']);
    }
    #include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewshoots'])) {
    try {
        $sql = 'SELECT * FROM shoots';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching shoots: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('weapon_id' => $row['weapon_id'], 'ammo_id' => $row['ammo_id']);
    }
    #include 'ammo.html.php';
    exit();
}

if (isset($_GET['viewutility'])) {
    try {
        $sql = 'SELECT * FROM utility';
        $result = $pdo->query($sql);
    } catch (PDOException $e) {
        $error = 'Error fetching utility: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    
    while ($row = $result->fetch()) {
        $ammos[] = array('utility_id' => $row['utility_id'], 'utility_name' => $row['utility_name']);
    }
    #include 'ammo.html.php';
    exit();
}





if (isset($_GET['addweapon'])) {
    include 'weaponform.html.php';
    exit();
}

if (isset($_GET['addammo'])) {
    include 'ammoform.html.php';
    exit();
}

if (isset($_POST['ammo_id'])) {
    try{
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
    catch (PDOException $e){
        $error = 'Error adding ammo type: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    header('Location: .');
    exit();

}

if (isset($_POST['weapon_id'])) {
    try{
        $sql = 'INSERT INTO weapon SET
        weapon_id = :weapon_id,
        weapon_name = :weapon_name,
        weapon_type = :weapon_type,
        speed = :speed,
        fire_rate = :fire_rate,
        slot_size = :slot_size,
        weapon_range = :weapon_range,
        damage = :damage';
        $stmt = $pdo->prepare($sql);
        $data = array(
            ':weapon_id' => (int)$_POST['weapon_id'],
            ':weapon_name' => $_POST['weapon_name'],
            ':weapon_type' => $_POST['weapon_type'],
            ':speed' => (int)$_POST['speed'],
            ':fire_rate' => (int)$_POST['fire_rate'],
            ':slot_size' => (int)$_POST['slot_size'],
            ':weapon_range' => (int)$_POST['weapon_range'],
            ':damage' => (int)$_POST['damage']);
        $stmt->execute($data);
    }
    catch (PDOException $e){
        $error = 'Error adding ammo type: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    header('Location: .');
    exit();

}

if (isset($_GET['deleteammo'])) {
    try {
        $sql = 'DELETE FROM ammo WHERE ammo_id = :id';
        $stmt = $pdo->prepare($sql);
        $data = array(
            ':id' => $_POST['id']);
        $stmt->execute($data);
    } catch (PDOException $e) {
        $error = 'Error deleting ammo type: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    header('Location: .');
    exit();
   }

if (isset($_GET['deleteweapon'])) {
try {
    $sql = 'DELETE FROM weapon WHERE weapon_id = :id';
    $stmt = $pdo->prepare($sql);
    $data = array(
        ':id' => $_POST['id']);
    $stmt->execute($data);
} catch (PDOException $e) {
    $error = 'Error deleting weapon: ' . $e->getMessage();
    include 'error.html.php';
    exit();
}
header('Location: .');
exit();
}


$ammo_link = "?viewammo";
echo "<p><a href='$ammo_link'>Ammo</a></p>";

$weapon_link = "?viewweapons";
echo "<p><a href='$weapon_link'>Weapons</a></p>";

$weapon_link = "?viewdefense";
echo "<p><a href='$weapon_link'>Defenses</a></p>";

$weapon_link = "?viewutility";
echo "<p><a href='$weapon_link'>Utilities</a></p>";

$weapon_link = "?fire_types";
echo "<p><a href='$weapon_link'>Fire_Types</a></p>";

$weapon_link = "?hardpoints";
echo "<p><a href='$weapon_link'>Hardpoints</a></p>";

$weapon_link = "?ship";
echo "<p><a href='$weapon_link'>Ship</a></p>";

$weapon_link = "?shoots";
echo "<p><a href='$weapon_link'>Shoots</a></p>";



// function CloseCon($pdo)
// {
//     $pdo -> close();
// }
// CloseCon($pdo);
