$(document).ready(function () {
    $("#video1").hide;
    $("#flip1").click(function () {
        $("#image1").hide;
        $("#video1").show;
        $("#panel1").slideToggle("slow");
    $("#flip2").click(function () {
        $("#panel2").slideToggle("slow");
    });
    $("#flip3").click(function () {
        $("#panel3").slideToggle("slow");
    });
    $("#flip4").click(function () {
        $("#panel4").slideToggle("slow");
    });
});
