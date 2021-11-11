const ArrowLeftSpanLeft = document.querySelector(".sb-left");
const ArrowLeftImg = document.querySelector(".sk-left")

const ArrowRightSpanRight = document.querySelector(".sb-right");
const ArrowRightImg = document.querySelector(".sk-right")

document.addEventListener("keydown", (e) => {
    if (e.key == "ArrowLeft"){
        ArrowLeftSpanLeft.style.transform = "translateX(0)";
        ArrowLeftImg.style.opacity = "0.5";     
    } else {
        ArrowLeftSpanLeft.style.transform = "translateX(-100vw)";
        
    };
});

document.addEventListener("keydown", (e) => {
    if (e.key == "ArrowRight"){
        ArrowRightSpanRight.style.transform = "translateX(0)";
        ArrowRightImg.style.opacity = "0.5";     
    } else {
        ArrowRightSpanRight.style.transform = "translateX(100vw)"; 
        
    };
});