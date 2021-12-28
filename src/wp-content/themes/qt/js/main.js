//this is the main entry point for theme js scripts
// import all js files here so they can be all bundled in one minified js file
jQuery(function ($) {
  // init Isotope
  var $projects = $(".projects").isotope({
    itemSelector: ".project",
    layoutMode: "fitRows",
  });
  $(".filter-btn").click(function () {
    var data_filter = $(this).attr("data-filter");
    $projects.isotope({
      filter: data_filter,
    });
    $(".filter-btn").removeClass("active");
    $(".filter-btn").removeClass("shadow");
    $(this).addClass("active");
    $(this).addClass("shadow");
    return false;
  });

  //footer menu
  $("ul#menu-2 > li").addClass("pb-2");
  $("ul#menu-2 > li > a")
    .before('<i class="bx-fw bx bxs-chevron-right bx-xs"></i>')
    .addClass("text-decoration-none text-light py-1");
});
