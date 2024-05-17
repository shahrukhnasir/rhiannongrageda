// mobile nav
const closeNav = document.querySelector(".close__nav");
const hamburger = document.querySelector(".hamburger__wrapp");
const navBar = document.querySelector(".mobile__nav");

hamburger.addEventListener("click", () => {
  navBar.style.right = 0;
});
closeNav.addEventListener("click", () => {
  navBar.style.right = "-100%";
});
// mobile nav

// homepaeg video togglers
const vidActionToggler = document.querySelector(".video-play-icon");
const homeVid = document.querySelector(".video-div video");
const homeVidIco = document.querySelector(".video-play-icon i");

vidActionToggler?.addEventListener("click", () => {
  if (homeVid.paused) {
    homeVid.play();
    homeVidIco.classList.remove("fa-play");
    homeVidIco.classList.add("fa-pause");
  } else {
    homeVid.pause(); // Corrected variable name
    homeVidIco.classList.add("fa-play");
    homeVidIco.classList.remove("fa-pause");
  }
});
// homepaeg video togglers

// toggler for video
const vidAction = document.querySelector(".vid__actions");
const vidIco = document.querySelector(".vid__actions i");
const vidText = document.querySelector(".vid__actions p");
const vidElem = document.querySelector(".full__vid");

// console.log(vidIco.classList.remove('fa-play'))
vidAction?.addEventListener("click", () => {
  if (vidElem.paused) {
    vidElem.play();
    vidIco.classList.remove("fa-play");
    vidIco.classList.add("fa-pause");
    vidText.innerHTML = "P A U S E V I D E O";
  } else {
    vidElem.pause();
    vidIco.classList.add("fa-play");
    vidIco.classList.remove("fa-pause");
    vidText.innerHTML = "P L A Y V I D E O";
  }
});
// vidElem.onwaiting = function () {
//   console.log("logind");
// };

// Size detector
const vidWrapper = document.querySelector(".vid__text-wrapp");
if (vidWrapper) {
  function screenDetector() {
    if (window.innerWidth <= 575) {
      vidWrapper.classList.remove("position-absolute");
    } else {
      vidWrapper.classList.add("position-absolute");
    }
  }
  screenDetector();
  window?.addEventListener("resize", screenDetector);
}

// step form
const stepBoxes = document.querySelectorAll(".step-body.active .box");
const stepcontainer = document.querySelectorAll(".step-container .step");
if (stepBoxes) {
  document.addEventListener("DOMContentLoaded", function () {
    stepBoxes.forEach(function (box) {
      box.addEventListener("click", function () {
        nextStep();
      });
    });

    var lastStep = document.querySelector(".step-body:last-child");
    lastStep.addEventListener("submit", function (event) {
      event.preventDefault();
      var lastStep = document.querySelector(".step.active");
      // lastStep.innerHTML += '<span class="check-mark">&#10003;</span>';
      var progress = document.querySelector(".progress");
      progress.style.width = "100%";
    });
  });

  // function nextStep() {
  //   var currentStep = document.querySelector(".step.active");
  //   var nextStep = currentStep.nextElementSibling;
  //   var currentStepBody = document.querySelector(".step-body.active");
  //   var nextStepBody = currentStepBody.nextElementSibling;

  //   if (nextStep !== null) {
  //     currentStep.classList.remove("active");
  //     nextStep.classList.add("active");
  //     currentStepBody.classList.remove("active");
  //     nextStepBody.classList.add("active");

  //     var progress = document.querySelector(".progress");
  //     // console.log(progress)
  //     var stepWidth = 100 / document.querySelectorAll(".step").length;
  //     console.log(stepWidth)
  //     var currentStepIndex = Array.from(
  //       document.querySelectorAll(".step")
  //     ).indexOf(nextStep);
  //     progress.style.width = (stepWidth * (currentStepIndex + 1) - 2.3)+ "%";
  //   }
  // }
  function nextStep() {
    var currentStep = document.querySelector(".step.active");
    var nextStep = currentStep.nextElementSibling;
    var currentStepBody = document.querySelector(".step-body.active");
    var nextStepBody = currentStepBody.nextElementSibling;

    if (nextStep !== null) {
      currentStep.classList.remove("active");
      nextStep.classList.add("active");
      currentStepBody.classList.remove("active");
      nextStepBody.classList.add("active");

      var progress = document.querySelector(".progress");
      var steps = document.querySelectorAll(".step");
      var stepWidth = 100 / steps.length;
      var currentStepIndex = Array.from(steps).indexOf(nextStep);

      if (currentStepIndex === 2) {
        // Third step
        progress.style.width = stepWidth * (currentStepIndex + 1) - 2.3 + "%";
      } else if (currentStepIndex === steps.length - 1) {
        // Last step
        progress.style.width = stepWidth * (currentStepIndex + 1) + "%";
      } else {
        progress.style.width = stepWidth * (currentStepIndex + 1) + "%";
      }
    }
  }
}

