// 画面高さ取得jquery
$(document).ready(function () {

    hsize = $(window).outerHeight(true);
    navheight = $("#navheight").outerHeight(true);
    main_height = $("#main_height").outerHeight(true);
    console.log(hsize);
    console.log(navheight);
    console.log(main_height);
    $("#sidebar").css("height", hsize-navheight + "px");
    // $("#main_height").css("height", hsize-navheight + "px");

  });

  $(window).resize(function () {

    hsize = $(window).height();

    $("#sidebar").css("height", hsize + "px");

  });
  // 画面高さ取得終了