const form = document.getElementById('quizForm');
const fieldsets = Array.from(form.getElementsByTagName('fieldset'));
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
let activeIndex = 0;

function updateButtons() {
    prevButton.disabled = activeIndex === 0;
    nextButton.disabled = activeIndex === fieldsets.length - 1;
}

prevButton.addEventListener('click', () => {
    fieldsets[activeIndex].classList.remove('active');
    fieldsets[--activeIndex].classList.add('active');
    updateButtons();
});

nextButton.addEventListener('click', () => {
    fieldsets[activeIndex].classList.remove('active');
    fieldsets[++activeIndex].classList.add('active');
    updateButtons();
});

updateButtons();