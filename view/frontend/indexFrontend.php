<?php ob_start(); ?>
    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Jean<em> Forteroche</em></h1><br/>
              <p style="font-size:4rem;">Billet simple pour l'Alaska</p>
              <p>Cliquez pour découvrir le livre.</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="public/img/frontend/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="public/img/frontend/highway-loop.mp4" type="video/mp4" />
        </video>
    </div>

     <div class="grid-portfolio" id="portfolio">
        <div class="container">

<?php 

$cpt =1;

foreach ($post as $mesPosts)
{
   $POSTtitle = $mesPosts->title();
   $POSTcontents = $mesPosts->contents();
   
?>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="index.php"><div class="hover-effect">
                            <div class="hover-content">
                                <h1><?php echo($POSTtitle); ?></h1>
                                <p><?php echo($POSTcontents); ?></p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_<?php echo($cpt)?>.png">
                        </div>
                        </a>
                    </div>
                </div>
            </div>
<?php
   $cpt++; if($cpt==7) break; 
 
}
?>

            <div class="col-md-12">
                <div class="load-more-button">
                    <a href="index.php?action=blog">Voir tous les chapitres</a>
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php");?>