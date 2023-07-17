const sliderContainer = document.querySelector('.slider-contain');
const slideRight = document.querySelector('.right-slide');
const slideLeft = document.querySelector('.left-slide');
const upButton = document.querySelector('.up-button');
const downButton = document.querySelector('.down-button');
const dots = document.querySelectorAll('.dot');
const slidesLength = slideRight.querySelectorAll('div').length;

let activeSlideIndex = 0;

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

upButton.addEventListener('click', () => changeSlide('down'));
downButton.addEventListener('click', () => changeSlide('up'));
document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowUp') {
        changeSlide('down');
    } else if (event.key === 'ArrowDown') {
        changeSlide('up');
    }
});

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        goToSlide(index);
    });
});

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight;
    if (direction === 'up') {
        activeSlideIndex++;
        if (activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0;
        }
    } else if (direction === 'down') {
        activeSlideIndex--;
        if (activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1;
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`;
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`;

    updateActiveDot();
};

const goToSlide = (index) => {
    activeSlideIndex = index;
    const sliderHeight = sliderContainer.clientHeight;

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`;
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`;

    updateActiveDot();
};

const updateActiveDot = () => {
    dots.forEach((dot, index) => {
        if (index === activeSlideIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};

sliderContainer.addEventListener('wheel', (event) => {
    event.preventDefault();
    const direction = event.deltaY > 0 ? 'down' : 'up';
    changeSlide(direction);
});

// -------------------
let menuToggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let sec = document.querySelector('.sec');
menuToggle.onclick = function () {
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
    sec.classList.toggle('active');
}