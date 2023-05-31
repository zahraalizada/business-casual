<?php $page = 'products'; ?>
<?php include_once "layouts/header.php"; ?>
<?php include_once "../settings/siteSettings.php"; ?>


<?php foreach ($products as $key => $val): ?>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper"><?= $val['title']; ?></span>
                        <span class="section-heading-lower"><?= $val['subtitle']; ?></span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../img/<?= $val['image']; ?>"
                 alt="..."/>
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><?= $val['content']; ?></div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>
<!--<section class="page-section">-->
<!--    <div class="container">-->
<!--        <div class="product-item">-->
<!--            <div class="product-item-title d-flex">-->
<!--                <div class="bg-faded p-5 d-flex me-auto rounded">-->
<!--                    <h2 class="section-heading mb-0">-->
<!--                        <span class="section-heading-upper">--><?//= $val['title']; ?><!--</span>-->
<!--                        <span class="section-heading-lower">--><?//= $val['subtitle']; ?><!--</span>-->
<!--                    </h2>-->
<!--                </div>-->
<!--            </div>-->
<!--            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../img/--><?//= $val['image']; ?><!--"-->
<!--                 alt="..."/>-->
<!--            <div class="product-item-description d-flex ms-auto">-->
<!--                <div class="bg-faded p-5 rounded">--><?//= $val['content']; ?><!--</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<?php include_once "layouts/footer.php"; ?>