const packages = document.querySelectorAll(".package__box");
const selectedService = document.querySelectorAll(".select__service");
const selectedLocation = document.querySelectorAll(".location__card ");
const progressInfo = JSON.parse(localStorage.getItem("progressInfo")) || [];
const progressItems = [];
packages.forEach((item, i) => {
  item.querySelector("button").addEventListener("click", () => {
    let packageInfo = {
      infoOne: item.querySelector(".package__title").innerHTML,
      infoTwo: item.querySelector(".package__price").innerHTML,
      infoThree: item.querySelector(".package__duration").innerHTML,
    };
    // progressItems.push(packageInfo);
    localStorage.setItem("progressInfo", JSON.stringify(packageInfo));
    // updateUI(progressItems)
  });
});

progressItems.push(progressInfo);
updateUI(progressItems);

// Second Step - Now getting the elements of services and storing it in progressInfo Array
selectedService.forEach((item, i) => {
  item.querySelector(".selection__tool").addEventListener("click", () => {
    let selectedServiceInfo = {
      infoOne: item.querySelector(".selection__img img").src,
      infoTwo: item.querySelector(".selection__contnet h5").innerHTML,
      infoThree: item.querySelector(".selection__contnet p").innerHTML,
    };
    progressItems.push(selectedServiceInfo);
    updateUI(progressItems);
  });
});

// Third Step
selectedLocation.forEach((item, i) => {
  item.querySelector(".selection__tool").addEventListener("click", () => {
    let selectedLocationInfo = {
      infoOne: item.querySelector(".location__img img").src,
      infoTwo: item.querySelector(".service__info  h5").innerHTML,
      infoThree: item.querySelector(".service__info  p").innerHTML,
    };
    progressItems.push(selectedLocationInfo);
    updateUI(progressItems);
  });
});

function updateUI(progressItems) {
  progressItems?.forEach((item, index) => {
    // let adjustedIndex = index + 1;
    if (stepcontainer[index]) {
      let selectedItem;
      if (isValidURL(item.infoOne)) {
        selectedItem = `
          <div class='selected__wrapp light__bg p-2 d-flex gap-2 align-items-center mt-3 flex-lg-row flex-column'>
            <img src="${item.infoOne}" alt="Package Image" class="selected-image">
            <div class="text__content text-center text-lg-start">
              <h4 class="level-7 color__light sec__bold_font package__price">${item?.infoTwo}</h4>
              <p class="color__light sec__regular_font package__duration m-0 level-8">${item?.infoThree}</p>
            </div>
          </div>
        `;
      } else {
        selectedItem = `
          <div class='selected__wrapp light__bg p-2 mt-3' >
            <p class="level-8 package__title sec__bold_font color__light mx-auto mx-lg-0">${item.infoOne}</p>
            <div class="d-flex flex-lg-row flex-column align-items-center gap-2 align-items-end">
              <h4 class="level-7 color__light sec__bold_font package__price mb-lg-2 m-0">${item?.infoTwo}</h4>
              <p class="color__light sec__regular_font package__duration m-0 level-8 mb-lg-2 m-0">${item?.infoThree}</p>
            </div>
          </div>
        `;
      }
      stepcontainer[index].innerHTML += selectedItem;
    }

    function isValidURL(string) {
      try {
        new URL(string);
        return true;
      } catch (_) {
        return false;
      }
    }
  });
}

// Packages slider
$(".packages__slider").slick({
  dots: false,
  infinite: false,
  arrows: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
// Packages slider

// Packages slider
$(".reviews-sldier").slick({
  dots: false,
  infinite: false,
  arrows: false,
  // speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  loop: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      },
    },
  ],
});
// Packages slider

// Show Modal on payment button
// $(document).ready(function () {
//   $(".paymentBtn").click(function () {
//     $("#successModal").modal("show");
//   });
// });
// // $(document).ready(function () {
// //   $(".successBtn").click(function () {
// //     $("#paymentModal").modal("show");
// //   });
// // });
