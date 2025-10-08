
const carrousel = document.querySelector('#carrousel');

function scrollearWheel(objeto, evento) {
    gsap.to(objeto, {
        scrollLeft: evento.deltaY > 0 ? "+=250" : "-=250",
        duration: 0.8,
        ease: "power2.out"
    });
}

function scrollearTouch(objeto) {
  let startX = 0;
  let endX = 0;

  objeto.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  }, { passive: false });

  objeto.addEventListener('touchend', (e) => {
    endX = e.changedTouches[0].clientX; 
    const deltaX = endX - startX; 

   
    if (Math.abs(deltaX) > 30) { 
      gsap.to(objeto, {
        scrollLeft: deltaX < 0 ? "+=250" : "-=250",
        duration: 0.8,
        ease: "power2.out"
      });
    }
  }, { passive: false });
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
    scrollearTouch(carrousel);
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
    scrollearTouch(carrouselNoticias);
}