<?php 
session_start();
require_once "admin/db.php";
?>

<!doctype html>
<html class="no-js" lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="front_end_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="front_end_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="front_end_assets/css/animate.min.css">
        <link rel="stylesheet" href="front_end_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="front_end_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="front_end_assets/css/flaticon.css">
        <link rel="stylesheet" href="front_end_assets/css/slick.css">
        <link rel="stylesheet" href="front_end_assets/css/aos.css">
        <link rel="stylesheet" href="front_end_assets/css/default.css">
        <link rel="stylesheet" href="front_end_assets/css/style.css">
        <link rel="stylesheet" href="front_end_assets/css/responsive.css">
        <link rel="stylesheet" href="front_end_assets/css/comments.css">
        
        
    </head>
    <body class="theme-bg" style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                    <h1 style="color:#dc3545">Portfolio</h1>
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Нүүр</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="#about">Тухай</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">Миний ур чадвар</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Холбоо барих</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="front_end_assets/img/logo/logo.png" alt="" />
                    </a>
                </div>

                 <!--side view and contact information area  -->

                <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>

                <!-- end contact information -->

                <!-- about me query start -->

                <?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>

                <!-- about me query end  -->


                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Хаяг</h4>
                        <p><?=$contact_information['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Утас</h4>
                        <p><?=$contact_information['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Майл Хаяг</h4>
                        <p><?=$contact_information['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a>
                    <a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>
              
            <!-- php code for about me -->

           <!-- you can find about me query  in side view part -->

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">Сайн байна уу!</h6>
                                <h2 style="font-size: 3em;" class="wow fadeInUp" data-wow-delay="0.4s">Намайг <?=$about_me['name']?> </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$about_me['intro']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                                <a href="login.php" class="btn wow fadeInUp" data-wow-delay="1s">Нэвтрэх</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="admin/image/profile/<?=$about_me['photo']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front_end_assets/img/shape/balls.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <body class="theme-bg" style="background: linear-gradient(90deg,rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front_end_assets/img/banner/banner_img.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Танилцуулга</span>
                                <h2>Миний тухай</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$about_me['details']?></p>
                                <h3>Боловсрол:</h3>
                            </div>

                          


                            <!-- Education Item -->

                            <!-- php code for education -->

                            <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>





                            <div class="education">
                                <div class="year"><?=$education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$education['degree_name']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end foreach -->
                          <?php } ?>
                            <!-- End Education Item -->
                            
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->

            <!-- php code for services area -->

            <?php

            $services_query = $dbcon->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");

            ?>

           
            <body class="theme-bg" style="background: linear-gradient(90deg,rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Үйлчилгээ</span>
                                <h2>Үйлчилгээ ба шийдэл</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">

              <!-- foreach code -->

              <?php
               foreach ($services_query as $service) {
                
              ?>

						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['icon']?>"></i>
								<h3><?=$service['title']?></h3>
								<p><?=$service['some_text']?></p>
							</div>
						</div>

            <!-- foreach end -->
          <?php } ?>
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <body class="theme-bg" style="background: linear-gradient(90deg,rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Projects</span>
                                <h2>Миний хийсэн төсөлүүд</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">

            <!-- php code for my best works -->
                    <?php
                      $my_best_works_query = $dbcon->query("SELECT * FROM my_best_works ORDER BY id DESC LIMIT 6");
                      foreach($my_best_works_query as $row){
                    ?>

                      <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="admin/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="portfolio-single.html"><?=$row['works_name']?></a></h4>
      									<a href="portfolio-single.html" class="arrow-btn">Дэлгэрэнгүй <span></span></a>
      								</div>
      							</div>
                  </div>

                  <!-- foreach end -->
                <?php } ?>

                </div>
        </div>
    </section>
            <!-- services-area-end -->


            <!-- fact-area -->

          <!-- php code for fact area -->
          <?php 
            $fact_query = $dbcon -> query("SELECT * FROM stastistics");
            $fact_information = $fact_query->fetch_assoc();

          ?>

            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact_information['feature_item']?> </span></h2>
                                        <span>Онцлог зүйл</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact_information['active_products']?></span></h2>
                                        <span>Projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$fact_information['experience']?></span></h2>
                                        <span>Туршлага</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                    <a href='http://www.freevisitorcounters.com'>Free Counters</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=2f6c872e212b5705e834c27ee2e214794ab3284c'></script>
                                    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1337257/t/13"></script>
                                        <span>Үзсэн</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->



            <!-- testimonial-area -->

             <!-- php code -->
            <?php 
              $testimonial_query = $dbcon->query("SELECT * FROM testimonials");
            ?>

            <body class="theme-bg" style="background: linear-gradient(90deg,rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Сэтгэгдэл</span>
                                <h2>Хүмүүсийн сэтгэгдэлүүд</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">


                              <!-- php code-forech for testimonial -->
                              <?php foreach($testimonial_query as $row){ ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img style="width:100px;height: 100px;border-radius: 50%;" src="admin/image/customers/<?=$row['photo']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$row['customer_comment']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$row['customer_name']?></h5>
                                            <span><?=$row['customer_desegnation']?></span>
                                        </div>
                                    </div>
                                </div>

                  <!-- php code-forech end -->
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        
                      <!-- php code for add logo -->
                      <?php 
                      $logo_query = $dbcon->query("SELECT * FROM logo ORDER BY id DESC");
                      if($logo_query->num_rows>= 6){
                      foreach ($logo_query as $logo) {
                        
                      
                      ?>


                        <div class="col-xl-2">
                            <div class="single-brand ">
                                <img  src="admin/image/logo/<?=$logo['photo']?>" alt="img" width='100'>
                            </div>
                        </div>
                      <?php 
                  } 
                } else{
                    echo "Зургаан лого шаардана";
                }
                  ?>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            
            <body class="theme-bg" style="background: linear-gradient(90deg,rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);">
                <div class="container">
                    <div class="row align-items-center">

                       
               <!-- contact information query in side view part -->
                        

                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>Мэдээлэл</span>
                                <h2>Холбоо барих мэдээлэл</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$contact_information['small_text']?></p>
                                <h5>Байршил: <span><?=$contact_information['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Хаяг :</span><?=$contact_information['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Утас :</span><?=$contact_information['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>Майл Хаяг:</span><?=$contact_information['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <!-- contact information area end -->

                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="guest_message.php" method="post">

                                  <!-- message send error  -->

                                  <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                    <div class="alert alert-danger">
                                      <?=$_SESSION['guest_message_error']?>
                                    </div>
                                  <?php }
                                  // unset error message

                                  unset($_SESSION['guest_message_error']);
                                  ?>
                                  <!-- error end -->

                                  <!-- message send success -->

                                  <?php if(isset($_SESSION['message_send'])) { ?>
                                    <div class="alert alert-success">
                                      <?=$_SESSION['message_send']?>
                                    </div>
                                  <?php }
                                  // unset success message

                                  unset($_SESSION['message_send']);
                                  ?>

                                  <!-- end alert -->

                                    <input type="text" placeholder="Нэр *" name='guest_name'>
                                    <input type="email" placeholder="Майл хаяг *" name='guest_email'>
                                    <textarea name="guest_message" id="message" placeholder="Мессеж*"></textarea>
                                    <button class="btn">Илгээх</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->
        <div class="comments"></div>

<script>
const comments_page_id = 1; // This number should be unique on every page
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>2025 Copyright© <span>Дүүрэнжаргал</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="front_end_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="front_end_assets/js/popper.min.js"></script>
        <script src="front_end_assets/js/bootstrap.min.js"></script>
        <script src="front_end_assets/js/isotope.pkgd.min.js"></script>
        <script src="front_end_assets/js/one-page-nav-min.js"></script>
        <script src="front_end_assets/js/slick.min.js"></script>
        <script src="front_end_assets/js/ajax-form.js"></script>
        <script src="front_end_assets/js/wow.min.js"></script>
        <script src="front_end_assets/js/aos.js"></script>
        <script src="front_end_assets/js/jquery.waypoints.min.js"></script>
        <script src="front_end_assets/js/jquery.counterup.min.js"></script>
        <script src="front_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="front_end_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="front_end_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="front_end_assets/js/plugins.js"></script>
        <script src="front_end_assets/js/main.js"></script>
    </body>

</html>
