<?php theme_header(); ?>
    <main>
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-7">
                    <h2>Login as employer</h2>
                    <form class="card p-5" method="post">
                        <div class="row mb-3">
                            <label for="emailInput" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="emailInput" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="passwordInput" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="passwordInput" name="password">
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
                                <button type="submit" class="btn btn-primary px-3">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php theme_footer(); ?>