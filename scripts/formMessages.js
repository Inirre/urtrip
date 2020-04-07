// click cross to close confirmation message
if(document.getElementById('test')){
    const closeMessage = () => {

        const message = document.querySelector('.form__confirmation');
        const cross = document.querySelector('.form__confirmation__cross');

        cross.addEventListener('click', () => {
            message.parentNode.removeChild(message);
        })
    }
    closeMessage();
}

