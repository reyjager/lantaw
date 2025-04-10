
import $ from 'jquery';

$(".sidebar-dropdown > a").click(function () {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
        .parent()
        .hasClass("active")
    ) {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .parent()
        .removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
      $(this)
        .parent()
        .addClass("active");
    }
  });


  $(document).on('click', '#close-sidebar', function () {
    $(".page-wrapper").removeClass("toggled");
    $("body").addClass("toggled");
    $(this).attr("id", "show-sidebar");
    });

$(document).on('click', '#show-sidebar', function () {
    $(".page-wrapper").addClass("toggled");
    $("body").removeClass("toggled");
    $(this).attr("id", "close-sidebar");
    });

