<!-- head page included  -->
<?php include "pages/includes/head.php" ?>



<section class="py-5">
    <div class="container">
        <div class="row">

            <?php foreach ($blogs->blogs as $key => $blog) { ?>
            <div class="col-md-4 py-4">
                <div class="card">
                    <img src="<?php echo $blog["img"] ?>" class="card-img-top w-100" height="180px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $blog["title"] ?></h5>
                        <p class="card-text"><?php echo $blog["sd"] ?></p>
                        <a href="?page=blog-details&img=<?php echo $blog["img"] ?>&title=<?php echo $blog["title"] ?>&sd=<?php echo $blog["sd"] ?>&ld=<?php echo $blog["ld"] ?>" class="btn btn-primary">Show More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>


<!-- footer page include  -->
<?php include "pages/includes/footer.php" ?>


