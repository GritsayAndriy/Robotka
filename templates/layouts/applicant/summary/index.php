<?php

theme_header('header-applicant'); ?>

<main>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div>
                <a class="btn btn-primary" href="/applicant/summaries/create">Create</a>
            </div>
            <div class="col">
                <?php foreach ($summaries as $summary): ?>
                <div class="col-sm-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $summary->getPosition()?></h5>
                            <p class="card-text">Description:<?= $summary->getDescription()?></p>
                            <p class="card-text">Skills: <?= $summary->getSkills()?></p>
                            <a href="#" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    </div>
</main>

<?php
theme_footer(); ?>
