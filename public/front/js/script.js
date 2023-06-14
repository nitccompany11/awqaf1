const navbar = document.getElementsByClassName("navbar");
const logo = document.querySelector(".navbar .navbar-brand img");

let with_AOS = document.querySelector(".with_AOS");

window.onscroll = () => {
	if (window.scrollY > 0) {
		logo.style.width = "45%";
	} else {
		logo.style.width = "75%";
	}
};

// Initialize AOS
if (with_AOS !== null) {
	AOS.init({
		disable: "mobile",
		once: true,
		duration: 600,
	});
}

window.addEventListener("load", function () {
	var spinner = document.querySelector(".my-spinner");
	spinner.style.display = "none";
});

let dropdowns = document.querySelectorAll(".dropdown");

// dropdowns.forEach(function (dropdown) {
// 	let dropdownMenu = dropdown.querySelector(".dropdown-menu");

// 	dropdown.addEventListener("mouseover", function () {
// 		dropdown.classList.add("slide-up");
// 		dropdownMenu.style.display = "block";
// 	});

// 	dropdown.addEventListener("mouseleave", function () {
// 		dropdown.classList.remove("slide-up");
// 		dropdown.classList.add("slide-down");
// 		setTimeout(function () {
// 			if (!dropdown.matches(":hover")) {
// 				dropdownMenu.style.display = "none";
// 				dropdown.classList.remove("slide-down");
// 			}
// 		}, 300);
// 	});

// 	dropdownMenu.addEventListener("mouseleave", function () {
// 		dropdown.classList.remove("slide-up");
// 		dropdown.classList.add("slide-down");
// 		setTimeout(function () {
// 			if (!dropdown.matches(":hover")) {
// 				dropdownMenu.style.display = "none";
// 				dropdown.classList.remove("slide-down");
// 			}
// 		}, 300);
// 	});
// });
