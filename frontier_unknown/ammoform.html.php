<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Weapon</title>
    <style type="text/css">
        textarea {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="?" method="post">
        <div>
            <label for="ammo_id">ammo id::</label>
            <textarea id="ammo_id" name="ammo_id" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="ammo_name">ammo name:</label>
            <textarea id="ammo_name" name="ammo_name" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="damage_type">damage type:</label>
            <textarea id="damage_type" name="damage_type" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="fire_rate_mod">fire rate mod</label>
            <textarea id="fire_rate_mod" name="fire_rate_mod" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="damage_mod">damage mod:</label>
            <textarea id="damage_mod" name="damage_mod" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="speed_mod">speed mod:</label>
            <textarea id="speed_mod" name="speed_mod" rows="3" cols="40"></textarea>
        </div>
        <div>
            <label for="range_mod">range mod:</label>
            <textarea id="range_mod" name="range_mod" rows="3" cols="40"></textarea>
        </div>
        <div><input type="submit" value="Add"></div>
    </form>
</body>