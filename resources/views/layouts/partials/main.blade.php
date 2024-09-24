<main>
    <div>
        <div class="bg-teentitans">
            <span class="badge"><h4 class="fw-bold">CURRENT SERIES</h4></span>
        </div>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-2 d-flex flex-wrap justify-content-center mt-3">
                        <div v-for="(comic, index) in comics" :key="index" class="col-2 d-flex">
                            <div class="card m-2">
                                <img :src="comic.thumb" :alt="comic.series" class="card-img-top img-fluid">
                                <div>
                                    <p class="text-center"></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary"><p class="fw-bold">LOAD MORE</p></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-azure p-5">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-2 align-self-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                        <p class="d-inline-block">DIGITAL COMICS</p>
                    </div>
                    <div class="col-2 align-self-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}">
                        <p class="d-inline-block">DC MERCHANDISE</p>
                    </div>
                    <div class="col-2 align-self-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}">
                        <p class="d-inline-block">SUBSCRIPTION</p>
                    </div>
                    <div class="col-2 align-self-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}">
                        <p class="d-inline-block">COMIC SHOP LOCATOR</p>
                    </div>
                    <div class="col-2 align-self-center">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}">
                        <p class="d-inline-block">DC POWER VISA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>