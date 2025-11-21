!function() {
    "use strict";
    var a = $(".nab-menu");
    $(document).on("click", '[data-toggle="sidebar"]', function(a) {
        a.preventDefault(),
        $(".app").toggleClass("sidenav-toggled")
    }),
    $(window).width() > 739 && $(".nabsbar").hover(function(a) {
        a.preventDefault(),
        $(".app").removeClass("sidenav-toggled")
    }),
    $(document).on("click", "[data-toggle='nabs']", function(b) {
        b.preventDefault(),
        $(this).parent().hasClass("is-expanded") || a.find("[data-toggle='nabs']").parent().removeClass("is-expanded"),
        $(this).parent().toggleClass("is-expanded")
    }),
    $("[data-toggle='tooltip']").tooltip()
}();
