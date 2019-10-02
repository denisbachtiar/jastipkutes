<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
<script src="{{ asset('vendor/slick/slick.js')}}"></script>

<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("read");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Selengkapnya..."; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Tutup..."; 
    moreText.style.display = "inline";
  }
}

  $(".regularcat").slick({
        dots: true,
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 7,
        arrows: false
      });

$('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  prevArrow:"<span class='iconify left-arrow' data-icon='ion:arrow-back-circle-sharp' data-inline='false'></span>",
  nextArrow:"<span class='iconify right-arrow' data-icon='ion:arrow-forward-circle' data-inline='false' aria-label='next'></span>",
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
$(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        prevArrow:"<span class='iconify left-arrow-cat' data-icon='ion:arrow-back-circle-sharp' data-inline='false'></span>",
  nextArrow:"<span class='iconify right-arrow-cat' data-icon='ion:arrow-forward-circle' data-inline='false' aria-label='next'></span>",
      });
</script>