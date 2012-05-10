<script>
	function mainLoad(data) {
		$('#main').empty();
		$('#main').load(data);
		return false;
	}
</script>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <!-- Button that appears when screen width is too small for content --> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
			<a class="brand">Personal Website</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="divider-vertical"></li>
					<li>
						<a href="#main" onclick="return mainLoad('main.php');">Home</a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a href="#about" onclick="return mainLoad('about.php');">About Michael</a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a href="#code_examples" onclick="return mainLoad('Code_Main_Page.php');">Examples of Code</a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a href="#contact" onclick="return mainLoad('contact.php');">Contact Michael</a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a href="http://www.linkedin.com/pub/michael-lawson/51/247/b2a" target="_blank">Resume</a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a href="http://michaeljlawson.drupalgardens.com/blog" target="_blank">Blog</a>
					</li>
					<li class="divider-vertical"></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>