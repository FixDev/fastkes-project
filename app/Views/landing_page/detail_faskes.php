<?= $this->include('landing_page/layouts/header') ?>
<section class="h-max bg-base-200">
    <div class="p-6">
        <div class="header relative mt-5">
            <img class="rounded-t-3xl w-full lg:h-96 object-cover" src="/faskes/<?= $faskes[0]['foto1']  ?>" alt="<?= $faskes[0]['foto1']  ?>" />
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
                    <p>Munculin List Komentar</p>
                </div>
            </div>
            <?php if (session()->has('username')) : ?>
                <form action="<?= route_to('search') ?>" method="GET">
                    <div class="flex flex-col lg:flex-row gap-3">
                        <input type="text" name="keyword" placeholder="Masukan nama faskes" class="input input-bordered w-full" />
                        <select class="select select-secondary w-full max-w-xs">
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