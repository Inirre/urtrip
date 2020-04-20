const todayDate = () => {
    var today = new Date();
    return today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
};
const getDateOptions = (id) => {
    const dateOptions = {
        dateFormat: "Y-m-d", 
        allowInput: true, 
        appendTo: document.getElementById(id),
        minDate: todayDate(),
        "locale": "fr"
    };
    return dateOptions;

}
let dateStartPickr = flatpickr('#dateDeparture', getDateOptions('dateDepartureContainer'));
let dateEndPickr = flatpickr('#dateReturn', getDateOptions('dateReturnContainer'));
