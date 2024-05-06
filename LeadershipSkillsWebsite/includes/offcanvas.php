<?php include_once 'includes/questions.php' ?>

<div id="offcanvas-filter" class="offcanvas offcanvas-end" tabindex="-1">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filter</h5>
        <a id="clear-all-link" href="questions.php">
            Clear All
        </a>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <h6 id="filter-title">FILTER BY QUESTION</h6>
        <form id="form-filter" method="post" action="question.php">
            <ul class="list-group list-group-flush">
                <?php foreach ($questions as $row) : ?>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="id" value="<?= $row['questionId'] ?>" id="<?= $row['questionId'] ?>">
                        <label class="btn" for="<?= $row['questionId'] ?>"> <?= $row['questionInfo'] ?> </label>
                    </div>
                <?php endforeach ?>
            </ul>
            <button id="apply-button" class="btn" type="submit">
                <div class="button-text">APPLY</div>
                <img class="icon" src="img/arrow.png">
            </button>
        </form>
    </div>
</div>