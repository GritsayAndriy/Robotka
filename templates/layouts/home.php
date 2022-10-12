<?php

theme_header() ?>
    <main>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-8">
                    <?php
                    foreach ($vacancies as $vacancy): ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $vacancy->getName(); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $vacancy->getCreatedAt()->format('Y-m-d H:i')?></h6>
                                <p class="card-text"><?=$vacancy->getDescription()?></p>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                </div>
            </div>
        </div>
    </main>
<?php
theme_footer(); ?>