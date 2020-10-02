$(document).ready(function() {
    var close = document.getElementById("close");
    var menuI = document.getElementById("menu-i");
    close.addEventListener("click", function(e) {
        e.preventDefault();
        $("#menu-view").css("display", "none");
    });

    menuI.addEventListener("click", function(e) {
        e.preventDefault();
        $("#menu-view").css("display", "block");
    });

    $("#l-add").click(function(e) {
        e.preventDefault();
        $("#map").css("display", "none");
        $("#add-adresse").css("display", "block");
        $("#search").css("display", "none");
        $("#menu-view").css("display", "none");
        $("#form-search")[0].reset();
        $("#succes-class-1").css("display", "none");
    });

    $("#l-search").click(function(e) {
        e.preventDefault();
        $("#map").css("display", "none");
        $("#add-adresse").css("display", "none");
        $("#search").css("display", "block");
        $("#menu-view").css("display", "none");
        formReset();
        $("#form-add")[0].reset();
        $("#err-class").css("display", "none");
        $("#succes-class-1").css("display", "none");

    });


    function formReset() {
        $("#form-search")[0].reset();

    }

    $("#l-map").click(function(e) {
        e.preventDefault();
        $("#addMap").html('<iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Haiti&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a>');

        $("#map").css("display", "block");
        $("#add-adresse").css("display", "none");
        $("#search").css("display", "none");
        $("#menu-view").css("display", "none");
        formReset();
        $("#form-add")[0].reset();
        $("#err-class").css("display", "none");
        $("#succes-class-1").css("display", "none");
    });

});