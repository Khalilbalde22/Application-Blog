<?php
use App\Model\Allrequests;
use App\Table\Article;

$db = new Allrequests('application_blog');
$listCategories = $db->listArticlesParCategorie($_GET['id']);

?>

<section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
          <?php foreach ($listCategories as $listCategorie):?>
            <div class="col-md-4">
              <div class="single-recent-blog-post card-view"style="justify-content:center">
                <div class="thumb">
                  <a  href="<?php echo Article::getUrlDetails().$listCategorie->id ?>"><img class="card-img rounded-0" src="../public/img/blog/thumb/thumb-card1.png" alt=""></a>

                </div>
                <div class="details mt-20">
                  <a href="<?php echo Article::getUrlDetails().$listCategorie->id ?>">
                    <h3><?= $listCategorie->titre ?></h3>
                  </a>
                  <p><?= Article::getContenu($listCategorie->contenu); ?></p>
                  <a class="button" href="<?php echo Article::getUrlDetails().$listCategorie->id ?>">lire plus ... <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>          

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

      </div>
  </section>
