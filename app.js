const imageBlock = document.querySelector(".images");
const btnSize = document.querySelector("#size");
const btnUp = document.querySelector("#up");
const btnDown = document.querySelector("#down");
let currentImage;
let nextImage;
let previousIMAGE;

imageBlock.addEventListener("click",(e)=>{
  currentImage = e.target;
  nextImage = currentImage.nextElementSibling;
  previousIMAGE = currentImage.previousElementSibling
});

btnSize.addEventListener("click",(e)=>{
  currentImage.style.width = "400px"
  currentImage.style.height = "400px"
});

btnUp.addEventListener("click",()=>{
  if(nextImage === null){
    imageBlock.prepend(currentImage);
  }
  currentImage.before(nextImage);
  
  
})

btnDown.addEventListener("click",()=>{
  if(previousIMAGE === null){
    imageBlock.append(currentImage);
  }
  currentImage.after(previousIMAGE);
})