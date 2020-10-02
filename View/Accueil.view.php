<?php
session_start();
if (!isset($_SESSION['identifiant']) and $_SESSION['identifiant'] == '') {
    header(('Location:Home.view.php'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Dashboard Application</title>
    <?php require_once('partial/_css.php') ?>
</head>

<body>
    <div class="menu">
        <div class="menupart">
            <div id="part1">
                <h2>SR2020 <a href="" class="menu-i" id="menu-i"><i><img src="../public/asset/icones/icons8_Menu_28px.png" alt=""></i></a></h2>

            </div>

            <div id="part3">

                <a href="../App/Controller/disconnect.crtl.php" id="disconnect" class="btn-dec">Deconnexion</a>
            </div>
        </div>

        <div class="menu-view" id="menu-view">
            <div class="close">
                <a href="" id="close"><i><img src="../public/asset/icones/icons8_Cancel_24px.png" alt=""></i></a>
            </div>
            <div class="bd-v">
                <h2>SR2020</h2>
                <ul>
                    <li><a href="" id="l-add">Ajouter Adresse</a></li>
                    <li><a href="" id="l-search">Rechercher Adresse</a></li>
                    <li><a href="" id="l-map">Map</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="corp">
        <div id="map">
            <h2>Google Map Visionnage</h2>
            
            <div class="mapouter" id="mrouter">
                
                <div class="gmap_canvas" id="addMap">
               <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Haiti&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a> </div>
            </div>
        </div>
        <div id="add-adresse">
            <form method="post" id="form-add">
                <h2>Ajouter Une Adresse</h2>
                <div class="form-item">
                    <input type="text" name="adresse" id="adresse" placeholder="Saisir L'adresse">
                </div>
                <div class="form-item">
                    <input type="text" name="ville" id="ville" placeholder="Saisir la ville">
                </div>
                <div class="form-item">
                    <input type="text" name="pays" id="pays" placeholder="Saisir le pays">
                </div>
                <div class="form-item">
                    <input type="text" name="cp" id="cp" placeholder="Saisir le code postal">
                </div>
                <div class="err-class" id="err-class">
                   
                </div>
               
                <button type="submit"  id="sub-add"  class="btn" >Ajouter</button>
                
                <div class="alert">
                    <br>
                    <span id="err"><i id="mserror"> </i></span>
                </div>
            </form>
        </div>
        <div id="search">
            <form method="post" id="form-search">
                <h2>Rechercher Une Adresse</h2>
                <div class="form-item">
                    <input type="text" name="adresse" id="adresse0" placeholder="Saisir L'adresse">
                </div>
                <div class="form-item">
                    <input type="text" name="ville" id="ville0" placeholder="Saisir la ville">
                </div>
                <div class="form-item">
                    <input type="text" name="pays" id="pays0" placeholder="Saisir le pays">
                </div>
                <div class="form-item">
                    <input type="text" name="cp" id="cp0" placeholder="Saisir le code postal">
                </div>
                <div class="err-class" id="succes-class-1">
                   
                </div>
                <button type="submit" class="btn-new" id="sub-search">Rechercher</button>
                <div class="alert">
                    <br>
                    <span id="err"><i id="mserror"> </i></span>
                </div>
            </form>
        </div>
    </div>

    <?php require_once('partial/_js.php') ?>
</body>

</html>