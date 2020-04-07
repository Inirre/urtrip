// add divs to the form for minor travellers
const addMinors = () => {
    const clickable = document.getElementById('addMinors');
    const minors = document.querySelectorAll('.minors');

    clickable.addEventListener('click', () => {
        minors.forEach(element => element.classList.remove('hidden'));
        clickable.classList.add('hidden');
    });
}

addMinors();