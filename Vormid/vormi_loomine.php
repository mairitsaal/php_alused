
/*
	PHP - Vormi loomine
	Mairit Saal
	Tartu Kutsehariduskeskus
	29.11.2019
*/
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>06 - PHP - Vormid</title>
</head>
<body>
    <h1>Pood OÜ</h1>
    <form action="tellimine.php" method="get">
        Toode 1 <input type="text" name="t1"><br>
        Toode 2 <input type="text" name="t2"><br>
        Toode 3 <input type="text" name="t3"><br>
        <input type="submit" value="Saada">
    </form>

    <h1>Pood OÜ</h1>
    <form action="tellimine.php" method="get">
        Silindri raadius <input type="text" name="sk"><br>
        Silindri kõrgus <input type="text" name="sr"><br>

        <input type="submit" value="Saada">
    </form>
</body>
</html>
<?php
?>
