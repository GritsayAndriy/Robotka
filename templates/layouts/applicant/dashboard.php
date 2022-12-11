<?php theme_header('header-applicant'); ?>
<main>
    <div class="container">
        <div class="heading my-5">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="avatar">
                    <img src="/templates/icon/avatar.webp" width="100px">
                </div>
            </div>
            <div class="col-3">
                <div class="h2">
                    <?= $authUser->getFirstName() . ' '. $authUser->getLastName()?>
                </div>
                <div>Country: <?= $authUser->getCountry()?></div>
                <div>City: <?= $authUser->getCity()?></div>
                <div>Phone: <?= $authUser->getCity()?></div>
                <div>Email: <?= $authUser->getEmail()?></div>
                <div>DOB: <?= $authUser->getBirthday()?></div>
            </div>
<!--            <div class="col">-->
<!--                <h2>Middle Back-end PHP</h2>-->
<!--            </div>-->
        </div>
<!--        <div class="row my-3">-->
<!--            <div class="col">-->
<!--                <div class="h3">-->
<!--                    Skills-->
<!--                </div>-->
<!--                <div>-->
<!--                    <p>PHP, Java, SQL, HTML, CSS, SASS, JavaScript, JSON, XML, WordPress(plugins: Woocommerce, ACF,-->
<!--                        CF7),-->
<!--                        Joomla-->
<!--                        Laravel ^8, Bootstrap ^4, jQuery.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row my-3">-->
<!--            <div class="col">-->
<!--                <div class="h3">-->
<!--                    Summery-->
<!--                </div>-->
<!--                <div>-->
<!--                    <p>It is a long established fact that a reader will be distracted by the readable-->
<!--                        content of a page when looking at its layout. The point of using Lorem Ipsum is-->
<!--                        that it has a more-or-less normal distribution of letters, as opposed to using-->
<!--                        'Content here, content here', making it look like readable English.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row my-3">-->
<!--            <div class="col">-->
<!--                <div class="h3">-->
<!--                    Experience-->
<!--                </div>-->
<!--                <div>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <span>21.07.2017 - 30.09.2022</span>-->
<!--                            <b class="h5">Position developer</b>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable-->
<!--                                content of a page when looking at its layout. The point of using Lorem Ipsum is</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <span>21.07.2017 - 30.09.2022</span>-->
<!--                            <b class="h5">Position developer</b>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable-->
<!--                                content of a page when looking at its layout. The point of using Lorem Ipsum is</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <span>21.07.2017 - 30.09.2022</span>-->
<!--                            <b class="h5">Position developer</b>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable-->
<!--                                content of a page when looking at its layout. The point of using Lorem Ipsum is</p>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row my-3">-->
<!--            <div class="col">-->
<!--                <div class="h3">-->
<!--                    Educations-->
<!--                </div>-->
<!--                <div>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <span>21.07.2017 - 30.09.2022</span>-->
<!--                            <b class="h5"> National Aviation University</b>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable-->
<!--                                content of a page when looking at its layout. The point of using Lorem Ipsum is</p>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</main>
<?php theme_footer(); ?>
