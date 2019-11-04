function openModal() {
    document.getElementById("personScroll").style.display = "block";
    document.getElementById("myModal").style.display = "block";
    document.getElementById("overflowY").style.overflowY = "hidden";
    document.getElementsByClassName('ftco-navbar-light')[0].style.display = 'none';
    
}

function closeModal() {
    document.getElementById("personScroll").style.display = "none";
    document.getElementById("myModal").style.display = "none";
    document.getElementById("overflowY").style.overflowY = "scroll";
    document.getElementsByClassName('ftco-navbar-light')[0].style.display = 'block';
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
