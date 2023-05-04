<?php
use App\Model\Allrequests;

$db = new Allrequests('application_blog');
$details = $db->getDetails($_GET['id']);

?>



<section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="main_blog_details">
            <?php foreach ($details as $detail): ?>
                <img class="img-fluid" src="../public/img/blog/blog4.png" alt="">
                <div>
                    <a href="#"><h4><?= $detail->description ?></h4></a>
                </div>
                <div class="user_details">
                    <div class="float-left">
                      <a href="#"><?= $detail->titre ?></a>
                      <a href="#"><?= $detail->reference ?></a>
                    </div>
                    <div class="float-right mt-sm-0 mt-3">
                      <div class="media">
                        <div class="media-body">
                          <h5><?= $detail->auteur ?></h5>
                          <p>12 Dec, 2017 11:21 am</p>
                        </div>
                        <div class="d-flex">
                          <img width="42" height="42" src="../public/img/blog/user-img.png" alt="">
                        </div>
                      </div>
                    </div>
                    
                </div>
                <p><?= $detail->contenu ?> </p>
             <blockquote class="blockquote">
               <p class="mb-0">MCSE boot camps have its supporters and its detractors.</p>
             </blockquote>
               <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
               <div class="news_d_footer flex-column flex-sm-row">
                 <a href="#"><span class="align-middle mr-2"><i class="ti-heart"></i></span>like</a>
                 <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><span class="align-middle mr-2"><i class="ti-themify-favicon"></i></span>06 Commentaires</a>
                 <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-dribbble"></i></a>
                   <a href="#"><i class="fab fa-behance"></i></a>
                 </div>
               </div>
            <?php endforeach; ?>
          </div>
        </div>
    </div>
</section>

