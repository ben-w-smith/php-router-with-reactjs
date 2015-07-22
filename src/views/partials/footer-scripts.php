<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>(window.jQuery || document.write('<script src="/portfolio/assets/js/plugins/jquery.min.js"><\/script>'));</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script>($.fn.slider || document.write('<script src="/portfolio/assets/js/plugins/materialize.min.js"><\/script>'));</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script>(window.TweenMax || document.write('<script src="/assets/js/plugins/TweenMax.min.js"><\/script>'));</script>

<?php
preg_match('/\.(\w*?)((\.co)?.[a-z]{2,9})$/i', $_SERVER['SERVER_NAME'], $path);
$tld = strtolower($path[2]);
?>
<?php if(strpos($tld, 'local')) : ?>
	<script src="/portfolio/assets/js/main.js"></script>
<?php else : ?>
	<script src="/portfolio/assets/js/main.min.v<%= timestamp %>.js"></script>
<?php endif; ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

<script>
	// Use live reload if the tld contains local 
	( location.host.split('.').pop().indexOf('local') ) || document.write('<script src="http://localhost:23456/livereload.js"><\/script>')
</script>

<!-- odd this needs to be the last thing -->
<!-- <base href="http://standardoptical.local/portfolio"> -->