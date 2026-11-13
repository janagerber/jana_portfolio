
/* --- Overview Film Projects --- */
document.querySelectorAll('[data-module="overview_film_projects"]').forEach((module) => {
    const slides = module.querySelectorAll('.project-slide');
    const nextBtn = module.querySelector('.slider-next');
    let currentIndex = 0;

    if (nextBtn && slides.length > 1) {
        nextBtn.addEventListener('click', () => {
            slides[currentIndex].classList.remove('is-active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('is-active');
        });
    }
});

document.querySelectorAll('[data-module="overview_film_projects"]').forEach((module) => {
    const slides = module.querySelectorAll('.project-slide');
    const nextBtn = module.querySelector('.slider-next');
    let currentIndex = 0;

    if (nextBtn && slides.length > 1) {
        nextBtn.addEventListener('click', () => {
            slides[currentIndex].classList.remove('is-active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('is-active');
        });
    }
});
