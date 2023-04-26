<?= $this->extend('layouts/interbase'); ?>

<?= $this->section('content'); ?>

<div class="frame">
    <div id="containerworkout" class="container">
        <div class="row text-center">
            <div class="col">
                <img class="mt-5" id="gif" src="/assets/img/<?= $table['gif'] ?>" alt="GIF WORKOUT" />
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <p id="judulworkout" class="fw-bold yellowtext mt-2"><?= $table['gerakan'] ?></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <!-- percabangan untuk menampilkan antara repitisi atau hitung mundur -->
                <?php if (isset($table['repitisi'])) { ?>
                    <p id="itensitas" class="fw-bold"><?= $table['repitisi'] ?></p>
                <?php } else { ?>
                    <div id="ready" class="fw-bold">Lesgoo</div>
                    <div id="countdown" style="display:none;" class="fw-bold"></div>
                <?php } ?>
            </div>
        </div>
        <?php if (isset($table['repitisi'])) { ?>
            <div class="row text-center">
                <div class="col">
                    <a href="/daysdetail/<?= $table['id_days'] ?>">
                        <button id="btndone" class="btn">Selesai</button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        const readyaudio = document.getElementById("readyaudio");
        const countdown = document.getElementById("countdown");
        const ready = document.getElementById("ready");

        // Play the audio file when the page loads
        readyaudio.play();

        //make text for ready set go
        var startime = 4;
        var intervalready = setInterval(function() {
            startime--;
            if (startime <= 4) {
                $('#ready').text("Ready..");
            }
            if (startime <= 2) {
                $('#ready').text("Set..");
            }
            if (startime <= 1) {
                $('#ready').text("Go..!");
            }
            if (startime == 0) {
                clearInterval(intervalready);
                ready.style.display = "none";
            }
        }, 1000);

        // When the audio ends, show the countdown div
        readyaudio.addEventListener("ended", function() {
            countdown.style.display = "block";
            var count = <?= $table['waktu'] ?>;
            var interval = setInterval(function() {
                count--;
                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
                var time = minutes + ":" + seconds;
                $('#countdown').text(time);
                $('#tick')[0].play();
                if (count == 0) {
                    clearInterval(interval);
                    window.location.href = "<?= '/daysdetail/' . $table['id_days'] ?>";
                }
            }, 1000);

        });
    });
</script>

<?= $this->endSection(); ?>