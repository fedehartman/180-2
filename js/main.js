$(document).ready(function () {


/*--| Carga diferentes php para versión desk o mobile
-------------------------------------------------------------------------- |--*/

/*--| Header Menu
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".header-menu").load('mobile-header-menu.php');
  } else {
  $(".header-menu").load('header-menu.php');
}

/*--| Header Banner
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".banner-header").load('mobile-header-banner.php');
  } else {
  $(".banner-header").load('header-banner.php');
}

/*--| Footer Sitemap
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".sitemap").unload('mobile-footer-sitemap.php');
  } else {
  $(".sitemap").load('footer-sitemap.php');
}


/*--| Home Columnistas
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".home-columnistas-container").unload('home-columnistas.php');
  } else {
  $(".home-columnistas-container").load('home-columnistas.php');
}


/*--| Galería Listado
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".galeria-listado-container").unload('galerias-listado.php');
  } else {
  $(".galeria-listado-container").load('galerias-listado.php');
}


/*--| Columnistas Listado
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".columnistas-listado-container").unload('columnistas-listado.php');
  } else {
  $(".columnistas-listado-container").load('columnistas-listado.php');
}


/*--| Noticias Destacadas
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".noticias-destacadas-container").unload('noticias-destacadas.php');
  } else {
  $(".noticias-destacadas-container").load('noticias-destacadas.php');
}

/*--| Header Banner
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".banners-header-container").unload('banners-header.php');
  } else {
  $(".banners-header-container").load('banners-header.php');
}

/*--| Aside Banners
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".banners-side-container").unload('banners-aside.php');
  } else {
  $(".banners-side-container").load('banners-aside.php');
}

/*--| Wide Banners
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".banners-wide-container").unload('banners-wide.php');
  } else {
  $(".banners-wide-container").load('banners-wide.php');
}

/*--| Mobile Banners
--------------------------------- |--*/

if(jQuery.browser.mobile) {
  $(".banners-mobile-container").load('banners-mobile.php');
  } else {
  $(".banners-mobile-container").unload('banners-mobile.php');
}



/*--| Carousel
-------------------------------------------------------------------------- |--*/

$('.home .columnistas .listado').tinycarousel({});
$('.header-main .header-menu .menu-hover-container .menu-hover').tinycarousel({});


/*--| Menu-Items
-------------------------------------------------------------------------- |--*/

$(".header-menu .itemplus h4").click(function(e) {
  e.preventDefault();
  $(this).next('.menu-hover-container').toggleClass('none');
  return false;
  });

}); /* -document ready- */
