	var SI = 0;
			SS();

			function SS() {
			  var i;
			  var slides = document.getElementsByClassName("item");
			  for (i = 0; i < slides.length; i++) {
				slides[SI-1].style.display = "none";				
			  }
			  SI++;
			  if (SI > slides.length) {SI = 1}
			  slides[SI-1].style.display = "inline-block";
			  setTimeout(SS, 4000); // Change image every 2 seconds
			}
