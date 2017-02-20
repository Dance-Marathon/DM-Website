<?php global $parent; ?>
    <!-- Fixed navbar -->
	<div id="nav" class="navbar navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="logo" height="40" width="34"></a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="sf-menu navbar-nav navbar-left">
				<li <?php echo ($parent == 'about') ? "class='open'" : ""; ?>>
					<a href="/about" class="dropdown-toggle">About</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/uf-health">CMNH & UF Health</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li>
						<li><a href="/press-releases">Press Release</a></li>
						<li><a href ="/blog">Blog</a></li>
						<!--<li><a href="/dmaa">DMAA</a></li>-->
            			<!--<li><a href="/alumni">Alumni</a></li>-->
						<li><a href="/faq">FAQ</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'students') ? "class='open'" : ""; ?>>
					<a href="/get-involved" class="dropdown-toggle">Students</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/get-involved">Get Involved</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Overalls</a></li>
						<li><a href="/emerging-leaders">ELP</a></li>
						<li><a href="/ftkrew">FTKrew</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'alumni') ? "class='open'" : ""; ?>>
					<a href="/dmaa" class="dropdown-toggle">Alumni</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/dmaa">DM Alumni</a></li>
						<li><a href="/meet-dma-board">Meet The DMA Board</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'family') ? "class='open'" : ""; ?>>
					<a href="/family" class="dropdown-toggle">Family</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/meet-the-kids">Meet The Kids</a></li>
						<li><a href="/family-events">Family Events</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'events') ? "class='open'" : ""; ?>>
					<a href="/events" class="dropdown-toggle">Events</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/community-events">Campus Events</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/ft5k">FT5K</a></li>
						<!-- NOT YET MADE, need to make these pages: -->
						<li><a href ="/fundraising-days">Fundraising Days</a></li>
						<li><a href="/gala">Gala</a></li>
						<!--Open this link when Event page is opened
						<li><a href="/event">Event</a></li>
						-->
					</ul>
				</li>
				<li <?php echo ($parent == 'partners') ? "class='open'" : ""; ?>>
					<a href="/partners" class="dropdown-toggle">Partners</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/partners">Our Partners</a></li>
						<li><a href="/sponsorship-levels">Sponsorship Levels</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'Fundraising') ? "class='open'" : ""; ?>>
					<a href="/register-to-fundraise" class="dropdown-toggle">Fundraising</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/register-to-fundraise">Register to Fundraise</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li><!-- To be Created-->
					</ul>
				</li>				
<!---------SPACEEEEEEEE ---->

				<li><a href="https://squareup.com/market/dance-marathon-at-uf" target="_blank">DM Store</a></li>

				 <!-- 
				 <li><a href="/blog/">Blog</a></li> 
				 -->
				 
				<li class="open"><a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1146" target="_blank" class="active">Donate</a></li>
				
			  </ul>
			  <ul class="nav navbar-nav navbar-right social-icons hidden-sm">
				  <li><a href="http://urlgeni.us/youtube/UFDanceMarathon"><i class="fa fa-youtube"></i></a></li>
				  <li><a href="http://urlgeni.us/instagram/dmatuf"><i class="fa fa-instagram"></i></a></li>
				  <li><a href="http://urlgeni.us/twitter/floridaDM"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="http://urlgeni.us/facebook/floridaDM"><i class="fa fa-facebook"></i></a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
