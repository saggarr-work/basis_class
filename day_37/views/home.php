<main>
    <!-- slider section  -->
    <section class="py-3">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                foreach ($sliderArray as $key => $slider) {
                ?>
                    <div class="carousel-item <?php if($key == 0){echo "active";} ?>">
                        <img src="<?php echo $slider; ?>" class="d-block w-100" height="400px" alt="...">
                    </div>
                <?php
                }
                ?>

                <!-- <div class="carousel-item">
                    <img src="assets/images/07.avif" class="d-block w-100" height="400px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/09.avif" class="d-block w-100" height="400px" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- card section  -->
    <section>
        <div class="container">
            <div class="row">
                <h1 class="text-center my-2">All Products</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="assets/images/05.jpg" class="card-img-top w-100" height="300px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-title">Price 500</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>