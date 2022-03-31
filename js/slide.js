var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("overlay");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.opacity = "0";
				slides[i].style.transition = "opacity 2s";
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}
			  slides[slideIndex-1].style.display = "block";
			  slides[slideIndex-1].style.opacity = "1";
			  slides[slideIndex-1].style.transition = "2s";
			  setTimeout(showSlides, 5000); // Change image every 2 seconds
			}
