<?php ob_start(); ?>
    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Jean<em> Forteroche</em></h1><br/>
              <p>Bienvenue sur mon blog !</p>
              <p>Cliquez pour découvrir mon dernier livre.</p>
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
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  9</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_4.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  8</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_2.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  7</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_3.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  6</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_1.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  5</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_5.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  4</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_6.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_7.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  3</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_7.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_8.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  2</em></h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_8.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="hover-effect">
                            <div class="hover-content">
                                <h1>CHAPITRE<em>  1</h1>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div></a>
                        <div class="image">
                            <img src="public/img/frontend/portfolio_item_9.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="load-more-button">
                    <a href="#">Charger plus de chapitre</a>
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php");?>