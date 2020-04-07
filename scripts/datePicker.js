const todayDate = () => {
    var today = new Date();
    return today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
};
const getDateOptions = (id) => {
    const dateOptions = {
        dateFormat: "d/m/Y", 
        allowInput: true, 
        appendTo: document.getElementById(id),
        minDate: todayDate(),
        "locale": "fr"
    };
    return dateOptions;

}
let dateStartPickr = flatpickr('#dateStart', getDateOptions('dateStartContainer'));
let dateEndPickr = flatpickr('#dateEnd', getDateOptions('dateEndContainer'));
