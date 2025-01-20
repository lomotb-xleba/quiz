<?php
session_start();
include_once "config.php";

// Получаем текущий вопрос и ответ пользователя
$current_question = $_POST['current_question'];
$answer_key = "q" . $current_question;
$user_answer = $_POST[$answer_key] ?? null;

// Сохраняем ключ выбранного ответа в сессии
$_SESSION['answers'][$current_question] = $user_answer;

$_SESSION['current_question'] = $current_question + 1;

header("Location: index.php");
exit;
?>
