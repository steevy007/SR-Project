$(document).ready(function() {
    $("#form-add").submit(function(e) {
        e.preventDefault();
        var adresse = $("#adresse").val();
        var ville = $("#ville").val();
        var pays = $("#pays").val();
        var cp = $("#cp").val();


        if (adresse === '' || ville === '' || pays === '' || cp === '') {
            $("#err-class").css("display", "block");
            $("#err-class").html("Veuillez Remplir correctement tous les champ");
        } else {

            $.ajax({
                type: 'post',
                url: 'http://localhost/Projet%20SR/App/Controller/addAdresse.ctrl.php',
                data: {
                    adresse: adresse,
                    ville: ville,
                    pays: pays,
                    cp: cp
                },
                success: function(reponse) {
                    var rep = reponse;

                    if (rep !== 'succes') {
                        $("#err-class").html(rep);
                        $("err-class").css("display", "block");
                        //$("#succes-class").css("display", "none");
                    } else {
                        $("#err-class").html("Adresse Inserer Avec Succes");
                        $("#err-class").css("display", "block");
                        $("#form-add")[0].reset();

                    }
                }
            });
        }

    });
});