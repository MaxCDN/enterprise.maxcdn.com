<?php
$homeActive = $pricingActive = "";
if ($_SERVER['SCRIPT_NAME'] === "/pricing/index.php") {
	$pricingActive = 'current-menu-item';	
} else if (($_SERVER['SCRIPT_NAME'] === "/index.php")) {
	$homeActive = 'current-menu-item';	
}
?>
<header>
	<div class="top">
		<div class="container-width aligncenter">
			<div class="container-padding">
				<a href="http://www.maxcdn.com/" class="image maxcdn-colored-logo alignleft"></a>
				<ul class="alignright nav">
					<li id="menu-item-7109" class="<?php echo $homeActive; ?> menu-item menu-item-type-custom menu-item-object-custom menu-item-7109"><a href="/">Enterprise</a></li>
					<li id="menu-item-49" class="not-clickable menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children hasSubnav menu-item-49">
						<a href="http://www.maxcdn.com/products/">Features</a>
						<ul class="sub-menu">
							<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="http://www.maxcdn.com/products/edgecaching/">EdgeCaching</a></li>
							<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="http://www.maxcdn.com/products/edgerules/">EdgeRules</a></li>
							<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="http://www.maxcdn.com/products/edgessl/">EdgeSSL</a></li>
							<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="http://www.maxcdn.com/products/edgesecurity/">EdgeSecurity</a></li>
							<li id="menu-item-5479" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5479"><a href="http://www.maxcdn.com/products/restful-api/">RESTful API</a></li>
							<li id="menu-item-5422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5422"><a href="http://www.maxcdn.com/products/control-panel/">Control Panel</a></li>
							<li class="bottom-subnav textcenter">
								<p><span class="phone-number">+1 (877) 629-2361</span></p>
								<a href="#" onclick="return startWidget('chat');" class="button orange">
									<i class="icon-comments"></i> CHAT
								</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-6260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children hasSubnav menu-item-6260">
						<a href="http://www.maxcdn.com/solutions/">Features</a>
						<ul class="sub-menu">
							<li id="menu-item-6264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6264"><a href="http://www.maxcdn.com/solutions/">Overview</a></li>
							<li id="menu-item-6262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6262"><a href="http://www.maxcdn.com/solutions/cms/">CMS</a></li>
							<li id="menu-item-6261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6261"><a href="http://www.maxcdn.com/solutions/advertising/">Advertising</a></li>
							<li id="menu-item-6263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6263"><a href="http://www.maxcdn.com/solutions/gaming/">Gaming</a></li>
							<li class="bottom-subnav textcenter">
								<p><span class="phone-number">+1 (877) 629-2361</span></p>
								<a href="#" onclick="return startWidget('chat');" class="button orange">
									<i class="icon-comments"></i> CHAT
								</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-62" class="<?php echo $pricingActive; ?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children hasSubnav menu-item-62">
						<a href="/pricing/">Pricing</a>
						<ul class="sub-menu">
							<li id="menu-item-7124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7124"><a href="http://www.maxcdn.com/pricing/">Standard Pricing</a></li>
							<li id="menu-item-7125" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7125"><a href="/pricing/">Enterprise Pricing</a></li>
							<li class="bottom-subnav textcenter">
								<p><span class="phone-number">+1 (877) 629-2361</span></p>
								<a href="#" onclick="return startWidget('chat');" class="button orange"><i class="icon-comments"></i> CHAT</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-63" class="not-clickable menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children hasSubnav menu-item-63">
						<a href="http://www.maxcdn.com/company/">Company</a>
						<ul class="sub-menu">
							<li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="http://www.maxcdn.com/contact/">Contact Us</a></li>
							<li id="menu-item-7063" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7063"><a href="http://blog.maxcdn.com/">Blog</a></li>
							<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="http://www.maxcdn.com/company/team/">Our Team</a></li>
							<li id="menu-item-5365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5365"><a href="http://www.maxcdn.com/company/network/">Our Network</a></li>
							<li id="menu-item-5417" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5417"><a href="http://www.maxcdn.com/company/customers/">Our Customers</a></li>
							<li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="http://www.maxcdn.com/company/careers/">Careers</a></li>
							<li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="http://www.maxcdn.com/company/culture/">Culture</a></li>
							<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="http://www.maxcdn.com/company/open-source/">Open Source</a></li>
							<li id="menu-item-5366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5366"><a href="http://www.maxcdn.com/company/affiliates/">Become an Affiliate</a></li>
							<li class="bottom-subnav textcenter">
								<p><span class="phone-number">+1 (877) 629-2361</span></p>
								<a href="#" onclick="return startWidget('chat');" class="button orange">
									<i class="icon-comments"></i> CHAT
								</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-7109L" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7109L"><a href="https://cp.maxcdn.com/">LOGIN</a></li>
					<li><a id="topnavcontactus" class="fancybox small-box" href="#popup-generalcontact"><strong><span class="phone-number">+1 (877) 629-2361</span></strong></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</header>