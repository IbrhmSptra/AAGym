<?= $this->extend('layouts/interbase'); ?>

<?= $this->section('content'); ?>

<!-- Header -->
<div class="headercard">
    <p data-aos="zoom-out-up" data-aos-delay="200"><?= $day['day'] ?></p>
</div>
<!-- Akhir Dari Header -->

<!-- Card Workout -->
<div data-aos="fade-up" class="workout pb-3">
    <div class="container">
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
            <div class="col-2 text-start">
                <p class="text-black">
                    <span class="redtext fw-bold">Latihan</span> (8)
                </p>
            </div>
            <div class="col-1 text-start">
                <p class="text-black">
                    <span class="redtext fw-bold"><?= $day['cal'] ?></span> KKal
                </p>
            </div>
        </div>
        <div id="layoutworkout">
            <?php foreach ($table as $col) : ?>
                <div data-aos="zoom-in-up" class="row">
                    <div class="col">
                        <a href="/visited/<?= $col['id'] ?>">
                            <div id="cardworkout<?= in_array($col['id'], $done['id_workout']) ? 'done' : '' ?>" class="card mt-5">
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
        <div class="row mt-5">
            <div class="col text-end">
                <a href="/latihan#latihan">
                    <p class="fs-5 redtext text-decoration-underline">Hari Berikutnya > > ></p>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>