<?php
include_once 'config.php';

$sql = "SELECT q.questionId, q.questionInfo, d.descriptionId, d.descriptionInfo, a.answerId, a.answerInfo
        FROM questions q
        INNER JOIN descriptions d ON q.descriptionId = d.descriptionId
        INNER JOIN answers a ON q.answerId = a.answerId";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $questions;
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
