<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>List of ammo</title>
</head>

<body>
    <p><a href="?addammo">Add an ammo type</a></p>
    <p>Here are all the ammo types in the database:</p>
    <?php foreach ($ammos as $ammo) : ?>
        <form action="?deleteammo" method="post">
            <blockquote>
                <p><?php echo htmlspecialchars($ammo['name'], ENT_QUOTES, 'UTF-8');
                    ?>
                    <input type="hidden" name="id" value="<?php echo $ammo['id']; ?>">
                    <input type="submit" value="Delete">
                </p>
            </blockquote>
        </form>
        <?php endforeach; ?>

</body>

</html>