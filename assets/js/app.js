///////////////// fixed menu on scroll for desktop
if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if



// adding plus/minus icons to the accordion
$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  $('.collapse.show').each(function () {
    $(this)
      .prev('.card-header')
      .find('.fa')
      .addClass('fa-minus')
      .removeClass('fa-plus');
  });

  // Toggle plus minus icon on show hide of collapse element
  $('.collapse')
    .on('show.bs.collapse', function () {
      $(this)
        .prev('.card-header')
        .find('.fa')
        .removeClass('fa-plus')
        .addClass('fa-minus');
    })
    .on('hide.bs.collapse', function () {
      $(this)
        .prev('.card-header')
        .find('.fa')
        .removeClass('fa-minus')
        .addClass('fa-plus');
    });
});


// dropdown country select options
$("#country").countrySelect({
  defaultCountry: "gb",
});

// datepicker 
$('#sandbox-container input').datepicker({
  todayHighlight: true
});

// Lightbox
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});



//Swiper js scripts
// beach slider
    var swiper = new Swiper('#sliderMain', {
      effect: 'fade',
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
        
    },
    });

    // Homepage Slider
var swiper = new Swiper('#SliderHome', {
    slidesPerView: 3,
    spaceBetween: 10,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


// Amenities Slider
var swiper = new Swiper('#amenitiesSlider', {
    slidesPerView: 3,
    spaceBetween: 10,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

// Google maps code 

// Create the script tag, set the appropriate attributes
let map;
function initMap() {
  const myLatLng =  { lat: -4.351622, lng:  39.561217 }
  const styles = {
    default: [],
    hide: [
      {
        featureType: "poi.business",
        stylers: [{ visibility: "off" }],
      },
      {
        featureType: "transit",
        elementType: "labels.icon",
        stylers: [{ visibility: "off" }],
      },
    ],
  };
  map = new google.maps.Map(document.getElementById("map"), {
    center: myLatLng,
    zoom: 17,
  });
  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Almanara Luxury Resort",
  });
  map.setOptions({ styles: styles["hide"] });
}

// /* Set the width of the side navigation to 250px */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "600px";
//   document.getElementById("mySidenav").style.padding = " 0 30px";
//   document.getElementById('cleanUp').style.marginBottom = "120px";
//   document.getElementById("cleanUp").style.transition = "all ease-in 0.5s";
// }

// /* Set the width of the side navigation to 0 */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
//   document.getElementById("mySidenav").style.padding = "0";
//   document.getElementById('cleanUp').style.marginBottom = "0";
  
// }