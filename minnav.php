<?php
$homeActive = $pricingActive = "";
if ($_SERVER['SCRIPT_NAME'] === "/pricing/index.php") {
	$pricingActive = 'current-menu-item';	
} else if (($_SERVER['SCRIPT_NAME'] === "/index.php")) {
	$homeActive = 'current-menu-item';	
}
?>
<header class="min-header">
	<div class="top">
		<div class="container-width aligncenter">
			<div class="container-padding">
				<div class="image maxcdn-colored-logo alignleft"></div>
				<ul class="alignright nav">
					<li id="minnav-first-item"><strong>Call us at <span class="phone-number">+1 (877) 629-2361</span></strong></a></li>
					<li><a class="button orange textcenter" id="questionbox-side-chatnowbutton" href="#" onclick="return startWidget('chat');" >CHAT NOW</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</header>