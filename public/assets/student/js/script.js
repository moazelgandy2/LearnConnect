const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

document.addEventListener('DOMContentLoaded', function() {
    const currentUrl = window.location.href;

    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    sidebarLinks.forEach(link => {
        const linkUrl = link.querySelector('a').href;

        if (currentUrl === linkUrl) {
            link.classList.add('active');
        }
    });
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

// Function to toggle dark mode
function toggleDarkMode(enabled) {
  if (enabled) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
}

// Check if the user's preference is stored
const darkModePreference = localStorage.getItem("darkMode");

if (darkModePreference === "true") {
  switchMode.checked = true;
  toggleDarkMode(true);
}

// Add event listener for switch change
switchMode.addEventListener("change", function () {
  const darkModeEnabled = this.checked;
  toggleDarkMode(darkModeEnabled);

  // Store the user's preference
  localStorage.setItem("darkMode", darkModeEnabled);
});

