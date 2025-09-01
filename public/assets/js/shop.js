const sidebar = document.getElementById("sidebar");
// const sidebarToggle = document.getElementById("sidebarToggle");
// const closeBtn = document.getElementById("closeBtn");

// sidebarToggle.addEventListener("click", function () {
//   sidebar.classList.toggle("show");
// });

// closeBtn.addEventListener("click", function () {
//   sidebar.classList.remove("show");
// });
// ========================================
const headerSwitch = $(`.header-switch input[type='checkbox']`);
const optionBox = $(headerSwitch).siblings(".option-box");
function headerSwitchChange() {
  if (headerSwitch.prop("checked") == true) {
    $(optionBox).children(".option-1").removeClass("checked");
    $(optionBox).children(".option-2").addClass("checked");
  } else {
    $(optionBox).children(".option-1").addClass("checked");
    $(optionBox).children(".option-2").removeClass("checked");
  }
}

headerSwitchChange();
headerSwitch.change(function () {
  headerSwitchChange();
});
// ========================================= header 1 == default display off on size < 992

document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarNav");

  if (navbarCollapse) {
    function toggleNavbarCollapse() {
      if (window.innerWidth < 992) {
        navbarCollapse.classList.remove("show");
      } else {
        navbarCollapse.classList.add("show");
      }
    }

    // ================================ click outside sidebar on small device =========================================
    function closeNavbarOnClickOutside(event) {
      if (
        window.innerWidth < 992 &&
        !navbarCollapse.contains(event.target) &&
        navbarCollapse.classList.contains("show")
      ) {
        navbarCollapse.classList.remove("show");
      }
    }

    // Initial check
    toggleNavbarCollapse();

    // Listen to window resize
    window.addEventListener("resize", toggleNavbarCollapse);

    // Listen for clicks outside the navbar to close it
    document.addEventListener("click", closeNavbarOnClickOutside);
  }
});

// ==================================== sticky header ================================

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".header");

  if (header) {
    const stickyOffset = header.offsetTop;

    function stickyHeader() {
      if (window.pageYOffset > stickyOffset) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }

    // Initial check
    stickyHeader();

    // Listen to scroll events
    window.addEventListener("scroll", stickyHeader);
  }
});

// ======================= chekxkbox / radio active ====================================
const checkInput = $('.label-check input');

function checkChange(input) {
    const parentLabel = $(input).parents(".label-check");
    
    if (input.prop("checked")) {
        parentLabel.removeClass("checked");
    } else {
        parentLabel.addClass("checked");
    }
}

checkInput.each(function () {
    checkChange($(this));
});

checkInput.change(function () {
    checkChange($(this));
});

// =======================


