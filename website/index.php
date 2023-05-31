<?php $page = 'index'; ?>
<?php include_once "layouts/header.php"; ?>
<?php include_once "../settings/siteSettings.php"; ?>

<?php //foreach ($home as $key => $val): ?>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="../img/<?= $home[0]['image']; ?>" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?= $home[0]['title']; ?></span>
                            <span class="section-heading-lower"><?= $home[0]['subtitle']; ?></span>
                        </h2>
                        <p class="mb-3"><?= $home[0]['content']; ?></p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="store">Visit Us Today!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?= $home[1]['title']; ?></span>
                                <span class="section-heading-lower"><?= $home[1]['subtitle']; ?></span>
                            </h2>
                            <p class="mb-0"><?= $home[1]['content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php //endforeach; ?>

<?php include_once "layouts/footer.php"; ?>
