//animation navbar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav-bar").style.top = "0";
  } else {
    document.getElementById("nav-bar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

//for parallax and cards
$(document).ready(function(){
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.modal').modal();
  });

//initialize modal

//for activate carousel
$('.first.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: false,
  });

//automate carousel
setInterval(function(){
    $('.first.carousel').carousel('next');

  },3500)

//dropdown bouton for mobile
$('.dropdown-trigger').dropdown({
  coverTrigger: false,
});  

//easter egg heart chad Antoine <3
$("#heart").on('dblclick',function(){
  $("#heart-red").show()
})

//easter egg cards chad
$('.flip').on('click',function(){
  $(this).css("transform","scaleX(-1)");
  $('.flip').attr("src","img/GigaChad.jpg");
  $('.edit').attr("src","img/colonie-giga-chad.jpg")
})

//easter egg 667 ekip
$(".ekip").on('dblclick',function(){
  $('img').attr("src",'img/667.png');
})

//easter egg benibla freestyle
window.addEventListener("keydown", checkKeyPress, false);
var keys = ''; // creation de la chaine de caracteres
function checkKeyPress(key) {
    keys += event.key; // ajout des nouvelles touches
    keys = keys.substr(-7); //rafraichissement de la mémoire
 if (keys.substr(-4) === 'yeux') {
        alert("REGARDE MES YEUX, MAIS REGARDE MES YEUX ILS SONT REMPLIS DE SANG");
        window.open('https://www.youtube.com/watch?v=s5ICX8japc0', '_blank');
    }
}

//wow js initialisation
new WOW().init();


