let allSilder = document.querySelectorAll('.slider__list .slider');
let allDot = document.querySelectorAll('.dots .dot');
let maxSlider = allSilder.length;

let count = 1;

function showSliders(count) {
    for (let i = 0; i < maxSlider; i++) {
        allSilder[i].classList.remove('show');
    }
    for (let i = 0; i < maxSlider; i++) {
        allDot[i].className = allDot[i].className.replace("active", "");
    }

    allSilder[count - 1].classList.add('show');
    allDot[count - 1].classList.add('active');
}
showSliders(count);

function next() {
    count++;

    if (count > maxSlider) {
        count = 1;
    }

    showSliders(count);
}

function prev() {
    count--;

    if (count === 0) {
        count = maxSlider;
    }

    showSliders(count);
}

function autoNextSlide() {
    let autoNext = setInterval(next, 5000);

    // Check when user is hover the banner to stop the auto next 
    allSilder.forEach((slider) => {
        slider.addEventListener('mousemove', () => {
            clearInterval(autoNext);
        })

        slider.addEventListener('mouseleave', () => {
            autoNext = setInterval(next, 5000);
        })
    })
}
autoNextSlide();

allDot.forEach((dot, index) => {
    dot.addEventListener('click', function () {
        showSliders(index + 1)
    })
})