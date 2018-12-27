<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jean Forteroche</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="public/css/frontend/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/frontend/bootstrap-theme.min.css">
        <link rel="stylesheet" href="public/css/frontend/fontAwesome.css">
        <link rel="stylesheet" href="public/css/frontend/light-box.css">
        <link rel="stylesheet" href="public/css/frontend/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- <script src="public/js/frontend/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
    </head>

<body>

    <nav id="header">
        <div class="logo"><a href="index.php">Jean<em> Forteroche</em></a></div>
      <div id="menu">
        <div id="navDesktop">
          <ul id="menuNav">
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="index.php?action=author">L'auteur</a>
                </li>
                <li>
                    <a href="index.php?action=blog">Le livre</a>
                </li>
                <li>
                    <a id="modBtn">Contact</a>
                </li>
                <li>
                    <a href="index.php?action=login">Se connecter</a>
                </li>
          </ul>
        </div>
      </div>
      <div id="menu-rwd" class="menu-icon"><span></span></div>
    </nav>

 {% block content %}{% endblock %}

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2018 JEAN FORTEROCHE | <a href="index.php?action=mentionlegales" style="color:white">Mentions Légales</a> | Réalisation du site : <a href="https://loanngoerger.com" style="color:white">Loann GOERGER</a></p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> -->

    <script src="public/js/frontend/vendor/bootstrap.min.js"></script>
    <!-- <script src="public/js/frontend/plugins.js"></script> -->
    <script src="public/js/frontend/main.js"></script>



    <!-- Modal button -->
    <!-- <div class="popup-icon">
      <button id="modBtn2" class="modal-btn"><img src="public/img/frontend/contact-icon.png" alt=""></button>
    </div>   -->

<!-- Modal -->
<div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Contacter <em>moi !</em></h3>
          <div class="close-btn"><img src="public/img/frontend/close_contact.png" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="#" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Votre nom..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Votre email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <!-- <fieldset> -->
                        <button type="submit" id="form-submit" class="btn">Envoyer votre message</button>
                      <!-- </fieldset> -->
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.php">Accueil</a>
                  </li>
                  <li>
                      <a href="index.php?action=author">L'auteur</a>
                  </li>
                  <li>
                      <a href="index.php?action=blog">Le livre</a>
                  </li>
                  <li>
                      <a href="index.php?action=contact">Contact</a>
                  </li>
                  <li>
                      <a href="index.php?action=login">Se connecter</a>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>