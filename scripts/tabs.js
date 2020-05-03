// toggle tabs style and display linked divs
const departureTimes = () => {
    const tabTimeDate = document.getElementById('tabTimeDate');
    const tabTimeDuration = document.getElementById('tabTimeDuration');
    const contentTimeDate = document.getElementById('contentTimeDate');
    const contentTimeDuration = document.getElementById('contentTimeDuration');

    tabTimeDate.addEventListener('click', () => {
        if (!tabTimeDate.classList.contains('tab__card--blue')){
            tabTimeDuration.classList.remove('tab__card--blue');
            tabTimeDate.classList.add('tab__card--blue');
            contentTimeDuration.classList.add('hidden');
            contentTimeDate.classList.remove('hidden');
        }
    });

    tabTimeDuration.addEventListener('click', () => {
        if (!tabTimeDuration.classList.contains('tab__card--blue')){
            tabTimeDate.classList.remove('tab__card--blue');
            tabTimeDuration.classList.add('tab__card--blue');
            contentTimeDate.classList.add('hidden');
            contentTimeDuration.classList.remove('hidden');
        }
    });

}

departureTimes();