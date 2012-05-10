<!DOCTYPE html>
<html lang="en">

	<head></head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="span12">
					<h1 align="center">Main Page for Code Examples</h1>
					<p align="center">
						If you click on a link the page will load with the code or information.
					</p>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">
								Phoenix Search Page Example
							</li>
							<li>
								<a href="#soc_search" onclick="return mainLoad('SOC_Search.php');">Code - Main Page</a>
							</li>
							<li>
								<a href="#soc_results" onclick="return mainLoad('SOC_Search_Results.php');">Code - Results Page</a>
							</li>
							<li>
								<a href="#soc_info" onclick="return mainLoad('SOC_Search_Results_Information.php');">Information About the Pages</a>
							</li>
							<li class="divider-vertical"></li>
						</ul>
					</div>
				</div>

				<div class="span6" id="DisplayDiv">

				</div>
			</div>
		</div>

	</body>

</html>