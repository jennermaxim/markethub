let send = document.querySelector(".send");
let close = document.querySelector(".close");
let model = document.querySelector(".model");

window.onload = function () {
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();
        // these IDs from the previous steps
        emailjs.sendForm('service_sh26x5v', 'template_x7928zo', this)
            .then(() => {
                // console.log('SUCCESS!');
                model.classList.add("open");
                this.reset();
                setTimeout(() => {
                    model.classList.remove("open");
                }, 15000);
            }, (error) => {
                console.log('FAILED...', error);
            });
    });
}

// send.onclick = () =>{
//     model.classList.add("open");
// }
close.onclick = () => {
    model.classList.remove("open");
}

// model.onclick = () => {
//     model.style.display = 'none';
// }