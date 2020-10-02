$(document).ready(function() {
    $("#form-search").submit(function(e) {
        e.preventDefault();

        function reset() {
            $("#form-search")[2].reset();
        }
        var adresse = $("#adresse0").val();
        var ville = $("#ville0").val();
        var pays = $("#pays0").val();
        var cp = $("#cp0").val();
        if (adresse === '' || ville === '' || pays === '' || cp === '') {
            $("#succes-class-1").css("display", "block");
            $("#succes-class-1").html("Veuillez Remplir correctement tous les champ");
        } else {
            $.ajax({
                type: 'post',
                url: 'http://localhost/Projet%20SR/App/Controller/searchAdresse.ctrl.php',
                data: {
                    adresse: adresse,
                    ville: ville,
                    pays: pays,
                    cp: cp
                },
                success: function(reponse) {
                    var rep = reponse;
                    if (rep !== 'succes') {
                        $("#succes-class-1").html(rep);
                        $("#succes-class-1").css("display", "block");
                    } else {
                        $("#succes-class-1").css("display", "none");
                        var adr = ville.replace(/ /g, '+') + '+' + pays.replace(/ /g, '+');
                        $("#addMap").html('<iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=' + adr +
                            '&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a>');
                        //alert(adr);
                        $("#map").css("display", "block");
                        $("#add-adresse").css("display", "none");
                        $("#search").css("display", "none");
                        $("#menu-view").css("display", "none");
                        formReset();
                        reset();

                        $("#form-search")
                        $("#err-class").css("display", "none");
                        //alert(adr);
                        /**
                         * <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Delmas+40B+Haiti+HT6120&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a>
                         */
                    }
                }
            });
        }
    });
});