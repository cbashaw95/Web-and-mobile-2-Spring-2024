
var current = 0,
slides = document.getElementsByClassName("slide");
setInterval(function() {
for (var i = 0; i < slides.length; i++) {
slides[i].style.opacity = 0;
}
current = (current != slides.length - 1) ? current + 1 : 0;
slides[current].style.opacity = 1;
}, 5000); 