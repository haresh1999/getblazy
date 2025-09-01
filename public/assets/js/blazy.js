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