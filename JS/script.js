let currentIndex = 0;
    const slides = document.querySelectorAll('#slideshow img');
    const indicatorsContainer = document.getElementById('indicators');

    function showSlide(index) {
      slides.forEach((slide) => slide.classList.remove('active'));
      slides[index].classList.add('active');
      updateIndicators(index);
    }

    function updateIndicators(index) {
      const indicators = document.querySelectorAll('.indicator');
      indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function initIndicators() {
      slides.forEach((slide, index) => {
        const indicator = document.createElement('span');
        indicator.classList.add('indicator');
        indicator.addEventListener('click', () => showSlide(index));
        indicatorsContainer.appendChild(indicator);
      });
      updateIndicators(currentIndex);
    }

    initIndicators();

    setInterval(nextSlide, 3000);

    function validate(){

      var a = document.getElementById("password").value;
      var b = document.getElementById("cPassword").value;
      var errorMessage = document.getElementById('error-message');
      if (a!=b) {
        errorMessage.textContent = 'Passwords not matching';
         return false;
      }
  }
  function display(){
    window.prompt("Lasindu");
  }