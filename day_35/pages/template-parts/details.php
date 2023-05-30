<!-- head page included  -->
<?php include "pages/includes/head.php" ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img src="<?php echo $_GET["img"] ?>" class="card-img-top w-100" height="400px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_GET["title"] ?></h5>
                        <p class="card-text"><?php echo  $_GET["ld"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer page include  -->
<?php include "pages/includes/footer.php" ?>


