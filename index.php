<?php
    
    $title = "Home";
    include('includes/header.php');
?>
<section>
    <title>Thrift Nepal</title>
    
    <section id="carousel-fit">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators cindicator">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2">
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/pic10.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/pic11.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/pic12.jpg" alt="Image 1">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>
    
    <section class="slider-info col-sm-12">
        <div class="row">
            <div class="content-bg col-sm-4 one-bg">
                <span class="far fa-lightbulb icon"></span>
                <h3 class="ban-text">
                    Second Hand Clothes At the Best Price
                </h3>
            </div>
            <div class="content-bg col-sm-4 two-bg">
                <span class="fas fa-book icon"></span>
                <h3 class="ban-text">
                    About US!!
                </h3>
            </div>
            <div class="content-bg col-sm-4 third-bg">
                <span class="fas fa-shield-alt icon"></span>
                <h3 class="ban-text">
                        Quality Products!
                </h3>
            </div>
        </div>
    </section>
  
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">About Us</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                  We’re the Nepal’s largest online secondhand shopping destination with many like-new styles from your favorite brands at up to 90% off estimated retail. We make sure every single one of the new arrivals we add to the site every day is 100% authentic and in such good shape anyone could mistake them as new. No knockoffs here—just knockoff prices. Find high-quality used women’s clothing and used children’s clothing from fashionable closets just like yours.
                </p>
                <a href="about.php" class="btn btn-danger submit">Read More</a>
            </div>
        </div>
    </section>
    
    <section class="last-content py-5">
        <div class="container py-md-3 text-center">
            <div class="last-lavi-inner-content px-lg-5">
                <h3 class="mb-4 tittle-wthree">Come Shop <span>With</span> Us!</h3>
                <p class="px-lg-5">Sign up to be a part of a new movement. <br>And be a part of the Family <br> -- Thrift Nepal --</p>
                <div class="buttons mt-md-4 mt-3">
                    <a href="user-login.php" class="btn btn-default">Login</a>
                    <a href="user-register.php" class="btn btn1"> Register </a>
                </div>
            </div>
        </div>
    </section>

</section>
<?php
    include('includes/footer.php');
?>
