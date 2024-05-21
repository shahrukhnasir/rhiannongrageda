<!-- Bootstrap CDN -->
<!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Fancybox CDN  -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
<!-- Fancybox CDN  -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<!-- AOS ANIMTAION CDN -->
<script>
  new WOW().init();
  AOS.init();
</script>
<script>
  document.querySelector('.mobile-nav-icon').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.mobile-nav').classList.toggle('active');
  });

  function showSelectedValue(selectBoxId, showSelectValueId) {
    var selectBox = document.getElementById(selectBoxId);
    var selectedValue = selectBox.value;
    console.log(selectedValue, 'slected value')
    document.getElementById(showSelectValueId).innerText = "Price: " + selectedValue;
  }
</script>

<script>
  $(document).ready(function() {
    $('.slider').slick({
      // Configuration options here
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      dots: true,
      arrows: false,
      speed: 300,
      fade: true,
      cssEase: 'linear',
      pauseOnHover: false,
      infinite: false,

    });
  });


  // Navbar active 
  document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navLinks, .mobile-nav a');
    links.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  });


  // counter script
  $(".counter").each(function() {
    var $this = $(this),
      countTo = $this.attr("data-countto");
    countDuration = parseInt($this.attr("data-duration"));
    $({
      counter: $this.text()
    }).animate({
      counter: countTo
    }, {
      duration: countDuration,
      easing: "linear",
      step: function() {
        $this.text(Math.floor(this.counter));
      },
      complete: function() {
        $this.text(this.counter);
      }
    });
  });

 function handleToggle() {
    const couponSection = document.getElementById("coupon-section");
    if (couponSection.style.display === "none" || couponSection.style.display === "") {
      couponSection.style.display = "block";
    } else {
      couponSection.style.display = "none";
    }
  }
</script>