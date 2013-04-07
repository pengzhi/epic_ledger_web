$(document).ready(function() {
    $("#part1_next").epicFormGo("#custormer_part1", "#custormer_part2", "#customers_li_2");
    $("#part2_next").epicFormGo("#custormer_part2", "#custormer_part3", "#customers_li_3");
    $("#part2_back").epicFormGo("#custormer_part2", "#custormer_part1", "#customers_li_1");
    $("#part3_next").epicFormGo("#custormer_part3", "#custormer_part4", "#customers_li_4");
    $("#part3_back").epicFormGo("#custormer_part3", "#custormer_part2", "#customers_li_2");
    $("#part4_next").epicFormGo("#custormer_part4", "#custormer_part5", "#customers_li_5");
    $("#part4_back").epicFormGo("#custormer_part4", "#custormer_part3", "#customers_li_3");
    $("#part5_back").epicFormGo("#custormer_part5", "#custormer_part4", "#customers_li_4");
    $("#tab_vendors").tooltip({
        "placement":"bottom"
    });
    $("#part5_buy").click(function(){
        window.location = 'customers_archive.php';
    });
});

jQuery.fn.epicFormGo = function( toHide, toShow, activateTab) {
    $(this).click(function(){
        $(toHide).hide();
        $(toShow).show();
        $("ul#customers_ul li").removeClass("active");
        $(activateTab).addClass("active");
    });
};
