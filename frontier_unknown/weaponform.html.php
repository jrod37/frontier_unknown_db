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
            <label for="weapon_id">weapon id::</label>
            <textarea id="weapon_id" name="weapon_id" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="weapon_name">weapon name:</label>
            <textarea id="weapon_name" name="weapon_name" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="weapon_type">weapon type:</label>
            <textarea id="weapon_type" name="weapon_type" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="speed">speed</label>
            <textarea id="speed" name="speed" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="fire_rate">fire rate:</label>
            <textarea id="fire_rate" name="fire_rate" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="slot_size">slot size:</label>
            <textarea id="slot_size" name="slot_size" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="weapon_range">weapon range:</label>
            <textarea id="weapon_range" name="weapon_range" rows="1" cols="25"></textarea>
        </div>
        <div>
            <label for="damage">damage:</label>
            <textarea id="damage" name="damage" rows="1" cols="25"></textarea>
        </div>
        <div><input type="submit" value="Add"></div>
    </form>
</body>