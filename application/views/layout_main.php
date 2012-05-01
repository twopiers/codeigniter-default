<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link href="<?php echo $this->config->item('base_url'); ?>assets/css/style.css?v=<?php echo random_string('alnum', 16); ?>" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="/assets/js/libs/jquery-1.5.1.js"%3E%3C/script%3E'))</script>
  <script src="<?php echo $this->config->item('base_url'); ?>assets/js/libs/modernizr-1.7.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>assets/js/plugins.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>assets/js/script.js"></script>
</head>
<body>
  <div id="container" class="clearfix">
    <header>
    	<nav>
    	 <ul>
    	   <li></li>
    	   <li></li>
    	 </ul>
      </nav>
    </header>
    <div id="main" role="main">
      <?php echo $content_for_layout; ?>
		</div>
	</div>
  <footer>
    &copy; <?php echo date('Y'); ?>
    </p>
  </footer>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>