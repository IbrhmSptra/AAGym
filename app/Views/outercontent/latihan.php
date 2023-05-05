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
                <a class="nav-link" href="/bmi">BMI</a>
                <a class="nav-link" href="/tentang">Tentang</a>
            </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbtron -->
<div id="latjumbotron" class="jumbotron jumbotron-fluid">
    <div class="containerjumbot">
        <div class="teks">

            <!-- MODAL -->
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #585048">
                        <div class="modal-header">
                            <h2 class="modal-title fw-bold">
                                Workout 7 days selesai
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16" style="fill: orange; width: 24px; height: 24px">
                                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16" style="fill: orange; width: 24px; height: 24px">
                                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                </svg>
                            </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        Selamat anda telah menyelesaikan semua plan workout
                                        AAGym. Tekan tombol reset untuk mengulang semua dari
                                        awal. Jangan lupa istirahat dan tetap jaga pola makan..
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col text-end">
                                        <a href="/reset">
                                            <button type="button" class="btn" style="background-color: #feda15; color: black">
                                                Reset
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MODAL -->

            <h1><span>7 Days</span> Workout</h1>
            <p>
                AAGym akan membuatkan anda plan workout dalam 7 hari kedepan. Dalam
                1 hari akan ada 9 gerakan dengan panduan dari AAgym. Anda sudah
                menamatkan plan 7 days workout? Tenang tinggal mulai aja dari days 1
                lagi. ehehehe mantap dahuy
            </p>
            <div class="btnstartlatihan text-start">
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
                        <div id="cardlat<?= in_array($col['id'], $daysdone['id']) ? 'done' : '' ?>" class="card mt-5">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col">
                                        <p class="fw-bolder text-dark fs-2 ps-4"><?= $col['day'] ?></p>
                                    </div>
                                    <div class="col<?= in_array($col['id'], $daysdone['id']) ? '-1' : '' ?>">
                                        <?php if (in_array($col['id'], $daysdone['id'])) { ?>
                                            <img style="width:100px; height:70px;" class="text-end pe-4" src="/assets/img/checkicon.png" alt="">
                                        <?php } ?>
                                        <p class="fw-bolder text-dark fs-2 text-end pe-4" style="<?= in_array($col['id'], $daysdone['id']) ? 'display:none;' : '' ?>">
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

<?php if ($showmodal) { ?>
    <script>
        $(document).ready(function() {
            $(".modal").modal("show");
        });
    </script>
<?php } ?>
<!-- end latihan -->
<?= $this->endSection(); ?>