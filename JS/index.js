const keyAction = document.querySelector(".span-box-left");

document.addEventListener("keypress", (e) => {
    console.log(e.key);
    
    if (e.key == "a"){
        keyAction.style.transform= "translateX(0)";     
    } else {
        keyAction.style.transform= "translateX(-100vw)";   
        
    };
});