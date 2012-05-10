<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Personal Website for Michael Joseph Lawson</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="./Bootstrap/twitter-bootstrap-b261f97/docs/assets/css/bootstrap.css" rel="stylesheet">
		<link href="./Bootstrap/twitter-bootstrap-b261f97/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
				background-color: #333333;
				font-color: #db0000;
			}
			p {
				color: #db0000;
			}
			h1 {
				color: #db0000;
			}
			h2 {
				color: #7789fe;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
			.tab {
				text-indent: 40px;
			}
		</style>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#header').load('header.php');
				$('#main').load('main.php');

				// Clears the main div and loads the requested data into it.
				function mainLoad(data) {
					$('#main').empty();
					$('#main').load(data);
					return false;
				}

			});
			// End $(document).ready()
		</script>

	</head>

	<body>
		<div id="header"></div>
		<div id="main"></div>

		<!-- Load additional scripts last to load pages faster -->
		<script src="./JQuery UI/development-bundle/ui/jquery.ui.core.js"></script>
		<script src="./JQuery UI/development-bundle/ui/jquery.ui.widget.js"></script>
		<script src="./JQuery UI/development-bundle/ui/jquery.ui.datepicker.js"></script>
	</body>

</html>
