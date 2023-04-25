<?= $this->extend('layouts/outerbase'); ?>

<?= $this->section('content'); ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">AAGym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
                <a class="nav-link active" href="/latihan">Latihan</a>
                <a class="nav-link" href="#">BMI</a>
                <a class="nav-link" href="#">Tentang</a>
            </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbtron -->
<div id="latjumbotron" class="jumbotron jumbotron-fluid">
    <div class="containerjumbot">
        <div class="teks">
            <h1><span>7 Days</span> Workout</h1>
            <p>
                AAGym akan membuatkan anda plan workout dalam 7 hari kedepan. Dalam
                1 hari akan ada 9 gerakan dengan panduan dari AAgym. Anda sudah
                menamatkan plan 7 days workout? Tenang tinggal mulai aja dari days 1
                lagi. ehehehe mantap dahuy
            </p>
            <div class="btnstartlatihan text-center">
                <a href="#latihan"><button type="button" class="btn btn-warning">
                        Get Started >>
                    </button></a>
            </div>
        </div>
        <div id="gambar">
            <img src="/assets/img/modellat.png" alt="modelbg" />
        </div>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Separator -->
<div class="separator mt-0">
    <p>7 HARI LATIHAN</p>
</div>
<!-- End Separator -->

<!-- latihan section -->
<section id="latihan">
    <div class="container pb-4">
        <?php foreach ($table as $col) : ?>
            <div class="row">
                <div class="col">
                    <a href="/daysdetail/<?= $col['id'] ?>">
                        <div id="cardlat" class="card mt-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="fw-bolder text-dark fs-2 ps-4"><?= $col['day'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bolder text-dark fs-2 text-end pe-4">
                                            <?= $col['cal'] ?> cal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<!-- end latihan -->
<?= $this->endSection(); ?>