<?php

use App\Model\Allrequests;
use App\Table\Article;

// $config= App\Config::getInstance()->get('db_user');
// var_dump($config);

$db = new Allrequests('application_blog');

$listArticles = $db->listArticles();
$listCategorie = $db->listCategories();
$listDernierArticle = $db->listDernierArticles();
?>

<!--================ Blog slider start =================-->  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
        <?php foreach ($listArticles as $article): ?>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="../public/img/blog/blog3.png" alt="">
             
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="<?php echo Article::getUrlDetails().$article->id ?>"><?= $article->titre ?></a>
              <h3><a href="<?php echo Article::getUrlDetails().$article->id ?>"> <?= $article->description; ?> </a></h3>
              <p><?= $article->date ?></p>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  
    <!-- les article de la page d'accueil -->
    <div class="col-lg-12" style="text-align:center">
      <section class="blog-post-area section-margin" style="margin-left:300px;">
        <div class="container">
          <div class="row">
            <?php foreach ($listArticles as $article):?>
            <div class="col-md-8">
                <div class="single-recent-blog-post">
                    <div class="thumb" >
                        <a href="<?php echo Article::getUrlDetails().$article->id ?>"><img class="img-fluid" src="../public/img/blog/blog2.png" alt=""></a>
                        <ul class="thumb-info" style="width:280px; ">
                          <li style="margin-left:0px"><a href="#"><i class="ti-user"></i><?=$article->auteur ?></a></li>
                          <li style="margin-left:30px; margin-right:-30"><a href="#"><i class="ti-notepad"></i><?= $article->date ?></a></li>
                        </ul>
                    </div>
                  <div class="details mt-20">
                    <a href="<?php echo Article::getUrlDetails().$article->id ?>">
                      <h3><?= $article->description ?></h3>
                    </a>
                    <p class="tag-list-inline">Categories: <a href="#"><?= $article->reference ?></a>, <a href="#">technology</a>, <a href="#"><?= $article->titre ?></a></p>
                    <p><?= Article::getContenu($article->contenu) ?></p>
                    <a class="button"href="<?php echo Article::getUrlDetails().$article->id ?>">Plus <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- Start Blog Post Siddebar -->
        <div class="col-lg-4 sidebar-widgets" style="margin-top:-2250px">
            <div class="widget-wrap">
              <div class="single-sidebar-widget newsletter-widget">
                <h4 class="single-sidebar-widget__title">Restez en contact</h4>
                <div class="form-group mt-30">
                  <div class="col-autos">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Entrer votre email" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Entrer votre email'">
                  </div>
                </div>
                <button class="bbtns d-block mt-20 w-100">Envoyer</button>
              </div>


              <div class="single-sidebar-widget post-category-widget">
                <h4 class="single-sidebar-widget__title">Catgories</h4>
                <ul class="cat-list mt-20">
                <?php foreach ($listCategorie as $categorie) :  ?>
                  <li>
                    <a href="<?php echo Article::getUrlCategorie().$categorie->id ?>" class="d-flex justify-content-between">
                      <p><?= $categorie->reference ?></p>
                      <p>(03)</p>
                    </a>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div>

              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="single-sidebar-widget__title">les resents posts</h4>
                <div class="popular-post-list">
                  <div class="single-post-list">
                  <?php foreach ($listDernierArticle as $article): ?>
                    <div class="thumb">
                      <img class="card-img rounded-0" src="../public/img/blog/thumb/thumb1.png" alt="">
                      <ul class="thumb-info">
                        <li><a href="#"><?= $article->titre ?></a></li>
                      </ul>
                    </div>
                    <div class="details mt-20">
                      <a href="<?php echo Article::getUrlDetails().$article->id ?>">
                        <h6><?= $article->description ?></h6>
                      </a>
                    </div>
                  <?php endforeach ; ?>
                  </div>

                </div>
              </div>

              </div>
            </div>
          </div>
        <!-- End Blog Post Siddebar -->
          </div>
        </div>
      </section>
        <div class="row">
          <div class="col-lg-12">
              <nav class="blog-pagination justify-content-center d-flex">
                  <ul class="pagination">
                      <li class="page-item">
                          <a href="#" class="page-link" aria-label="Previous">
                              <span aria-hidden="true">
                                  <i class="ti-angle-left"></i>
                              </span>
                          </a>
                      </li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item">
                          <a href="#" class="page-link" aria-label="Next">
                              <span aria-hidden="true">
                                  <i class="ti-angle-right"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </nav>
          </div>
        </div>
    </div>
