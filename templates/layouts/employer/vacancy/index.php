<?php

theme_header('header-employer'); ?>

<main>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div>
                <a class="btn btn-primary" href="/employer/vacancies/create">Create</a>
            </div>
            <div class="col">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($vacancies as $vacancy): ?>
                        <tr>
                            <th scope="row"><?= $vacancy->getId(); ?></th>
                            <td><?= $vacancy->getName(); ?></td>
                            <td><?= $vacancy->getCreatedAt()->format('Y-m-d H:i'); ?></td>
                            <td>
                                <a class="btn" href="">Edit</a>
                                <a class="btn" href="">Delete</a>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</main>

<?php
theme_footer(); ?>
