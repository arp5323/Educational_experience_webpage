var slides = document.querySelectorAll('#slides .slide')
var currentSlide = 0
var slideInterval = setInterval(nextSlide, 2000)
var pauseInterval;

function nextSlide () {
  goToSlide(currentSlide + 1)
}

function goToSlide (n) {
  slides[currentSlide].className = 'slide'
  currentSlide = (n + slides.length) % slides.length
  slides[currentSlide].className = 'slide showing'
}

var pause = false

function pauseSlideshow () {
  clearInterval(slideInterval)
  clearInterval(pauseInterval)
  pauseInterval = setTimeout(playSlideshow, 8000)
}

function playSlideshow () {
  slideInterval = setInterval(nextSlide, 2000)
}

/* Set buttons */
document.getElementById(0).onclick = function () {
  pauseSlideshow()
  goToSlide(0)
}

document.getElementById(1).onclick = function () {
  pauseSlideshow()
  goToSlide(1)
}

document.getElementById(2).onclick = function () {
  pauseSlideshow()
  goToSlide(2)
}

document.getElementById(3).onclick = function () {
  pauseSlideshow()
  goToSlide(3)
}
