document.addEventListener('DOMContentLoaded', () => {  
  function counter(){
      const counters = document.querySelectorAll('.value');
      const speed = 300;
      
      counters.forEach( counter => {
        const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;
          
            const time = value / speed;
          if(data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
              }else{
                counter.innerText = value;
              }
          
        }
        animate();
      });
      doCheck = false;
  }
  let doCheck = true;
  
if (doCheck){
  window.addEventListener('scroll',(event) => {
    if (isInViewport(document.getElementById("value")) && doCheck){
      counter();
    }
  })
} 



  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
});