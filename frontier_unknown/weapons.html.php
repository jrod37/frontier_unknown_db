<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>List of ammo</title>
</head>

<body>
    <p><a href="?addweapon">Add a weapon</a></p>
    <p>Here are all the weapons in the database:</p>
    <?php foreach ($weapons as $weapon) : ?>
        <form action="?deleteweapon" method="post">
            <blockquote>
                <p><?php echo htmlspecialchars($weapon['name'], ENT_QUOTES, 'UTF-8');
                    ?>
                    <input type="hidden" name="id" value="<?php echo $weapon['id']; ?>">
                    <input type="submit" value="Delete">
                </p>
            </blockquote>
        </form>
        <?php endforeach; ?>
</body>

</html>