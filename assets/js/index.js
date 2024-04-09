let send = document.querySelector(".send");
let close = document.querySelector(".close");
let model = document.querySelector(".model");

send.onclick = () =>{
    model.classList.add("open");
}
close.onclick = () =>{
    model.classList.remove("open");
}

// model.onclick = () => {
//     model.style.display = 'none';
// }