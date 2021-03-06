<?php
session_start();

if(isset($_SESSION['login']))
{
    if(isset($_POST['logoff']) && isset($_POST['deco']))
    {
      session_destroy();
    }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bikeens</title>

  <link rel="stylesheet" href="css/reset.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <!-- header -->
  <header>
    <!-- container -->
    <div class="container">
      <!-- menu -->
      <nav id="menu">
        <div>
          <a href="index.php">
            <img id="logo" src="img/logo.png" alt="logo" />
          </a>
        </div>

      <div id="nav">
        <ul id="navigation">
          <li><a href="#principe">Comment ça marche?</a></li>
          <?php
            if(!isset($_SESSION['login']))
            {
          ?>
            <li><a id="inscription" href="#">Inscription</a></li>
            <li><a id="connexion" href="#">Connexion</a></li>
          <?php
            }
            else
                {
          ?>
                  <li>
                    <a href="#" class="account">
                      <div class="profil">
                        <img src="img/icones/user.png" alt="" />
                      </div>
                      <div class="profil">
                          <?php echo $_SESSION['login']; ?>
                      </div>
                    </a>
                  </li>
                  <li>
                    <form class="" action="index.php?logoff" method="post">
                      <input type="hidden" name="deco" value="now">
                      <button id="deconnecter" type="submit" name="logoff">Se déconnecter</button>
                    </form>
                  </li>
          <?php
                }
          ?>
          <li><button id="louer" type="submit" name="louer">Louer votre vélo</button></li>
        </ul>
      </div>
      </nav>
      <!-- fin menu -->
    </div>
    <!-- fin container -->

    <!-- slide -->
    <section id="slide">
      <div class="container-titre">
        <h1 class="slide--titre">Vivez l’expérience</h1>
        <p class="slide-sous-titre">
          Louez un vélo à un particulier proche de vous
        </p>
      </div>
      <!-- fin container -->
    </section>
    <!-- fin slide -->

    <!-- search -->
    <section id="search">
      <!-- container -->
      <div class="container">
        <!-- form search -->
        <form class="" action="pdtvelo.php" method="post">
          <input class="champ-recherche" type="text" name="ouchercher" value="" placeholder="Où voulez-vous louer?">
          <select class="debut" name="">
            <option value="Début" selected>Début</option>
          </select>
          <select class="fin" name="">
            <option value="Fin" selected>Fin</option>
          </select>
          <button class="btn-search" type="submit" name="button">Rechercher</button>

        </form>
        <!-- fin form search -->
      </div>
      <!-- fin container -->
    </section>
    <!-- fin search -->

    </div>
    <!-- fin container -->
  </header>
  <!-- fin header -->

  <!-- resumBikes -->
  <section id="resumBikes">
    <!-- container -->
    <div class="container">
      <h2 class="resumBikes-titre">Sortez moi du garage!</h2>
      <p class="resumBikes-sous-titre">
        Louez un vélo à un particulier proche de vous
      </p>

      <div class="bike-contain mgt-bike">
        <article class="bike-hover">
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo1.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">TANDEM VILLE</p>
            <p class="tarif">14€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil1.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>

        <article class="bike-hover">
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo2.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">Vélo du marié</p>
            <p class="tarif">25€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil2.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>

        <article>
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo3.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">vélo bois</p>
            <p class="tarif">32€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil3.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>
      </div>
      <div class="bike-contain">
        <article>
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo4.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">V&Egrave;LO FEMME PEUGEOT</p>
            <p class="tarif">14€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil4.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin produit -->

        <article>
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo5.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">fixies mixte purfix</p>
            <p class="tarif">32€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil5.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin produit -->

        <article>
          <a href="pdtvelo.php"><img class="bike" src="img/img-location-velo/velo6.jpg" alt="" /></a>
          <div class="infos">
            <p class="ville">Montpellier</p>
            <p class="categorie">Vélo de course homme rapido</p>
            <p class="tarif">25€ <span class="tsem">/ semaine</span></p>
            <img class="img-profil" src="img/profil/profil6.png" alt="" />
            <div class="etoiles-contain">
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
              <img class="etoiles-infos" src="img/profil/etoiles.png" alt="" />
            </div>
          </div>
        </article>
      </div>

      <a href="#resumBikes"><button class="btn-voir-velo-proxi" type="button" name="button">Voir d'autres vélos à proximité</button></a>

    </div>
    <!-- fin container -->
  </section>
  <!-- fin resumBikes -->

  <!-- principe -->
  <section id="principe">
    <!-- container -->
    <div class="container">
      <h2 class="titre-ccm">Comment ça marche?</h2>
      <p class="para-ccm">
        Bikeens est le premier service de location de vélos entre particuliers en France, 100% assurés par XXX. Ensemble échangeons nos expériences et participons au développement du vélo, un mode de déplacement écologique idéal pour explorer le monde!
      </p>

      <article class="groupIcones">
        <ul class="icones">
          <li class="icones-ccm">
            <img src="img/ccm/utilise-pas-velo.png" alt="" />
            <p class="info-icon-ccm">
              Je n’utilise pas mon vélo
            </p>
          </li>
        </ul>

        <ul class="icones">
          <li class="icones-ccm">
            <img src="img/ccm/jai-une-idee.png" alt="" />
            <p class="info-icon-ccm">
              J’ai une idée
            </p>
          </li>
        </ul>

        <ul class="icones">
          <li class="icones-ccm">
            <img src="img/ccm/je-le-repare.png" alt="" />
            <p class="info-icon-ccm">
              Je le répare
            </p>
          </li>
        </ul>

        <ul class="icones">
          <li class="icones-ccm">
            <img src="img/ccm/je-loue-je-partage.png" alt="" />
            <p class="info-icon-ccm">
              Je loue / je partage
            </p>
          </li>
        </ul>
      </article>

      <button id="inscription2" class="ccm-inscription material" type="button" name="button">S'inscrire</button>
    </div>
    <!-- fin container -->
  </section>
  <!-- fin principe -->

  <!-- blog -->
  <section id="blog">
    <!-- container -->
    <div class="container">
      <h2 class="titre-blog">Le blog</h2>
      <article class="article-blog">
        <div class="left">
          <div class="blog-categorie green">
            Expérience
          </div>
          <img src="img/blog/img1.jpg" alt="" />
        </div>
        <!-- fin left -->

        <!-- right -->
        <div class="right">
          <h3 class="article-blog--titre">livraison dans l’écusson</h3>
          <p class="article-blog-texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class="btn-lire-suite">
            <a href="#"><i><img src="img/blog/voir-plus.png" alt="..." /></i> Lire la suite...</a>
          </div>
        </div>
        <!-- fin right -->
      </article>

      <article class="article-blog mgl-blog">

        <div class="left">
          <div class="blog-categorie pink">
            Partage
          </div>
          <img src="img/blog/img2.jpg" alt="" />
        </div>
        <!-- fin left -->

        <!-- right -->
        <div class="right">
          <h3 class="article-blog--titre">atelier <br> communautaire</h3>
          <p class="article-blog-texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class="btn-lire-suite">
            <a href="#"><i><img src="img/blog/voir-plus.png" alt="..." /></i> Lire la suite...</a>
          </div>
        </div>
        <!-- fin right -->
      </article>

      <article class="article-blog">

        <div class="left">
          <div class="blog-categorie blue">
            Itinéraire
          </div>
          <img src="img/blog/img3.jpg" alt="" />
        </div>
        <!-- fin left -->

        <!-- right -->
        <div class="right">
          <h3 class="article-blog--titre">dans la <br>garrigue</h3>
          <p class="article-blog-texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="btn-lire-suite">
            <a href="#"><i><img src="img/blog/voir-plus.png" alt="..." /></i> Lire la suite...</a>
          </div>
        </div>
        <!-- fin right -->
      </article>

      <article class="article-blog mgl-blog">

        <div class="left">
          <div class="blog-categorie green">
            Expérience
          </div>
          <img src="img/blog/img4.jpg" alt="" />
        </div>
        <!-- fin left -->

        <!-- right -->
        <div class="right">
          <h3 class="article-blog--titre">road trio <br>en famille</h3>
          <p class="article-blog-texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class="btn-lire-suite">
            <a href="#"><i><img src="img/blog/voir-plus.png" alt="..." /></i> Lire la suite...</a>
          </div>
        </div>
        <!-- fin right -->
      </article>

      <a href="#blog"><button class="btn-voir-velo-proxi kfk" type="button" name="button">Accéder aux articles précédents</button></a>

    </div>
    <!-- fin container -->
  </section>
  <!-- fin blog -->

  <!-- feedback -->
  <section id="feedbackHome">
    <h2 class="titre-temoignage-home">Ils parlent de leurs expériences</h2>
    <!-- container -->
    <div class="container">
      <!-- avis -->
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/mathilde.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="saumon">Mathilde M.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/vincent.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="bleu">Vincent L.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/vincent.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="vert">Vincent L.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/benjamin.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="saumon">Benjamin A.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/benjamin.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="bleu">Benjamin A.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>
      <div class="avis-container">
        <article class="avis-home">
          <div class="imgTextHome">
            <div class="imgAvisHome">
              <img src="img/temoignage/mathilde.png" alt="" />
            </div>
            <p class="text-temoignage-home">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            </p>
          </div>
          <div class="nomDateHome">
            <p class="info-temoignage">
              <strong class="vert">Mathilde M.</strong>
            </p>
            <div class="noteHome">
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
              <img src="img/icones/etoiles.png" alt="" />
            </div>
          </div>
        </article>
        <!-- fin avis -->
      </div>

    <!-- fin container -->
  </section>
  <!-- fin feedback -->

  <!-- footer -->
  <footer class="footer">
    <!-- container -->
    <div class="container">

      <!-- plan -->
      <article class="plan">
        <h6>Votre destination</h6>
        <ul>
          <li><a href="#">Montpellier</a></li>
          <li><a href="#">Toulouse</a></li>
          <li><a href="#">Nimes</a></li>
          <li><a href="#">Perpignan</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Découvrir</h6>
        <ul>
          <li><a href="#">Nos valeurs</a></li>
          <li><a href="#">Fonctionnement</a></li>
          <li><a href="#">Assurance</a></li>
          <li><a href="#">Professionnels</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Aide</h6>
        <ul>
          <li><a href="#">Aide au locataire</a></li>
          <li><a href="#">Aide au propriétaire</a></li>
          <li><a href="#">Contactez-nous</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Nous suivre</h6>
        <ul class="rsxScx">
          <li><a href="https://www.facebook.com/bikeens/?fref=ts" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
          <li><a href="https://twitter.com/Bikeens" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
        </ul>
      </article>
      <!-- fin plan -->

    </div>
    <!-- fin container -->
  </footer>
  <!-- fin footer -->

  <div id="sign" class="hide-ele">
    <div class="window">
      <div class="close-sign">
        <button id="close"><span class="fa fa-times fa-2x"></span></button>
      </div>
      <div id="sign-in">
        <form id="signin-form" action="php/signin.php" method="post">
          <div class="login">
            <input type="text" name="pseudo" value="" placeholder=" Votre pseudo">
            <input type="password" name="password" value="" placeholder=" Votre mot de passe">
          </div>
          <div class="option-sign">
            <div class="text-left">
              <label><input type="checkbox" name="remember" value="remember">Se souvenir de moi</label>
            </div>
            <div class="text-right">
              <a href="#">Mot de passe oublié ?</a>
            </div>
          </div>
          <button id="submit" type="submit" autocomplete="off">Se connecter</button>
        </form>
      </div>
      <div class="sign-error">
        Problème d'authentification côté serveur
      </div>
      <hr>
      <div id="sign-up-info">
        <div class="text-left">
          <p>Vous n'avez pas de compte?</p>
        </div>
        <div class="text-right">
          <button id="subcribe" type="button" name="button">Inscription</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="js/function.js"></script>
  <script src="js/sign.js"></script>
  <script src="material.js"></script>
</body>

</html>
