<?= $this->include('landing_page/layouts/header') ?>
<section class="h-max bg-base-200">
    <div class="p-6">
        <div class="header relative mt-5">
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                  <img class="rounded-t-3xl w-full lg:h-96 object-cover" src="/faskes/<?= $faskes[0]['foto1']  ?>" alt="<?= $faskes[0]['foto1']  ?>" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                  <img class="rounded-t-3xl w-full lg:h-96 object-cover" src="/faskes/<?= $faskes[0]['foto2']  ?>" alt="<?= $faskes[0]['foto2']  ?>" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                  <img class="rounded-t-3xl w-full lg:h-96 object-cover" src="/faskes/<?= $faskes[0]['foto3']  ?>" alt="<?= $faskes[0]['foto3']  ?>" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="btn btn-circle">❮</a>
                        <a href="#slide4" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news mt-5 p-1">
            <div class="text-2xl mt-2 font-bold"><?= $faskes[0]['nama']  ?> - <?= $faskes[0]['nama_faskes'] ?> (<a href="<?= $faskes[0]['website']  ?>"><?= $faskes[0]['website']  ?></a>)</div>
            <div class="p-3 mt-5 border rounded-2xl border-dashed border-slate-300">
                <div class="mt-1">
                    <div class="w-full flex">
                        <h1><?= $faskes[0]['alamat']  ?></h1>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-justify">
                <p><?= $faskes[0]['deskripsi']  ?></p>
            </div>
            <div class="rating mt-5">
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked /> &nbsp;
                <?= $faskes[0]['skor_rating'] ?>
            </div>
            <div class="collapse mt-5">
                <input type="checkbox" />
                <div class="collapse-title text-md font-medium">
                    Munculkan Komentar
                </div>
                <div class="collapse-content">
                    <?php
                    if (count($komentar) == 0) {
                    ?>
                        <div class="text-center">
                            <p class="text-xl">Belum ada komentar</p>
                        </div>
                        <?php
                    } else {
                        foreach ($komentar as $komentar) {
                        ?>
                            <p class="text-sm font-bold"><?= $komentar['username'] ?> - <?= $komentar['tanggal'] ?></p>
                            <p class="text-lg"><?= $komentar['isi'] ?></p>
                    <?php }
                    } ?>
                </div>
            </div>
            <?php if (session()->islogin) : ?>
                <form action="<?= route_to('komentar') ?>" method="POST">
                    <div class="flex flex-col lg:flex-row gap-3">
                        <input type="hidden" name="faskes_id" value="<?= (int)$faskes[0]['id'] ?>">
                        <input type="hidden" name="users_id" value="<?= (int)session()->id ?>">
                        <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                        <input type="text" name="isi" placeholder="Masukan Komentar Anda" class="input input-bordered w-full" required />
                        <select class="select select-secondary w-full max-w-xs" name="rating_id" required>
                            <option disabled selected>Pilih Rating</option>
                            <option value="1">Jelek</option>
                            <option value="2">Kurang Bagus</option>
                            <option value="3">Biasa Aja</option>
                            <option value="4">Bagus</option>
                            <option value="5">Sangat Bagus</option>
                        </select>
                        <button type="submit" class="btn btn-accent bg-green-600 btn-md text-white"><span class="material-icons mr-1">
                                send
                            </span>Kirim</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>
<?= $this->include('landing_page/layouts/footer') ?>