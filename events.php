<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<script>
	function openCity(evt, cityName) {
		// Declare all variables
		var i, tabcontent, tablinks;
	  
		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		  tabcontent[i].style.display = "none";
		}
	  
		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
	  
		// Show the current tab, and add an "active" class to the button that opened the tab
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>
<style>
	.page-heading.parallax.events {
		background-image: url("/assets/images/BannerPhotos21/Gracie C13.jpg");
	}
	.tab {
		overflow: hidden;
		display: flex;
		flex-direction: row;
		width: 100%;
		justify-content: space-evenly;
		margin-bottom: 2%;
	}
	/* Style the buttons that are used to open the tab content */
	.tab button {
		background-color: #C4C4C4;
		color: white;
		font-weight: 700;
		width: 200px;
		height: 50px;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 2px 17px;
		transition: 0.2s;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}
	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #4070A2;
		margin-bottom: 0%;
	}
	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 0px 12px;
		margin-bottom: 3%;
		width: 80%;
		margin-left: 10%;
	}

</style>
<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Events</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<?php if ($status == "open") { ?>
			<h3><b><span style="color: black">A YEARLONG PHILANTHROPY</span></b></h3>
        	<p>Dance Marathon is a <b><span style="color: #F79B63">yearlong commitment</span></b> that includes many fundraising events aimed at reaching University students, businesses, and Gainesville residents. These events help us create a fun and exciting atmosphere while raising awareness about DM, whether it is through social media or inspirational stories from our Miracle Children who speak at the events. DM at UF's community events are all highly anticipated as they build up throughout the year toward the main Event in the spring.</p>
        	<p><b><span style="color: #014083">Your involvement in these events is what makes them successful!</span></b> Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital. For more information about how to get involved in these events, please contact us at <a href="floridadm@floridadm.org">floridadm@floridadm.org</a>.</p>
		<?php } else { echo 'This page is currently closed.'; } ?>
	</div>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'dance')">DANCE MARATHON</button>
		<button class="tablinks" onclick="openCity(event, 'mini')">MINI-MARATHONS</button>
		<button class="tablinks" onclick="openCity(event, 'miricle')">MIRACLE GALA</button>
		<button class="tablinks" onclick="openCity(event, 'in-color')">MIRACLES IN COLOR 5K</button>
	</div>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'moralloween')">MORALLOWEEN</button>
		<button class="tablinks" onclick="openCity(event, 'madness')">MORALE MADNESS</button>
		<button class="tablinks" onclick="openCity(event, 'transform')">TRANSFORM TODAY</button>
	</div>
	<div id="dance" class="tabcontent">
		<h3>penis</h3>
	</div>

	<div id="mini" class="tabcontent">
		<h3>Paris</h3>
		<p>Paris is the capital of France.</p>
	</div>

	<div id="miricle" class="tabcontent">
		<h3>Tokyo</h3>
		<p>Tokyo is the capital of Japan.</p>
	</div>
	<div id="in-color" class="tabcontent">
		<h3>us</h3>
		<p>Tokyo is the capital of Japan.</p>
	</div>
	<div id="moralloween" class="tabcontent">
		<h3>no</h3>
		<p>Paris is the capital of France.</p>
	</div>

	<div id="madness" class="tabcontent">
		<h3>cum</h3>
		<p>Tokyo is the capital of Japan.</p>
	</div>
	<div id="transform" class="tabcontent">
		<h3>boobs</h3>
		<p>Tokyo is the capital of Japan.</p>
	</div>
</div>

<?php include("includes/foot.php"); ?>
