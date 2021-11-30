
const mobileScreen = window.matchMedia("(max-width: 990px )");
console.log(mobileScreen)
$(document).ready(function () {
    if(mobileScreen.matches){
        $(".menu-toggle i").show();
        $(".close").hide();
    }
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(".dashboard-nav-dropdown-toggle").hide();
        $(".close").show();
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".close").click(function(){
        $(".dashboard-nav-dropdown-toggle").show();
        $(".menu-toggle i").show();
        $(".close").hide();
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
            
    });


    $(".menu-toggle").click(function () {
        $(".menu-toggle i").hide();
        $(".close").show();
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});