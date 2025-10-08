


// const videoHome = document.querySelector('#videoHome');

// // const firstMouseImage = document.querySelector('#firstImg');


// // let startRedial = 30;




// window.onscroll = function()  {

//     videoHomeMannager();
//     // firstMouseImageMannager();

// }


// function videoHomeMannager() {
//     const spects = videoHome.getBoundingClientRect();
//     const negativeHeight = spects.height * -1;
//     if(negativeHeight > spects.y) {
//         videoHome.pause();
//     } else {
//         videoHome.play();
//     }
// }


// // function firstMouseImageMannager() {
// //     if(startRedial < 80) {
// //         startRedial += 0.1;
// //     }
// //     firstMouseImage.style.background = `radial-gradient(circle at center, rgba(66, 10, 62, 0.699), black ${startRedial}%)`;

// // }

// // TOOLTIPS

// const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=tooltip]')
// const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


const carrousel = document.querySelector('#carrousel');

function scrollearWheel(objeto, evento) {
    gsap.to(objeto, {
    scrollLeft: evento.deltaY > 0 ? "+=250" : "-=250",
    duration: 0.8,
    ease: "power2.out"
});
}

function scrollear(objeto) {
    if (carrousel.scrollLeft === 5700) {
        carrousel.scrollLeft = 0;
    }
    carrousel.scrollBy({
        left: 150,
        behavior: "smooth"
    })
}

if(carrousel) {
    carrousel.addEventListener('wheel', (evento) => {
    evento.preventDefault();
    console.log(evento.deltaY);

    scrollearWheel(carrousel, evento);
}, { passive: false });

}

const carrouselNoticias = document.querySelector('#carrouselNoticias');


const atras = document.querySelector('#atras');
const siguiente = document.querySelector('#siguiente');


if(carrouselNoticias) {
    carrouselNoticias.scrollLeft = 500;
    carrouselNoticias.addEventListener('wheel', (evento) => {
        evento.preventDefault();

        scrollearWheel(carrouselNoticias, evento)
    }, { passive: false });
}