$(document).ready(function () {
    $("#sub").click(function (e) {
        e.preventDefault();
        var code = $("#code").val();
        var psw = $("#psw").val();
        //alert(password.length);
        if (code === '' || psw === '') {
            $("#err").css("display", "block");
            $("#mserror").html("***Veuillez Remplir tout les champ");
        }


        $.ajax({
            type: 'post',
            url: 'http://localhost/Projet%20SR/App/Controller/connect.crtl.php',
            data: {
                code: code,
                psw: psw
            },
            success: function (reponse) {
                var rep = reponse;
                if (rep !== 'succes'){
            $("#err").css("display", "block");
            $("#mserror").html(rep);
        }else{
            document.location.href="http://localhost/Projet%20SR/View/Accueil.view.php";
        }
    }
       });
       
   });
});