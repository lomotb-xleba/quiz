<?php
session_start();
include_once "config.php";

$ot = 0;  // Количество правильных ответов
$not = 0; // Количество неправильных ответов

$questions = mysqli_query($conn, "SELECT * FROM questions");

while ($row = mysqli_fetch_assoc($questions)) {
    // Получаем ответ пользователя для текущего вопроса
    $user_answer = $_SESSION['answers'][$row['id']] ?? null;

    // Сравниваем ответ пользователя с правильным
    if ($user_answer === $row['correct_answer']) {
        $ot++;
    } elseif ($user_answer !== null) {
        $not++;
    }
}
$fio_r=$_SESSION['fio'];
unset($_SESSION['answers']);
unset($_SESSION['current_question']);
unset($_SESSION['fio']);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Результаты теста</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="result-page">
    <div class="results-container">
        <p>ФИО: <?php echo $fio_r; ?></p>
        <p>Правильных ответов: <?php echo $ot; ?></p>
        <p>Неправильных ответов: <?php echo $not; ?></p>
        <a href="start.php" class="retry-button">Пройти заново</a>
    </div>
</body>
</html>
