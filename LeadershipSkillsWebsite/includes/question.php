<?php
include_once 'config.php';

$sql = "SELECT q.questionId, q.questionInfo, d.descriptionId, d.descriptionInfo, a.answerId, a.answerInfo
        FROM questions q
        INNER JOIN descriptions d ON q.descriptionId = d.descriptionId
        INNER JOIN answers a ON q.answerId = a.answerId
        WHERE q.questionId = :questionId";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":questionId", $questionId, PDO::PARAM_INT);
    $stmt->execute();
    $question = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
