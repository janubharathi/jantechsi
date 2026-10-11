// Mobile menu toggle
var btn = document.querySelector('.menu-btn');
var nav = document.getElementById('nav');
btn.addEventListener('click', function () {
    var open = nav.classList.toggle('open');
    btn.setAttribute('aria-expanded', open);
});

// Reveal sections as they scroll into view
var items = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
    }, { threshold: 0.12 });
    items.forEach(function (el) { io.observe(el); });
} else {
    items.forEach(function (el) { el.classList.add('in'); });
}
