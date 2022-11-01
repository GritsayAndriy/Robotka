<?php

theme_header(); ?>
<main>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-9">
                <h2>Create new summary</h2>
                <form class="card p-5" method="post">
                    <div class="row mb-3">
                        <label for="positionInput" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="positionInput" name="position">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="descriptionInput" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="descriptionInput" name="description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="skillsInput" class="col-sm-3 col-form-label">Skills</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="skillsInput" name="skills"></textarea>
                        </div>
                    </div>

                    <?php if (isset($validation)):?>
                        <div class="row mb-3">
                            <div class="alert alert-danger">
                                <?= $validation['error']?>
                            </div>
                        </div>
                    <?php endif;?>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary px-3">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
theme_footer('footer-applicant'); ?>
