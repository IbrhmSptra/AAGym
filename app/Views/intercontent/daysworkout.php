<?= $this->extend('layouts/interbase'); ?>

<?= $this->section('content'); ?>

<!-- Header -->
<div class="headercard">
    <p><?= $day['day'] ?></p>
</div>
<!-- Akhir Dari Header -->

<!-- Card Workout -->
<div class="workout pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col text-start">
                <p class="fs-5 fw-bold redtext">Intruksi</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-start">
                <p class="text-black">
                    Waktu latihan ini sekitar 10-15 menit. Mulailah jika Anda memiliki
                    pengalaman lebih dan ingin membakar lebih banyak kalori. Program
                    ini memadukan aerobik dasar dan latihan anaerobik yang menggunakan
                    berat badan untuk melatih semua kelompok otot dan memacu
                    pembakaran lemak. Tetaplah menjalani menu rendah kalori untuk
                    memaksimalkan hasil latihan.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 text-start">
                <p class="text-black">
                    <span class="redtext fw-bold">Latihan</span> (8)
                </p>
            </div>
            <div class="col text-start">
                <p class="text-black">
                    <span class="redtext fw-bold"><?= $day['cal'] ?></span> KKal
                </p>
            </div>
        </div>
        <div id="layoutworkout">
            <?php foreach ($table as $col) : ?>
                <div class="row">
                    <div class="col">
                        <a href="workout.html">
                            <div id="cardworkout" class="card mt-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="fw-bolder text-white fs-2 ps-4">
                                                <?= $col['gerakan'] ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="fw-bolder text-white fs-2 text-end pe-4">
                                                <?= isset($col['repitisi'])  ? $col['repitisi'] : "1:00" ?>
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
    </div>
</div>
<?= $this->endSection(); ?>