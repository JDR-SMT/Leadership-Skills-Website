<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leadership Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once 'includes/nav.php';
    include_once 'includes/offcanvas.php';

    $questionId = $_POST['id'];
    include_once 'includes/question.php';
    ?>

    <div class="container">
        <div id="questions-container" class="title-container">
            <div id="questions-title" class="title">Questions</div>
            <div id="filter-container">
                <a id="filter-button" class="btn" href="#offcanvas-filter" data-bs-toggle="offcanvas">
                    <img class="icon" src="img/filter.png">
                </a>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion-item">
                <h6 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $question['questionId'] ?>">
                        <?= $question['questionInfo'] ?>
                    </button>
                </h6>
                <div id="collapse-<?= $question['questionId'] ?>" class="accordion-collapse show" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="body-container body-title">Description</div>
                        <div class="body-text"><?= nl2br($question['descriptionInfo']) ?></div>
                        <div id="answer-container" class="body-container body-title">Answer</div>
                        <div class="body-text"><?= nl2br($question['answerInfo']) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>