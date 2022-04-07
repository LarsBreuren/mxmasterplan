document.addEventListener('DOMContentLoaded', () => {  

    const elements = document.getElementsByClassName("questionContainer");

    const myFunction = function() {
        this.classList.toggle('active');
    };
    
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }
});

