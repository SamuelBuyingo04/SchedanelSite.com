<?php

?>
<html lang="en">
  <head>
    <title><?php echo $setting['site_name'];?>SchedGlobal</title>
  </head>
  <body>
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-1.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Best catering services</h4>
                                <h1>safety & Health</h1>
                                <div class="text">We offer the best catering service in remote site.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-2.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Your logistic partner </h4>
                                <h1>enable supply chain</h1>
                                <div class="text">To give the best import/export services in the supply chain.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                               
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-3.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>It’s possible here</h4>
                                <h1>Management support</h1>
                                <div class="text">Right to find fault with a man who chooses to enjoy a pleasure.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Offering the best catering services in <br> Remote Site</h2>
            </div>
        </div>
    </section>

    <style>
        .zoom:hover{
            transform: scale(1.02);
        }
    </style>

    <div class="container pb-5">
        <div class="row">
            <?php while($row=mysqli_fetch_array($services)){ ?>
                <div class="col-md-4 zoom">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" style="height: 270px;" src="/<?php echo $row['img']; ?>" alt="card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>< href="single-service.php?id=<?php echo $row['id']; ?>"<?php echo $row['title'];?></a></b></h5>
                                <p class="card-text"><?php echo $row['short']; ?></p>
                            </div>
                            <div class="card-footer">
                             
                               <div class="link"><a href="single-service.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <section class="about-section" style="background-image: url();">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Company</div>
                        <h2>Providing<br> Reliable Services <br> Since 2020</h2>
                        <div class="text">We are recognized as the global benchmark for safety, quality and integrity. Legally registered in DRC since 2021, Schedanel has expended in Uganda producing natural fresh juice. We work together enabling a safer world in whatever your field, our experts provide professional solutions to make your business more efficient.</div>
                        <a href="about.php" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-package"></span></div>
                                <div class="content">
                                    <span><h4>Catering services</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-goal"></span></div>
                                <div class="content">
                                    <span><h4>Supply chain</h4></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                                <div class="icon"><span class="flaticon-binoculars"></span></div>
                                <div class="content">
                                    <span><h4>Management support</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <span><h4>Camp managemnet</h4></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/resource/image-1.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
