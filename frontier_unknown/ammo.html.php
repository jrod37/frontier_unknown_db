<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>List of ammo</title>
</head>

<body>
    <p><a href="?addammo">Add an ammo type</a></p>
    <p>Here are all the ammo types in the database:</p>
    <?php foreach ($names as $name) : ?>
        <blockquote>
            <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                ?>
            </p>
        </blockquote>
    <?php endforeach; ?>
</body>

</html>