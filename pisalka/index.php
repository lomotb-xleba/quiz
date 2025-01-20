<?php
session_start();
include_once "config.php";

if (!isset($_SESSION['fio'])) { // Проверяем, установлено ли ФИО
    if (isset($_POST['fio'])) {
        $_SESSION['fio'] = $_POST['fio'];
    } else {
        header("Location: start.php"); // Если ФИО не установлено, перенаправляем на start.php
        exit();
    }
}

// Получить общее количество вопросов
$total_questions_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM questions");
$total_questions = mysqli_fetch_assoc($total_questions_query)['total'];

// Определить текущий вопрос (из сессии или первый)
$current_question = $_SESSION['current_question'] ?? 1;

// Если текущий вопрос больше общего количества, перенаправить на result.php
if ($current_question > $total_questions) {
    header("Location: result.php");
    exit;
}

// Получить вопрос из базы данных
$question_query = mysqli_query($conn, "SELECT * FROM questions WHERE id = $current_question");
$question = mysqli_fetch_assoc($question_query);

// Перемешать варианты ответа
$answers = [
    'a' => $question['answer_a'],
    'b' => $question['answer_b'],
    'c' => $question['answer_c'],
    'd' => $question['answer_d'],
    'e' => $question['answer_e'],
    'f' => $question['answer_f']
];
shuffle($answers);

unset($_SESSION['answers'][$question['id']]);
unset($_SESSION['current_question']);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Квиз по квантовой механики</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="next_question.php" method="POST">
        <input type="hidden" name="current_question" value="<?php echo $question['id']; ?>">

        <div>
            <p><?php echo $question['question']; ?></p>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="a"><?php echo $question['answer_a']; ?></label>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="b"><?php echo $question['answer_b']; ?></label>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="c"><?php echo $question['answer_c']; ?></label>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="d"><?php echo $question['answer_d']; ?></label>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="e"><?php echo $question['answer_e']; ?></label>
            <label><input name="q<?php echo $question['id']; ?>" type="radio" value="f"><?php echo $question['answer_f']; ?></label>
        </div>
        <button type="submit">Следующий вопрос</button>
    </form>
</body>
</html>

