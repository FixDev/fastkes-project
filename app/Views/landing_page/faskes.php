<section class="h-screen bg-base-200">
    <div class="p-6">
        <div class="bg-white p-6 rounded-lg">
            <header class="mb-5">
                <h1 class="font-medium text-xl">Ayoo, Temukan Faskes Terdekat.</h1>
            </header>

            <div class="flex flex-col lg:flex-row gap-3">
                <input type="text" placeholder="Masukan nama faskes" class="input input-bordered w-full" />
                <button class="btn btn-accent btn-md text-white"><span class="material-icons mr-1">
                        search
                    </span>Search</button>
            </div>

            <div class="flex flex-wrap flex-row justify-center gap-8 mt-5 mb-5">
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
                <!-- <div class="card w-80 lg:w-64 bg-base-100 shadow-xl">
                    <figure>
                        <div class="carousel rounded-box">
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=8B7BCDC2" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=500B67FB" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=A89D0DE6" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=225E6693" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=9D9539E7" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=BDC01094" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=7F5AE56A" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                        </div>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            Shoes!
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <div class="rating">
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-80 lg:w-64 bg-base-100 shadow-xl">
                    <figure>
                        <div class="carousel rounded-box">
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=8B7BCDC2" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=500B67FB" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=A89D0DE6" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=225E6693" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=9D9539E7" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=BDC01094" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=7F5AE56A" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                        </div>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            Shoes!
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <div class="rating">
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-80 lg:w-64 bg-base-100 shadow-xl">
                    <figure>
                        <div class="carousel rounded-box">
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=8B7BCDC2" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=500B67FB" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=A89D0DE6" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=225E6693" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=9D9539E7" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=BDC01094" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                            <div class="carousel-item w-full">
                                <img src="https://api.lorem.space/image/game?w=400&h=300&hash=7F5AE56A" class="w-full" alt="Tailwind CSS Carousel component" />
                            </div>
                        </div>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            Shoes!
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <div class="rating">
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>