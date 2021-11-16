const backHome = document.querySelector(".logo")

const projectBox = document.querySelector(".project_box")
const aboutBox = document.querySelector(".about_box")
const contactBox = document.querySelector(".contact_box");

const projectClick = document.querySelector(".item_1")
const aboutClick = document.querySelector(".item_2")
const contactClick = document.querySelector(".item_3")


backHome.addEventListener("click", () => {
    projectBox.style.left = "-100%";
    aboutBox.style.left = "100%";
    contactBox.style.top = "100%";
    boxClick.style.opacity = "0";
     
});

projectClick.addEventListener("click", () => {
    projectBox.style.left = "0";
    aboutBox.style.left = "100%";
    contactBox.style.top = "100%";
});

aboutClick.addEventListener("click", () => {
    aboutBox.style.left = "0";
    projectBox.style.left = "-100%";
    contactBox.style.top = "100%";
});

contactClick.addEventListener("click", () => {
    contactBox.style.top = "0";
    projectBox.style.left = "-100%";
    aboutBox.style.left = "100%";
});
