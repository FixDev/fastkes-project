<?= $this->include('landing_page/layouts/header') ?>
<section class="h-screen bg-base-200">
    <div class="p-6">
        <div class="bg-white p-6 rounded-lg">
            <header class="mb-5">
                <h1 class="font-medium text-xl">Ayoo, Temukan Faskes Terdekat.</h1>
            </header>

            <form action="<?= route_to('search') ?>" method="GET">
                <div class="flex flex-col lg:flex-row gap-3">
                    <input type="text" name="keyword" placeholder="Masukan nama faskes" class="input input-bordered w-full" />
                    <button type="submit" class="btn btn-accent bg-green-600 btn-md text-white"><span class="material-icons mr-1">
                            search
                        </span>Search</button>
                </div>
            </form>

            <div class="flex flex-wrap flex-row justify-center gap-8 mt-5 mb-5">
                <?php
                if (count($faskes) == 0) {
                ?>
                    <div class="text-center">
                        <h2 class="text-xl">Tidak ditemukan faskes dengan nama <?= $keyword ?>.</h2>
                    </div>
                <?php
                } else {
                ?>
                    <?php foreach ($faskes as $f) : ?>
                        <div class="card w-80 lg:w-64 bg-base-100 shadow-xl">
                            <figure>
                                <div class="carousel rounded-box">
                                    <div class="carousel-item w-full">
                                        <img src="/faskes/<?= $f['foto1']  ?>" alt="<?= $f['foto1']  ?>" class="w-full" />
                                    </div>
                                </div>
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    <?= $f['nama']  ?> - <?= $f['nama_faskes'] ?>

                                </h2>
                                <p><?= $f['alamat'] ?></p>
                                <div class="card-actions justify-end">
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked /> &nbsp;
                                        <?= $f['skor_rating'] ?>
                                        <!-- <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" /> -->
                                        <!-- <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?= $this->include('landing_page/layouts/footer') ?>