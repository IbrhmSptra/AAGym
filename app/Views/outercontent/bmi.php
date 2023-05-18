<?= $this->extend('layouts/outerbase'); ?>

<?= $this->section('content'); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a id="logonavbar" class="navbar-brand" href="/">AAGYM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/latihan">Workout</a>
                <a class="nav-link active" href="/bmi">BMI</a>
                <a class="nav-link" href="/tentang">About</a>
                <?php if (logged_in()) { ?>
                    <a class="nav-link" href="/logout">Logout</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Jumbtron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="bmijumbotron">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <p data-aos="fade-right" class="fs-2 fw-bold yellowtext text-start">
                            Apakah Badanmu Ideal?
                        </p>
                    </div>
                    <div class="row">
                        <form action="/calculatebmi" method="post">

                            <div data-aos="fade-left" class="mb-3">
                                <label for="tinggi" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control <?= (isset($validation['haserrortinggi']) && $validation['haserrortinggi']) ? 'is-invalid' : '' ?>" id="tinggi" name="tinggi" placeholder="cm" value="<?= old('tinggi'); ?>" />
                                <div class="invalid-feedback">
                                    <?= (isset($validation['geterrortinggi']) && $validation['geterrortinggi']) ? $validation['geterrortinggi'] : '' ?>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="mb-3">
                                <label for="berat" class="form-label">Berat Badan (kg)</label>
                                <input type="number" class="form-control <?= (isset($validation['haserrortinggi']) && $validation['haserrorberat']) ? 'is-invalid' : '' ?>" id="berat" name="berat" placeholder="kg" value="<?= old('berat'); ?>" />
                                <div class="invalid-feedback">
                                    <?= (isset($validation['geterrorberat']) && $validation['geterrorberat']) ? $validation['geterrorberat'] : '' ?>
                                </div>
                            </div>
                            <button data-aos="fade-left" data-aos-once="true" type="submit" class="btn btn-danger btnhitung mt-3">
                                Hitung
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div data-aos="fade-down" data-aos-delay="200" class="bgbmi">
                        <div class="row pt-3 justify-content-center align-content-center">
                            <div class="col-2">
                                <img src="/assets/img/kurus.png" alt="" <?php if (isset($result['golongan']) && $result['golongan'] == 'kurus') { ?> style="border:2px dashed white;" <?php } ?> />
                            </div>
                            <div class="col-2">
                                <img src="/assets/img/normal.png" alt="" <?php if (isset($result['golongan']) && $result['golongan'] == 'normal') { ?> style="border:2px dashed white;" <?php } ?> />
                            </div>
                            <div class="col-2">
                                <img src="/assets/img/gemuk.png" alt="" <?php if (isset($result['golongan']) && $result['golongan'] == 'gemuk') { ?> style="border:2px dashed white;" <?php } ?> />
                            </div>
                            <div class="col-2">
                                <img src="/assets/img/obesitas1.png" alt="" <?php if (isset($result['golongan']) && $result['golongan'] == 'obesitas1') { ?> style="border:2px dashed white;" <?php } ?> />
                            </div>
                            <div class="col-2">
                                <img src="/assets/img/obesitas2.png" alt="" <?php if (isset($result['golongan']) && $result['golongan'] == 'obesitas2') { ?> style="border:2px dashed white;" <?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="result" <?= isset($result['style']) ? $result['style'] : "" ?>>
                        <p class="text-black" <?= isset($result['styletext']) ? $result['styletext'] : "" ?>><?= isset($result['bmi']) ? $result['bmi'] : "00.0" ?></p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="resultcolor" <?= isset($result['style']) ? $result['style'] : "" ?>>
                        <p class="text-black align-self-center mt-4" <?= isset($result['styletext']) ? $result['styletext'] : "" ?>>
                            <?= isset($result['klasifikasi']) ? $result['klasifikasi'] : "Kira kira kamu termasuk yang mana ya...." ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Jumbotron -->

<?= $this->endSection(); ?>