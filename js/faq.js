console.log('JS is geladen!!');

document.addEventListener('DOMContentLoaded', () => {  

document.getElementById('1').onclick = function() {
    this.classList.toggle('active');
}
});