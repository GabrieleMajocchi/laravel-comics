<main class="">
    <div class="jumbotron"></div>
    <div class="products">
        <div class="box m-auto w-75 d-flex align-item-center justify-content-between flex-wrap position-relative">
            <div class="current-series fw-bold">CURRENT SERIES</div>

            <!-- DA FARE CON FOREACH -->
            <SingleComics v-for="comics in currentseries" :comicslist="comics"/>>
            <div class="comics">
                <span class="fw-bold fs-2">{{comicslist.price}}</span>
                <img :src="comicslist.thumb" :alt="comicslist.series">
                <p class="comics-title">{{(comicslist.series).toUpperCase()}}</p>
            </div>

            <a href="#" class="load-more fw-bold m-auto">LOAD MORE</a>
        </div>
    </div>
    <div class="blubox d-flex align-item-center justify-content-center">
        <div class="element d-flex align-items-center px-5">
            <img src="../assets/img/buy-comics-digital-comics.png" alt="">
            <p>DIGITAL COMICS</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="../assets/img/buy-comics-merchandise.png" alt="">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="../assets/img/buy-comics-subscriptions.png" alt="">
            <p>SUBSCRIPTION</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="../assets/img/buy-comics-shop-locator.png" alt="">
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="../assets/img/buy-dc-power-visa.svg" alt="">
            <p>DC POWER VISA</p>
        </div>
    </div>
</main>