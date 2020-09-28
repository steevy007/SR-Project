<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Connect</title>
    <?php require_once('partial/_css.php') ?>
</head>

<body>
    <div class="global">
        <div class="sub-global">
            <div class="b1">
                <img src="../public/asset/images/gif1.gif" alt="">
            </div>
            <div class="b1">
                <div id="form-div">
                    <form method="POST" action="http://localhost/Projet%20SR/App/Controller/connect.crtl.php">
                        <h2>Me Connecter</h2>
                        <div class="form-item">
                            <input type="text" value="" name="code" id="code" placeholder="Code Utilisateur">
                        </div>
                        <div class="form-item">
                            <input type="password" value="" name="psw" id="psw" placeholder="Password">
                        </div>
                        <button type="submit" class="btn" id="sub" >Connecter</button>
                        <div class="alert">
                            <br>
                            <span id="err"><i id="mserror"> </i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('partial/_js.php') ?>
</body>

</html>