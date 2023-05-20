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
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/latihan">Workout</a>
                <a class="nav-link" href="/bmi">BMI</a>
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
    <div class="containerjumbot">
        <div class="teks">
            <?php if (logged_in()) { ?>
                <h3 data-aos="fade-left">Hallo, <?= $username ?></h3>
            <?php } ?>
            <h1 data-aos="fade-right"><span>#Stop Mager</span><br />Ayo Workout!!</h1>
            <p data-aos="fade-left">
                Anda bingung gerakan workout itu ngapain aja? Mau workout tapi malas
                bikin plan? Cape cape workout tapi badan masih gitu gitu aja? tenang
                AAGym bisa ngatur itu semua dengan plan 7 hari dan bermacam macam
                variasi gerakan anda bisa bisa workout tanpa kebingungan
            </p>
            <?php if (!logged_in()) { ?>
                <div data-aos="fade-up" class="butonlogin text-center">
                    <a href="/register"><button type="button" class="btn btn-warning">Daftar</button></a>
                    <a href="/login"><button type="button" class="btn btn-warning">Masuk</button></a>
                </div>
            <?php } ?>
        </div>
        <div class="gambar">
            <img data-aos="zoom-out" data-aos-delay="200" src="/assets/img/modelbg.png" alt="modelbg" />
        </div>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Section -->
<div class="section">
    <div class="container pt-md-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="300" class="card text-bg-danger" id="cardsc">
                    <img id="cardimg" src="/assets/img/beratbadan.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h1><b>Berat Badan</b></h1>
                        <p class="card-text" style="font-size: 20px">
                            Membantu menurunkan berat badan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="300" class="card text-bg-danger" id="cardsc">
                    <img id="cardimg" src="/assets/img/kesehatan.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h1><b>Kesehatan</b></h1>
                        <p class="card-text" style="font-size: 20px">
                            Menjaga kesehatan dan kebugaran tubuh
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="1000" class="card text-bg-danger" id="cardsc">
                    <img id="cardimg" src="/assets/img/otot.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h1><b>Masa Otot</b></h1>
                        <p class="card-text" style="font-size: 20px">
                            Membentuk dan membangun masa otot
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img data-aos="zoom-out" data-aos-delay="500" id="modelsc" src="/assets/img/modelsc.png" alt="..." />
            </div>
            <div class="col align-self-center">
                <div class="row">
                    <h4 data-aos="fade-up" data-aos-delay="100" id="blacksc">Tentang</h4>
                </div>
                <div class="row">
                    <h1 data-aos="fade-right" data-aos-delay="100" id="headsc">AAGYM</h1>
                </div>
                <div class="row">
                    <p data-aos="fade-left" data-aos-delay="100" id="blacksc">
                        AAgym Merupakan website fitness yang dapat membantu anda untuk
                        workout dan sekaligus dapat memantau BMI (Body Mass Index) agar
                        dapat mencapai body ideal yang anda inginkan. Yang keren adalah
                        anda tidak perlu langanan untuk bisa menikmati fitur yang
                        disediakan AAGym cukup andanya aja jangan malas malasan untuk
                        bisa sehat. Ayo angkat pantatmu dan berolahraga cevaattt
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section end -->
<?= $this->endSection(); ?>