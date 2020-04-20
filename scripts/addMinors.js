// toggle divs in urtrip-form for minor travellers
const addMinors = () => {
    const clickable = document.getElementById('addMinors');
    const minors = document.querySelectorAll('.minors');

    clickable.addEventListener('click', () => {
        minors.forEach(element => element.classList.toggle('hidden'));
        if(clickable.textContent === '+ Ajouter des voyageurs mineurs'){
            clickable.innerHTML = '- pas de mineurs';
        } else if (clickable.textContent === '- pas de mineurs'){
            clickable.innerHTML = '+ Ajouter des voyageurs mineurs';
        }
    });
}

addMinors();