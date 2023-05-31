<?php $page = 'store'; ?>
<?php include_once "layouts/header.php"; ?>
<?php include_once "../settings/siteSettings.php"; ?>

<?php foreach ($store as $key => $val): ?>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper"><?= $val['title']; ?></span>
                            <span class="section-heading-lower"><?= $val['subtitle']; ?></span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <?php foreach ($work_time as $w_key => $w_val): ?>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    <?= $w_val['work_key']; ?>
                                    <span class="ms-auto"><?= $w_val['work_value']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong><?= $val['street']; ?></strong>
                                <br/>
                                <?= $val['address']; ?>
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>Call Anytime</em></small>
                            <br/>
                            <?= $val['phone']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>
<?php foreach ($about as $key => $val): ?>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../img/<?= $val['image']; ?>" alt="..."/>
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?= $val['title']; ?></span>
                                <span class="section-heading-lower"><?= $val['subtitle']; ?></span>
                            </h2>
                            <div>
                                <?= $val['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>

<?php include_once "layouts/footer.php"; ?>
