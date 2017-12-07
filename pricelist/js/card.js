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
    $("#flip2").click(function () {
        $("#panel2").slideToggle("slow");
    });

    //   ======================== flip 3 ========================
    $("#flip3").click(function () {
        $("#panel3").slideToggle("slow");
    });

    //   ======================== flip 4 ========================
    $("#flip4").click(function () {
        $("#panel4").slideToggle("slow");
    });
});
