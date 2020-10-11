
    <?php

    use App\Model\Adresse;

    $adresse = new Adresse([
        'id' => 0,
        'id_user' => 0,
        'adresse' => '',
        'ville' => '',
        'pays' => '',
        'codePostal' => ''
    ]);
    ?>
    <div>
        <h3>Nombre Adresses</h3>
        <p>
            <span class="icone"><img src="../Public/asset/icones/icons8_User_Account_64px.png" alt=""></span><span class="number"><?= $adresse->getNumberAdresse() ?></span>
        </p>
    </div>
    <div>
        <h3>Nombre Utilisateurs</h3>
        <p>
            <span class="icone"><img src="../Public/asset/icones/icons8_Place_Marker_64px_1.png" alt=""></span><span class="number"><?= $adresse->getNumberUser() ?></span>
        </p>

    </div>
<