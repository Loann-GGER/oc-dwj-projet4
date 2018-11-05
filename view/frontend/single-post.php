<?php ob_start(); ?>
<div class="blog-entries">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-blog-post">
                            <img src="public/img/frontend/blog_post_1.png" alt="" style="height:50%;width:50%;margin-top:30px;">
                            <div class="text-content">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <span><a href="#">JEAN FORTEROCHE</a> / <a href="#">16 Septembre 2018</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique arcu nulla, vitae malesuada diam cursus quis. Donec sit amet consequat magna, nec egestas lectus. Nam a egestas justo, quis dictum lectus. Sed ultricies condimentum efficitur. Nam scelerisque placerat nibh, ullamcorper tincidunt eros iaculis eget. Nulla purus purus, vestibulum eu dui non, varius ultrices dui. Proin ultrices, risus ac rutrum tempus, erat augue aliquet enim, sed consectetur elit dolor eu dolor.
                                <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique arcu nulla, vitae malesuada diam cursus quis. Donec sit amet consequat magna, nec egestas lectus. Nam a egestas justo, quis dictum lectus. Sed ultricies condimentum efficitur. Nam scelerisque placerat nibh, ullamcorper tincidunt eros iaculis eget. Nulla purus purus, vestibulum eu dui non, varius ultrices dui.
                                
                                <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique arcu nulla, vitae malesuada diam cursus quis. Donec sit amet consequat magna, nec egestas lectus. Nam a egestas justo, quis dictum lectus. Sed ultricies condimentum efficitur.
                                <br><br><a href="#">Retour au Blog</a></p>
                                <div class="tags-share">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="tags">
                                                <li>Tags:</li>
                                                <li><a href="#">vie</a>,</li>
                                                <li><a href="#">nature</a>,</li>
                                                <li><a href="#">vie est belle</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="share">
                                                <li>Partager:</li>
                                                <li><a href="#">facebook</a>,</li>
                                                <li><a href="#">twitter</a>,</li>
                                                <li><a href="#">instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php");?>