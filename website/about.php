<?php $page = 'about'; ?>
<?php include_once "layouts/header.php"; ?>
<?php include_once "../settings/siteSettings.php"; ?>

<section class="page-section about-heading">
    <div class="container">
        <?php foreach ($about as $key => $val): ?>
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
        <?php endforeach; ?>
    </div>
</section>
<?php include_once "layouts/footer.php"; ?>
