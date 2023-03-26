document.addEventListener('DOMContentLoaded', function(){
  if ( $(window).width() > 739) {
    //set equalize height
    $('.equalize').equalize();
  }

  function isIE() {
    var ua = window.navigator.userAgent; //Check the userAgent property of the window.navigator object
    var msie = ua.indexOf('MSIE '); // IE 10 or older
    var trident = ua.indexOf('Trident/'); //IE 11

    return (msie > 0 || trident > 0);
  }
  var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  var timer = isChrome ? 500: 1000
  isIE()? timer = 2000: null;
  setTimeout(function(){
    if(localStorage.getItem("header") !== null){
      var insertHeader = localStorage.header;
      $('.added-element-header').html(insertHeader);
    }
    else{
      location.reload();
    }
  },timer)

}, false);
