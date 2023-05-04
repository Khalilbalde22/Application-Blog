
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog | <?php if(!empty($titre)){
                            echo $titre;
                            }else{
                            echo 'acceuil';
                            }?></title>
    <link rel="icon" href="public/img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="../../public/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../public/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../../public/vendors/linericon/style.css">
  <link rel="stylesheet" href="../../public/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../public/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="../../public/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="/">Accueil</a></li> 
              <li class="nav-item"><a class="nav-link" href="?page=apropos">Apropos</a></li> 
              <li class="nav-item"><a class="nav-link" href="?page=articles">Articles</a></li> 
              <li class="nav-item"><a class="nav-link" href="?page=contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  
  <main class="site-main">
    
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner hero-banner--sm">
          <div class="hero-banner__content">
            <h3><?php if(!empty($description)){
                            echo $description;
                            }else{
                            echo '<h1>Bien venu dans mon blog </h1>';
                            }?></h3>
            <h1></h1>
            <h4><?= date("Y-m-d") ?></h4>
          </div>
        </div>
      </div>
    </section>
   
    




    <?php 
        echo $content;
    
    ?>


    





    <!--================ End Blog Post Area =================-->
  </main>

  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Apropos de nous</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-4 col-sm-6">
          <div class="single-footer-widget">
            <h6>Envois un mail</h6>
            <p>Reste en contact avec nous !</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action=""
                method="post" class="form-inline">

                <div class="d-flex flex-row">

                  <input class="form-control" name="EMAIL" placeholder="Enter Email" required type="email">
                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
            
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="single-footer-widget">
            <h6>Vous pouvez nous suivre </h6>
            <p>Communiquez avec nous sur les réseaux sociaux</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap" style="margin-top: -50px; ">
        <p class="footer-text m-0">         
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés | Réalisé <i class="fa fa-heart" aria-hidden="true"></i> par <a href="https://colorlib.com/" target="_blank">Khlail Balde</a>
        </p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src="public/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="public/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="public/js/jquery.ajaxchimp.min.js"></script>
  <script src="public/js/mail-script.js"></script>
  <script src="public/js/main.js"></script>
</body>

</html>



