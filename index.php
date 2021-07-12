<?php $titulo = "Linkin Park | Home Page" ?>
	
	<?php include "header.php" ?>

	<div id="slideshow">
		<div class="slide fade">
			<img src="images/wallpaper1.jpg" alt="" class="wow fadeIn">
		</div>

		<div class="slide fade">
			<img src="images/wallpaper2.jpg" alt="">
		</div>

		<div class="slide fade">
			<img src="images/wallpaper3.jpg" alt="">
		</div>
	</div>

	<section id="phraseSpace">
		<article class="space">
			<blockquote>
				<p>♫ I'm holding on, Why is everything so heavy?<br>Holding on... So much more than I can carry.</p>
				<span>Chester Bennington</span>
			</blockquote>
		</article>
		<article class="space">
			<img src="images/lp-logo.png" alt="">
		</article>
	</section>

	<div id="spaceVideo">
		<iframe width="100%" height="600" src="https://www.youtube.com/embed/4W_YgNW7gs0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

	<script type="text/javascript">
		/*========= SLIDESHOW =========*/
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slide");

			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}

			slideIndex++;

			if (slideIndex > slides.length) {
					slideIndex = 1;
			}

			slides[slideIndex-1].style.display = "block";
			setTimeout(showSlides, 4000);
		}
	</script>

	<?php include "footer.php" ?>