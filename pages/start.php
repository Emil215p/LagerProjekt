<h1>Emils store</h1>
<p>Buy what you want.</p>
<p>we specialize in everything from computers to screens, we know how important lasagna is, too.</p>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <h2>Nogle af vores produkter:</h2>
  <div class="mySlides fade">
    <div class="numbertext">Produkt 1 / 3</div>
    <img src="images/itanium.jpg" width="312" height="375">
    <div class="text">Pitanium 9760</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">Produkt 2 / 3</div>
    <img src="images/TFPC.jpg" width="312" height="375">
    <div class="text">Family PC</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">Produkt 3 / 3</div>
    <img src="images/2411.jpg" width="312" height="375">
    <div class="text">MenQ 2411</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>