const hero = document.getElementById('hero');

// Array of images
const images = [
     "../Images/nepathya.jpg",
    "../Images/theedgeband.jpg",
    "../Images/monkeyTemple.jpg",
    "../Images/sabinrai.jpg",
    "../Images/rockhead.jpg",
    "../Images/Albatross.jpg","../Images/Hero_Image_Temp3.jpg"
];

let index = 0;


hero.style.backgroundImage = `url("${images[index]}")`;

// RIGHT BUTTON – Next image
document.getElementById('right').addEventListener("click", () => {
    index = (index + 1) % images.length; 
    hero.style.backgroundImage = `url("${images[index]}")`;
});

// LEFT BUTTON – Previous image
document.getElementById('left').addEventListener("click", () => {
    index = (index - 1 + images.length) % images.length; 
    hero.style.backgroundImage = `url("${images[index]}")`;
});
