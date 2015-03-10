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
						<li><a href="/dmaa">DMAA</a></li>
						<li><a href="/faq">FAQ</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'get-involved') ? "class='open'" : ""; ?>>
					<a href="/get-involved" class="dropdown-toggle"  >Get Involved</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="http://floridadm.kintera.org/faf/home/waiver.asp?ievent=1114670&lis=1&kntae1114670=49B319BD1C5D464982B0286ECCA2EBEB" target="_blank">Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
						<li><a href="/staff-application">Staff Application</a></li>
						<li><a href="/moralentine">Moralentine's Day Form</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'family') ? "class='open'" : ""; ?>>
					<a href="/family" class="dropdown-toggle">Family</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/meet-the-kids">Meet the Kids</a></li>
						<li><a href="/family-events">Family Events</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'events') ? "class='open'" : ""; ?>>
					<a href="/events" class="dropdown-toggle">Events</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/community-events">Community Events</a></li>
						<li><a href="/hsdm">High School DM</a></li>
            <li><a href="/ft5k">FT5K 2015</a></li>
            <li><a href="/dancer-registration">Dancer Registration</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'press') ? "class='open'" : ""; ?>>
					<a href="/press" class="dropdown-toggle">Press</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/nomenclature">Nomenclature</a></li>
						<li><a href="/press-releases">Press Releases</a></li>
						<li><a href="/press-contacts">Press Contacts</a></li>
						<li><a href="/fast-facts">Fast Facts</a></li>
					</ul>
				</li>
				<li <?php echo ($parent == 'sponsors') ? "class='open'" : ""; ?>>
					<a href="/sponsors" class="dropdown-toggle">Sponsors</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/sponsorship-levels">Sponsorship Levels</a></li>
					</ul>
				</li>
				<?php /*
				<li>
				  <a href="#">DM Store</a>
				</li>
				*/ ?>
				<li class="open"><a href="http://floridadm.kintera.org/faf/search/searchParticipants.asp?ievent=1114670" target="_blank" class="active">Donate</a></li>
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