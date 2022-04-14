document.addEventListener('DOMContentLoaded', () => {  

    const open = document.getElementById("openNav");
    const close = document.getElementById("closeNav");
    const overlay = document.getElementById("overlay");
    const mobileContent = document.getElementById("mobileContent");

    open.addEventListener('click', toggleNav, false);
    close.addEventListener('click', toggleNav, false);
    overlay.addEventListener('click', toggleNav, false);

    function toggleNav(){
        mobileContent.classList.toggle('active');
        overlay.classList.toggle('active');
    };

});



