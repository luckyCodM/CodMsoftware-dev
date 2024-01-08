<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('.nav').addClass('affix');
			console.log("OK");
		} else {
			$('.nav').removeClass('affix');
		}
	});
</script>


<!-- youtube video iframe link  -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const playButton = document.getElementById('playButton');
    const youtubeIframe = document.getElementById('youtubeIframe');
    const youtubeVideo = document.querySelector('.youtube-video');
	const thumbnailImage = document.querySelector('.thumbnail')

    playButton.addEventListener('click', function () {
        youtubeVideo.style.display = 'block';
        playButton.style.display = 'none';
		thumbnailImage.style.display = 'none';
        youtubeIframe.src = "https://www.youtube.com/embed/_hOnGRvtIms?rel=0&amp;autoplay=1";
        
    });
});
</script>

<script>
	$(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-countto");
  countDuration = parseInt($this.attr("data-duration"));
  $({ counter: $this.text() }).animate(
    {
      counter: countTo
    },
    {
      duration: countDuration,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.counter));
      },
      complete: function () {
        $this.text(this.counter);
      }
    }
  );
});

</script>
</body>
</html>