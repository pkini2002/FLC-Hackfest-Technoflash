let input=document.getElementById("att");
let imgname=document.getElementById("imgname")
input.addEventListener("change", ()=>{
    let inputImage=document.querySelector("input[type=file]").files[0];
    imgname.innerText=inputImage.name;
})

let input2=document.getElementById("att2");
let imgname2=document.getElementById("imgname2")
input2.addEventListener("change", ()=>{
    let inputImage2=document.querySelector("input[type=file]").files[0];
    imgname2.innerText=inputImage2.name;
})

let input3=document.getElementById("att3");
let imgname3=document.getElementById("imgname")
input3.addEventListener("change", ()=>{
    let inputImage3=document.querySelector("input[type=file]").files[0];
    imgname3.innerText=inputImage3.name;
})