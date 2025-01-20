<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <label for="fio">ФИО:</label>
        <input type="text" id="fio" name="fio" required><br><br>
        <input type="submit" value="Начать тест">
    </form>
</body>
</html>
