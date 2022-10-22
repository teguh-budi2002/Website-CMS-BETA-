sideTombol = document.querySelector('.tombol-side');
sidebar = document.querySelector('.sidebar');
menuItem = document.querySelector('.menu-item');
logoNav = document.querySelector('.logo-nav');
tombolGelap = document.querySelector('.gelap-mode');
switchIcon = document.querySelector('.switch-icon');
const label = document.querySelector(".label-mode");
// sidebar open
sideTombol.addEventListener('click', function () {
    sidebar.classList.toggle('show');
    sideTombol.classList.toggle('muter');
    menuItem.classList.toggle('menu-toggle');
    logoNav.classList.toggle('logo-toggle');
    tombolGelap.classList.toggle('tombol-dark');
    switchIcon.classList.toggle('open-switch');
    label.classList.toggle('open-label');
});

//   setting darkmode
const darkMode = () => {
    const body = document.querySelector("html");
    const systemDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
    const checkbox = document.querySelector("#ganti");
    let theme = window.localStorage.getItem("theme");
    let preference;
    const findSystemPreference = () => {
        if (systemDarkMode.matches) {
            preference = "dark";
        } else {
            preference = "light";
        }
    };
    const setUserPreference = e => {
        if (e.target.checked == true) {
            preference = "dark";
            window.localStorage.setItem("theme", "dark");
        } else if (e.target.checked == false) {
            preference = "light";
            window.localStorage.setItem("theme", "light");
        }
        setTheme(preference);
    };
    const setTheme = pref => {
        if (pref === "dark") {
            checkbox.checked = true;
            label.textContent = "Dark Mode";
            body.classList.add("dark");
        } else {
            body.classList.remove("dark");
            label.textContent = "Light Mode";
            checkbox.checked = false;
        }
    };
    const loadInitialState = () => {
        if (theme === "dark") {
            checkbox.checked = true;
            label.textContent = "Dark Mode";
            body.classList.add("dark");
        } else {
            body.classList.remove("dark");
            label.textContent = "Light Mode";
            checkbox.checked = false;
        }
    };
    checkbox.addEventListener("click", setUserPreference);
    window.addEventListener("DOMContentLoaded", findSystemPreference);
    window.addEventListener("DOMContentLoaded", loadInitialState);
};
darkMode();