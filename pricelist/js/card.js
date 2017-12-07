$(document).ready(function () {
    //   ======================== flip 1 ========================
    $("#flip1").mouseenter(function () {
        $("#cim1").css("color", "white");
    });
    $("#flip1").mouseleave(function () {
        $("#cim1").css("color", "rgba(255, 255, 255, 0.9)");
    });

    $("#flip1").click(function () {
        $("#panel1").slideToggle("slow");
        $("#flip1").css("box-shadow", "0 0 1rem 0.1rem rgba(28, 211, 255, 0.5)");
        $("#image1").hide();
        $("#video1").css("display", "block");
    });

    //   ======================== flip 2 ========================   
    $("#flip2").mouseenter(function () {
        $("#cim2").css("color", "white");
    });
    $("#flip2").mouseleave(function () {
        $("#cim2").css("color", "rgba(255, 255, 255, 0.9)");
    });

    $("#flip2").click(function () {
        $("#panel2").slideToggle("slow");
        $("#flip2").css("box-shadow", "0 0 1rem 0.1rem rgba(28, 211, 255, 0.5)");
        $("#image2").hide();
        $("#video2").css("display", "block");
    });
    //   ======================== flip 3 ========================
    $("#flip3").mouseenter(function () {
        $("#cim3").css("color", "white");
    });
    $("#flip3").mouseleave(function () {
        $("#cim3").css("color", "rgba(255, 255, 255, 0.9)");
    });

    $("#flip3").click(function () {
        $("#panel3").slideToggle("slow");
        $("#flip3").css("box-shadow", "0 0 1rem 0.1rem rgba(28, 211, 255, 0.5)");
        $("#image3").hide();
        $("#video3").css("display", "block");
    });

    //   ======================== flip 4 ========================
     $("#flip4").mouseenter(function () {
        $("#cim4").css("color", "white");
    });
    $("#flip4").mouseleave(function () {
        $("#cim4").css("color", "rgba(255, 255, 255, 0.9)");
    });

    $("#flip4").click(function () {
        $("#panel4").slideToggle("slow");
        $("#flip4").css("box-shadow", "0 0 1rem 0.1rem rgba(28, 211, 255, 0.5)");
        $("#image4").hide();
        $("#video4").css("display", "block");
    });

});
