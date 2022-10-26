<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-primary fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mx-auto'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Biodata', 'url' => ['/biodata/index']],
            // ['label' => 'Domisili', 'url' => ['/domisili/index']],
            ['label' => 'Personal', 'url' => ['/personal/index']],
            ['label' => 'Pegawai', 'url' => ['/pegawai/index']],
            ['label' => 'User', 'url' => ['/user/index']],
            ['label' => 'Obat', 'url' => ['/obat/index']],
            ['label' => 'Tindakan', 'url' => ['/tindakan/index']],
            ['label' => 'Order', 'url' => ['/order/index']],

            
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row">
           <div class="col-xl-3">
            <div class="footer-brand">
                <h2>Klinik Ku</h2>
            </div>
           </div>

           <div class="col-xl-3">
            <div class="row">
                <div class="alamat">
                    <p>Klinikku</p>
                    <p>Jl. Griya Kebraon, Karang Pilang <br> Surabaya</p>
                </div>
            </div>
            <div class="row">
                <div class="kontak">
                    <p>Email : <a href="mailto">klinikku@gmail.com</a></p>
                    <p>Phone : <a href="tel">083-8138-1239</a></p>
                    <p>Mobile : <a href="tel">081-9238-1028</a></p>
                </div>
            </div>
           </div>

           <div class="col-xl-3">
            <div class="row">
                <h4>Perusahaan</h4>
                <ul>
                    <li><a href="index.php?r=site%2Fabout">About</a></li>
                    <li><a href="index.php?r=site%2Fcontact">Contact</a></li>
                    </ul>
            </div>

            <div class="row">
                <h4>Layanan</h4>
                <ul>
                    <li> <a href="index">Kemudahan Pengguna</a> </li>
                    <li> <a href="index">Health Gatekeeper</a> </li>
                    <li> <a href="index">Layanan Penunjang</a> </li>
                </ul>
            </div>
           </div>

           <div class="col-xl-3">
            <div class="row">
                <h4>Dukungan</h4>
                <ul>
                    <li><a href="">Keamanan</a></li>
                    <li><a href="">Status Jaringan</a></li>
                    </ul>
            </div>

            <div class="row">
                <h4>Social Media</h4>
                <ul>
                    <li> <a href="">Instagram</a> </li>
                    <li> <a href="">Facebook</a> </li>
                    <li> <a href="">LinkedIn</a> </li>
                </ul>
            </div>
           </div>


        </div>

        <hr>

        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; Klinik Ku <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
