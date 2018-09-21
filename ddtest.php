<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Testing DD';
	$GLOBALS['parent'] = 'ddtest';

?>

<html lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://ogp.me/ns/fb#" class="logged-in" style="margin-top: 63px;"><head>
			<title></title>


				<!-- Google Tag Manager -->
				<script async="" src="//connect.facebook.net/en_US/fbevents.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5HMSJX9"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','GTM-5HMSJX9');</script>
				<!-- End Google Tag Manager -->

			<meta http-equiv="content-type" content="text/html; charset=utf-8">

				<meta name="google-site-verification" content="DxBqUOrOGd_PL3O4Te1NBrURVAf-J9VcL2kANcIBxnw">

			<meta name="viewport" content="width=device-width, initial-scale=1.0">



			<link rel="stylesheet" media="screen" href="//assets.donordrive.com/resources/css/dd-public.min.css?v=201808161105" type="text/css"> <link rel="stylesheet" media="screen" href="//assets.donordrive.com/themes/boilerplate/css/master.min.css?v=201808161105" type="text/css"> <link rel="stylesheet" media="screen" href="//assets.donordrive.com/themes/floridadm/css/master.min.css?v=201808161105" type="text/css"> <link rel="stylesheet" media="print" href="//assets.donordrive.com/themes/floridadm/css/print.min.css?v=201808161105" type="text/css">
			<!--[if lte IE 9]>
				<link rel="stylesheet" media="screen" href="//assets.donordrive.com/resources/css/ie.css?v=201808161105" type="text/css">
			<![endif]-->



				<script type="text/javascript">
					if(top != self) top.location.replace(location);
				</script>



			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script>
				!window.jQuery && document.write('<script src="//static.donordrive.com/resources/js/jquery-3.3.1.min.js"><\/script>');
			</script>

				<script type="text/javascript" src="//static.donordrive.com/resources/js/jquery-migrate-3.0.1.min.js"></script>
			<script type="text/javascript" src="//assets.donordrive.com/resources/js/dd.min.js?v=201808161105" crossorigin="anonymous"></script>

			<script>
				!window.FormValidator && document.write('<script src="//static.donordrive.com/resources/js/dd.min.js?v=' + Math.random() + '"><\/script>');
			</script>

			<!--[if lt IE 9]>
			<script type="text/javascript" src="//assets.donordrive.com/resources/js/respond.min.js?v=201808161105" crossOrigin="anonymous"></script>
			<![endif]-->

			<script type="text/javascript">
			//<![CDATA[
				//notification bar
				FormValidator.DEFAULTOPTIONS.errorMessage = "Please correct your form errors.";
				NotificationOptions.okText = "OK";
				NotificationOptions.cancelText = "Cancel";

				//calendar popup
				dp_dateFormat = "mm/dd/yyyy";



					window.fbAsyncInit = function() {
						FB.init({
							appId   : '262760917230310',
							status  : true, // check login status
							cookie  : true, // enable cookies to allow the server to access the session
							xfbml   : true,  // parse XFBML
							version : 'v2.4'
						});
					};

					$.ajax({
						cache: true,
						dataType: 'script',
						url: 'https://connect.facebook.net/en_US/sdk.js'
					}).done(function() {
						$.event.trigger("facebook.ready");
					});


				// on load stuffs
				$(document).ready(function() {
					//fix for safari autocomplete

					$.ajax({
							cache: true,
							dataType: 'script',
							url: 'https://platform.twitter.com/widgets.js'
						});

					// notification bar

				});

				window.ddWidgetOptions = {
					baseURL: 'https://events.dancemarathon.com/'
				};
			//]]>
			</script>
			<script type="text/javascript" src="//assets.donordrive.com/resources/js/donordrive.widget.js?v=201808161105" crossorigin="anonymous"></script> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10033200-4', 'events.dancemarathon.com');
ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,800,700|Oswald" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
		<script type="text/javascript">
		document.createElement('video');
		</script>
		<style>
			#movie-area {
				height: 430px;
			}
		</style>
	<![endif]-->
	<script type="text/javascript">
	//<![CDATA[
		$(document).ready(function(){
			$("#leftCol.no-content").prev("#centerColinterior").addClass("full-width");  // Appends class for full width in portal

			/* Login Toggle */
			$("#logintop").on('click', function() {
				$("#loginbox").slideToggle('fast');
				$("#logintop").toggleClass("on");
				return false;
			});


			$('.dd-widget[data-type="badges"]').on('ddWidgetComplete', function(e) {
				$(".dd-badges").appendTo(".participant-card, .team-card");
			});
		});
	//]]>
	</script>

	<script type="text/javascript">
		$(function() {
			$('#fbCommentHeader,#fbcomments')
				.remove()
				.appendTo('#comments-box');
		});
	</script>



	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');
	fbq('init', '688248481376272');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=688248481376272&amp;ev=PageView&amp;noscript=1"
	/></noscript>


<script>
	$(document).ready(function() {
		$(".logintogglelink").on("click", function(){
			if($("#centralLoginDiv").is(":visible")) {
				$("#centralLoginDiv").hide();
				$("#forgotPasswordDiv").show();
			} else {
				$("#forgotPasswordDiv").hide();
				$("#centralLoginDiv").show();
			}

			return false;
		});

		$("#forgotpassword").on("submit", function() {
			var form = this;
			return FormValidator.ajaxPost(form, {
				suppressFieldErrors: true,
				success: function(){

					$(form)
						.parent()
							.remove("#forgotpassword")
								.html(
									"<div class='submitted-message alert alert-error'>" +
										"<h4>Your password has been reset.</h4>" +
										"<p>You will receive an email to set your new password. It should arrive shortly but may take a moment.</p>" +
									"</div>"
								);
					return false;
				}
			});
		});


	});
</script>

						<meta property="fb:app_id" content="262760917230310">
						<meta property="og:site_name" content="CMN Hospitals">
						<meta property="og:type" content="non_profit">
						<meta property="og:url" content="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&amp;eventID=3066">
						<meta property="og:title" content="Dance Marathon at the University of Florida 2019">
						<meta property="og:description" content="Event landing page for Dance Marathon at the University of Florida 2019">

							<meta property="og:image" content="https://assets.donordrive.com/cmndancemarathon/images/fbLogo.jpg?v=201808161105">

							<script type="text/javascript">
								//<![CDATA[
								var test = 'placeholder' in document.createElement("input");
								if( !test ){
									var searchPrompt = "Fundraiser\x20Search";

									$(document).ready(function() {
										$("#searchTerm").val(searchPrompt);

										$("#searchTerm").on("blur focus", function(e) {
											if(e.type == "focus" && $(this).val() == searchPrompt) {
												$(this).val("");
											} else if(e.type == "blur" && $(this).val() == "") {
												$(this).val(searchPrompt);
											}
										});
										$("#participantTeamSearch").on("submit", function() {
											if($("#searchTerm").val() == searchPrompt) {
												$("#searchTerm").val("");
											}
										});
									});
								}
								//]]>
							</script>

							<script type="text/javascript">
								$('document').ready(function() {
									$(".js-facebook-share").on('click', function() {
										FB.ui({
											method: 'share',
											href: 'https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=3066',
										}, function(response){});
									});
								});
							</script>

						<script type="text/javascript">
							$('document').ready(function() {
								$('.js-tweet').on('click', function() {
									$.ajax({
										url: '?fuseaction=donordrive.ajaxGetShortUrl&eventID=3066',
										async: false
									}).done(function(data) {
										window.open('https://twitter.com/share/?url=' + JSON.parse(data).SHORTURL + '&lang=en&text=I%27m%20supporting%20Children%27s%20Miracle%20Network%20Hospitals%20Dance%20Marathon%21&via=DonorDrive', 'Twitter', 'width=550,height=260');
									});
									return false;
								});
							});
						</script>

				<script type="text/javascript">
					$(document).ready(function() {
						$(".js-linkedin-share").on('click', function() {
							window.open("https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fevents%2Edancemarathon%2Ecom%2Findex%2Ecfm%3Ffuseaction%3DdonorDrive%2Eevent%26eventID%3D3066&title=Dance%20Marathon%20at%20the%20University%20of%20Florida%202019&summary=Event%20landing%20page%20for%20Dance%20Marathon%20at%20the%20University%20of%20Florida%202019&source=Children%27s%20Miracle%20Network%20Hospitals%20Dance%20Marathon&locale=en_US", "LinkedIn", "width=550,height=370");
							return false;
						});
					});
				</script>
				<style type="text/css">.fancybox-margin{margin-right:0px;}</style><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f5f6f7;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:-webkit-sticky;top:0}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2_mobile_chat_started{animation-duration:300ms;animation-name:fb_bounce_in_v2_mobile_chat_started;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2_mobile_chat_started{animation-duration:300ms;animation-name:fb_bounce_out_v2_mobile_chat_started;transition-timing-function:ease-in}.fb_customer_chat_bubble_pop_in{animation-duration:250ms;animation-name:fb_customer_chat_bubble_bounce_in_animation}.fb_customer_chat_bubble_animated_no_badge{box-shadow:0 3px 12px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_no_badge:hover{box-shadow:0 5px 24px rgba(0, 0, 0, .3)}.fb_customer_chat_bubble_animated_with_badge{box-shadow:-5px 4px 14px rgba(0, 0, 0, .15);transition:box-shadow 150ms linear}.fb_customer_chat_bubble_animated_with_badge:hover{box-shadow:-5px 8px 24px rgba(0, 0, 0, .2)}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_mobile_overlay_active{background-color:#fff;height:100%;overflow:hidden;position:fixed;visibility:hidden;width:100%}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_v2_mobile_chat_started{0%{opacity:0;top:20px}100%{opacity:1;top:0}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_v2_mobile_chat_started{0%{opacity:1;top:0}100%{opacity:0;top:20px}}@keyframes fb_customer_chat_bubble_bounce_in_animation{0%{bottom:6pt;opacity:0;transform:scale(0, 0);transform-origin:center}70%{bottom:18pt;opacity:1;transform:scale(1.2, 1.2)}100%{transform:scale(1, 1)}}</style></head>
		<body class="theme-floridadm palette-default circuit-donordrive action-event language-en event-3066 event-type-p" data-page-context="{&quot;language&quot;:&quot;en&quot;,&quot;locale&quot;:&quot;en_US&quot;,&quot;action&quot;:&quot;event&quot;,&quot;environment&quot;:&quot;LIVE&quot;,&quot;theme&quot;:&quot;floridadm&quot;,&quot;title&quot;:&quot;Children's Miracle Network Hospitals Dance Marathon&quot;,&quot;eventID&quot;:3066,&quot;constituentLoggedIn&quot;:true,&quot;circuit&quot;:&quot;donordrive&quot;}">
				<script>
					if(!window.DonorDrive) {
						var DonorDrive = {};
					}

					(function($) {
						DonorDrive.Constituent = {
							deleteNotification: function(n, c) {
									var id = "";
									$(n).each(function(i, v) {
										$(v).parent().fadeOut();
										id += $(v).data("constituentnotificationid") + ',';
									});

									$.getJSON("https://events.dancemarathon.com/index.cfm?fuseaction=account.ajaxDeleteNotification&constituentNotificationID=" + id.replace(/\,$/, ''))
										.done(function(data) {
												if(c) {
													c(data);
												}
												DonorDrive.Constituent.populateNotifications(data);
											})
										.fail(function() {
												alert('An error occurred processing your request. Please try again.');
											});
								},
							populateNotifications: function(n) {
									if(n.length == 0) {
										$('#alerts .dropdown-menu').remove();
										$('#alerts').html('<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.notifications"><i class="icon-bell icon-white"></i><span class="visible-phone">Alerts</span></a>');
									} else {
										$('#alerts').html('<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.notifications"><i class="icon-bell icon-white visible-phone"></i><span class="visible-phone">Alerts</span><span class="badge badge-important">' + n[0].numNotifications + '</span></a>');

										if($('#alerts .dropdown-menu').length == 0) {
											$('<ul class="dropdown-menu"></ul>').appendTo("#alerts");
										} else {
											$('#alerts .dropdown-menu').empty();
										}

										$.each(n, function(i, v) {
											$('<li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base ' + v.colorClass + '"></i><i class="icon-' + v.iconClass + ' icon-light"></i></span>' + v.text + '<a href="#" class="dismiss">&times;</a><small>' + v.dateDiff + '</small></li>')
												.find('.dismiss')
													.data("constituentnotificationid", v.constituentNotificationID)
													.on('click', function(e) {
															DonorDrive.Constituent.deleteNotification(e.target);
															return false;
														})
													.end()
												.appendTo("#alerts .dropdown-menu");
										});

										if(n[0].numNotifications > 5) {
											$('<li id="view-all"><div><a class="btn-form block" href="https://events.dancemarathon.com/index.cfm?fuseaction=account.notifications">View All</a></div></li>').appendTo("#alerts .dropdown-menu");
										}
									}
								}
						};

						$(function() {
							$('#js-show-bar-subnav').on('click', function(e) {
								$('.mobile-nav-container').toggleClass('open');
								e.preventDefault();
							});

							$('html')
								.css('margin-top', '63px')
								.addClass('logged-in');

							DonorDrive.Constituent.populateNotifications([{"iconClass":"group","numNotifications":35,"colorClass":"blue","constituentNotificationID":"E77CC9AA-9E00-47C9B514-FDC8B6859683","text":"Emma Berckman joined your team! <a href=\"https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&participantID=460088\">View your team</a>","dateDiff":"4 days ago","type":"memberJoined"},{"iconClass":"group","numNotifications":35,"colorClass":"blue","constituentNotificationID":"93153EB3-52B7-4E3AB298-AE134CABB926","text":"William Walker joined your team! <a href=\"https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&participantID=460088\">View your team</a>","dateDiff":"5 days ago","type":"memberJoined"},{"iconClass":"group","numNotifications":35,"colorClass":"blue","constituentNotificationID":"FFD7F72D-7889-41D78D51-2D4FA8C64EDC","text":"William Cosker joined your team! <a href=\"https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&participantID=460088\">View your team</a>","dateDiff":"5 days ago","type":"memberJoined"},{"iconClass":"group","numNotifications":35,"colorClass":"blue","constituentNotificationID":"408D6F11-A29C-4DCCA8D4-1D68A4374113","text":"Wesley Campbell joined your team! <a href=\"https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&participantID=460088\">View your team</a>","dateDiff":"5 days ago","type":"memberJoined"},{"iconClass":"group","numNotifications":35,"colorClass":"blue","constituentNotificationID":"E9BB1F10-1915-4943BAFB-E5C54F1E5E35","text":"Tiffany Tang joined your team! <a href=\"https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&participantID=460088\">View your team</a>","dateDiff":"5 days ago","type":"memberJoined"}]);
						});
					})(jQuery);
				</script>
				<div class="dd-widget dd-loginbar navbar navbar-fixed-top navbar-inverse">
					<div class="navbar-inner">
						<div class="container">
							<div class="mobile-nav-container">
								<ul class="nav pull-left">

										<li class="hidden-phone">
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.participant&amp;participantID=460088">
												<i class="icon-user icon-white"></i>
												<span>Your Page</span>
											</a>
										</li>

											<li>
												<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.team&amp;teamID=33801">
													<i class="icon-group icon-white"></i>
													<span>Team Page</span>
												</a>
											</li>

									<li>
										<a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.home">
											<i class="icon-dashboard icon-white"></i>
											<span>Dashboard</span>
										</a>
									</li>

										<li>
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.donations">
												<i class="icon-gift icon-white"></i>
												<span>&nbsp;Donations</span>
											</a>


												<ul class="dropdown-menu">
													<li>
														<a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.donations">Donations Received</a>
													</li>


														<li>
															<a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.pledge">Add Offline Donation</a>
														</li>

													<li>
														<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donate.participant&amp;participantID=460088">Make a Donation</a>
													</li>
												</ul>

										</li>

									<li>
										<a href="https://events.dancemarathon.com/index.cfm?fuseaction=messages.home">
											<i class="icon-envelope icon-white"></i>
											<span>&nbsp;Messages</span>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="https://events.dancemarathon.com/index.cfm?fuseaction=messages.home">Sent Messages</a>
											</li>


												<li>
													<a href="https://events.dancemarathon.com/index.cfm?fuseaction=messages.compose">Compose a Message</a>
												</li>
												<li>
													<a href="https://events.dancemarathon.com/index.cfm?fuseaction=messages.drafts">Drafts</a>
												</li>

											<li>
												<a href="https://events.dancemarathon.com/index.cfm?fuseaction=messages.contacts">Contact List</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.resources">
											<i class="icon-cloud-download icon-white"></i>
											<span>&nbsp;Resources</span>
										</a>
									</li>
									<li class="visible-phone visible-tablet">
										<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.profile">
											<i class="icon-gear icon-white"></i>
											<span>Account</span>
										</a>
									</li>
								</ul>
							</div>
							<ul class="nav pull-right">

									<li class="visible-phone">
										<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.participant&amp;participantID=460088">
											<i class="icon-user icon-white"></i>
											<span>Your Page</span>
										</a>
									</li>

								<li class="visible-phone">
									<a id="js-show-bar-subnav" href="#">
										<i class="icon-th icon-white"></i>
										<span>More</span>
									</a>
								</li>
								<li id="greeting" class="hidden-phone hidden-tablet">
									<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.profile">

											<img class="avatar" src="//assets.donordrive.com/cmndancemarathon/images/$avatars$/constituent_9ABD87C8-5056-8A37-1098F6AD3A3CF186.jpg" width="24" height="24">

										<span>Welcome, Ryan.</span>
										<i class="icon-caret-down icon-white hidden-phone"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.profile">Account</a>
										</li>
										<li>
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.donations">Donations Given</a>
										</li>
										<li>
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.settings">Communication Settings</a>
										</li>

										<li id="logout">
											<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.logout" class="btn-form block">Logout</a>
										</li>
									</ul>
								</li>
								<li id="alerts"><a href="https://events.dancemarathon.com/index.cfm?fuseaction=account.notifications"><i class="icon-bell icon-white visible-phone"></i><span class="visible-phone">Alerts</span><span class="badge badge-important">35</span></a><ul class="dropdown-menu"><li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base blue"></i><i class="icon-group icon-light"></i></span>Emma Berckman joined your team! <a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&amp;participantID=460088">View your team</a><a href="#" class="dismiss">×</a><small>4 days ago</small></li><li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base blue"></i><i class="icon-group icon-light"></i></span>William Walker joined your team! <a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&amp;participantID=460088">View your team</a><a href="#" class="dismiss">×</a><small>5 days ago</small></li><li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base blue"></i><i class="icon-group icon-light"></i></span>William Cosker joined your team! <a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&amp;participantID=460088">View your team</a><a href="#" class="dismiss">×</a><small>5 days ago</small></li><li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base blue"></i><i class="icon-group icon-light"></i></span>Wesley Campbell joined your team! <a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&amp;participantID=460088">View your team</a><a href="#" class="dismiss">×</a><small>5 days ago</small></li><li><span class="icon-stack"><i class="icon-sign-blank icon-stack-base blue"></i><i class="icon-group icon-light"></i></span>Tiffany Tang joined your team! <a href="https://events.dancemarathon.com/index.cfm?fuseaction=portal.teamSummary&amp;participantID=460088">View your team</a><a href="#" class="dismiss">×</a><small>5 days ago</small></li><li id="view-all"><div><a class="btn-form block" href="https://events.dancemarathon.com/index.cfm?fuseaction=account.notifications">View All</a></div></li></ul></li>
							</ul>
						</div>
					</div>
				</div>
			<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/mp2v3DK3INU.js?version=42#channel=f13d7a9733397bc&amp;origin=https%3A%2F%2Fevents.dancemarathon.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
		<!--[if lt IE 9]>
		<table class="alert" width="100%" style="margin: 0; border-radius: 0; font-family: helvetica, sans-serif">
			<tr>
				<td style="text-align: right; max-width: 40px;">
					<i class="icon-warning-sign icon-3x pull-left" style="color: red"></i>
				</td>
				<td><strong style="color: ##000">You are using an outdated version of Internet Explorer!</strong><br />Some features are disabled or may not work properly. For a better and more secure experience, <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home" target="_blank"><strong>upgrade now</strong></a>.</td>
			</tr>
		</table>
		<![endif]-->


				<!-- Google Tag Manager (noscript) -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HMSJX9"
				height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
				<!-- End Google Tag Manager (noscript) -->



<div id="header">
	<div class="wrap">
		<a href="http://floridadm.org/" id="small-logo"></a>

		<div id="hard-coded-nav" class="pull-left topnavcms">
			<li><a href="http://floridadm.org/about">About</a></li>
			<li><a href="http://floridadm.org/get-involved">Get Involved</a></li>
			<li><a href="http://floridadm.org/family">Family</a></li>
			<li><a href="http://floridadm.org/events">Events</a></li>
			<li><a href="http://floridadm.org/press">Press</a></li>
			<li><a href="http://floridadm.org/sponsors">Sponsors</a></li>
			<a href="index.cfm?fuseaction=donorDrive.donate&amp;eventID=3066" class="dd-btn" id="btn-donate-now">Donate</a>
		</div>

		<ul id="social-icons" class="pull-right">
		  <li><a href="http://urlgeni.us/youtube/UFDanceMarathon"><i class="icon-youtube"></i></a></li>
		  <li><a href="http://urlgeni.us/instagram/dmatuf"><i class="icon-instagram"></i></a></li>
		  <li><a href="http://urlgeni.us/twitter/floridaDM"><i class="icon-twitter"></i></a></li>
		  <li><a href="http://urlgeni.us/facebook/floridaDM"><i class="icon-facebook"></i></a></li>
	    </ul>

	    <div id="action-tab">

					<form id="participantTeamSearch" name="participantTeamSearch_horizontal" action="https://events.dancemarathon.com/index.cfm?" method="get">
						<input type="hidden" id="fuseaction" name="fuseaction" value="donorDrive.search">
						<input type="hidden" id="filter" name="filter" value="participant">

							<input type="hidden" name="eventID" value="3066">

						<label for="searchTerm">
							<!-- GRABBING THIS SHIT WORKED LOL  -->
							<input type="text" id="searchTerm" name="searchTerm" size="15" maxlength="50" placeholder="Fundraiser Search">
						</label>
						<label>
							<button type="submit" title="Search"><span>Search</span></button>
						</label>
					</form>

	    </div>

		<div id="m-nav"><a class="btn m-menu-item m-menu-nav"><i class="icon-reorder"></i></a><form name="participantTeamSearch" method="get" action="index.cfm" class="m-search" _lpchecked="1"><input type="hidden" name="fuseaction" value="donorDrive.search"><input type="hidden" id="filter" name="filter" value="participant"><input type="text" id="searchTerm" name="searchTerm" size="15" maxlength="50" placeholder="Fundraiser Search"><button type="submit" class="btn">Search</button><input type="hidden" name="eventID" value="3066"></form>
		</div>
	</div>
</div>


	<div id="banner">
		<img id="banner-logo" src="themes/floridadm/img/floridadm.png">
		<div id="video-banner"><video loop="loop" autoplay="autoplay" muted="muted" preload="auto" poster="//assets.donordrive.com/themes/floridadm/video/floridaDm.jpg?v=201808161105" id="bgvid"><source src="//assets.donordrive.com/themes/floridadm/video/floridaDm.webm?raw=1&amp;v=201808161105" type="video/webm"><source src="//assets.donordrive.com/themes/floridadm/video/floridaDm.mp4?raw=1&amp;v=201808161105" type="video/mp4"></video></div>
		<div id="video-still"></div>
	</div>
	<div id="countdown-wrap">
		<div id="countdown">
			<div class="dd-widget widget-number-0 dd-event-countdown dd-widget-complete" data-type="eventCountdown"> <h1>Dance Marathon at the University of Florida 2019</h1> <div><span class="count weeks"><strong class="number">27</strong><span class="time">Weeks</span></span><span class="count days"><strong class="number">2</strong><span class="time">Days</span></span><span class="count hours"><strong class="number">10</strong><span class="time">Hours</span></span></div> </div>
			<h2 id="countdown-header">UNTIL DANCE MARATHON</h2>
			<a href="index.cfm?fuseaction=register.start&amp;eventID=3066" class="dd-btn btn-big" id="btn-reg">Register Now</a> <a href="index.cfm?fuseaction=donorDrive.donate&amp;eventID=3066" class="dd-btn btn-big" id="btn-donate-now">Donate Now</a>
		</div>

		<div id="event-content" class="wrap">

	<h1 class="heading1donordriveevent">Dance Marathon at the University of Florida 2019</h1>

		<h2 class="heading2donordriveevent">Join us on March 30, 2019</h2>
	<a id="btnRegbody" href="index.cfm?fuseaction=register.start&amp;eventID=3066" title="Register Now!" class="dd-btn btn-big"> <span>Register Now!</span></a> <a id="btnDonateevent" href="index.cfm?fuseaction=donorDrive.donate&amp;eventID=3066" class="dd-btn btn-big"> <span>Donate To This Event</span></a>
	<fieldset id="showhideeventdetails">
		<legend>
			Event Details
		</legend>
		<table>

				<tbody><tr>
					<td valign="top">Where</td>
					<td valign="top"><strong>Stephen C. O'Connell Center<br>Gainesville, FL</strong></td>
				</tr>

				<tr>
					<td>Starts</td>
					<td><strong>03/30/2019 @ 11:00 AM</strong></td>
				</tr>
				<tr>
					<td>Ends</td>
					<td>
						<strong>
							03/31/2019 @
							2:00 PM
						</strong>
					</td>
				</tr>

					<tr>
						<td>Check-in Time</td>
						<td>
							<strong>
								9:30 AM to 1:45 PM
							</strong>
						</td>
					</tr>

					<tr>
						<td>Registration Cutoff</td>
						<td>
							<strong>
								03/31/2019 @ 12:00 PM
							</strong>
						</td>
					</tr>

				<tr>
					<td>Donation Cutoff</td>
					<td>
						<strong>
							06/30/2019 @ 12:00 AM
						</strong>
					</td>
				</tr>


			<tr>
				<td>Contact</td>
				<td><strong>Connor Bennett</strong></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><strong>407-780-0389 </strong></td>
			</tr>
			<tr>
				<td>Email Address</td>
				<td><strong><a href="mailto:cbennett@floridadm.org">cbennett@floridadm.org</a></strong></td>
			</tr>
		</tbody></table>
	</fieldset>
	<p>Dance Marathon at the University of Florida 2019<em> is one of more than 300 Miracle Network Dance Marathon programs fundraising for local children’s hospitals. Miracle Network Dance Marathon&nbsp;is a movement uniting college,&nbsp;university,&nbsp;and high school students across North America. The collective efforts of students have raised nearly $180 million since 1991 for Children’s Miracle Network Hospitals, a nonprofit organization that raises funds and awareness for 170 pediatric hospitals in the U.S. and Canada. </em></p>
<p><em>The programs are student-run organizations that operate throughout the year and culminate in a 6- to 48-hour Dance Marathon event where students reveal and celebrate the year’s fundraising total, participate in games and dancing, enjoy entertainment, and meet with patient families treated at the local Children’s Miracle Network Hospital. Students involved in a campus’ Dance Marathon organization&nbsp;spend a year&nbsp;gaining&nbsp;leadership, teamwork, and nonprofit business experience&nbsp;while raising&nbsp;funds and awareness&nbsp;for their local Children’s Miracle Network Hospital.</em></p>
<div class="embeddedContent oembed-provider- oembed-provider-youtube" data-align="center" data-oembed="https://www.youtube.com/watch?v=C1a_M4f11Ag&amp;t=9s" data-oembed_provider="youtube" data-resizetype="noresize" style="text-align: center;">
 <iframe allowfullscreen="true" allowscriptaccess="always" frameborder="0" height="349" scrolling="no" src="https://www.youtube.com/embed/C1a_M4f11Ag?wmode=transparent&amp;jqoemcache=BoF6u" width="425"></iframe>
</div>
<hr>


<div class="clr"></div>

							<div id="fb-comments">


							</div>

		</div>
	</div>
	<div id="leader-board">
		<div class="overlay">
			<div class="wrap">
				<!-- DD needs better security  -->
				<div class="dd-widget widget-number-2 dd-top-fundraisers dd-widget-complete" data-header-text="" data-type="topFundraisers"> <h1></h1> <ol><ol> <li> <a class="dd-avatar-link" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.participant&amp;participantID=460080"> <img src="//assets.donordrive.com/cmndancemarathon/images/$avatars$/constituent_D40A7EC8-0595-3DC8-189A89CDDEF02A24.jpg"> <span class="dd-list-info"> <span class="dd-list-name">Jake Dube</span> <span class="dd-list-raised">$1,939.84</span> </span> </a> </li> <li> <a class="dd-avatar-link" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.participant&amp;participantID=460183"> <img src="//assets.donordrive.com/cmndancemarathon/images/$avatars$/constituent_01D55701-5056-8A65-4FC79D13C7AE6517.jpg"> <span class="dd-list-info"> <span class="dd-list-name">Peighton Jones</span> <span class="dd-list-raised">$1,213.58</span> </span> </a> </li> <li> <a class="dd-avatar-link" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.participant&amp;participantID=474484"> <img src="//assets.donordrive.com/cmndancemarathon/images/$avatars$/constituent_13C1D7B1-D56D-1505-BD75F62BD35D8DAD.jpg"> <span class="dd-list-info"> <span class="dd-list-name">Maxx Wexler</span> <span class="dd-list-raised">$1,195.00</span> </span> </a> </li> <li> <a class="dd-avatar-link" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.participant&amp;participantID=474304"> <img src="//assets.donordrive.com/cmndancemarathon/images/$avatars$/constituent_0FB4FB6B-91D7-02BF-2E14A25D32C67808.jpg"> <span class="dd-list-info"> <span class="dd-list-name">natalie geltman</span> <span class="dd-list-raised">$893.00</span> </span> </a> </li></ol> <a class="dd-btn dd-view-more-link" href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.participantList&amp;eventID=3066">View More</a> </ol></div>
				<div class="dd-widget widget-number-3 dd-search dd-widget-complete" data-show-header="no" data-type="search"> <form action="https://events.dancemarathon.com/index.cfm" method="get"> <input type="hidden" name="fuseaction" value="donorDrive.search"> <input type="hidden" name="contextualSearch" value="1"> <input type="hidden" name="filter" value="participant"> <input type="hidden" name="eventID" value="3066"> <label for="searchterm"> <input type="text" name="searchTerm" id="searchterm" placeholder="Find a Fundraiser or Team" aria-label="Fundraiser Search"> </label> <button type="submit" class="dd-btn dd-btn-search">Search</button> </form> </div>
			</div>
		</div>
	</div>
	<div id="social-box">
		<div class="wrap">
			<div id="comments-box" class="pull-left"><h2 id="fbCommentHeader">Comments</h2><div id="fbcomments">
									<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&amp;eventID=3066" data-numposts="10" data-colorscheme="light" data-width="100%" fb-xfbml-state="rendered"><span style="height: 178px;"><iframe id="f2445583a47ce68" name="f1149fb0ebe0828" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=262760917230310&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fmp2v3DK3INU.js%3Fversion%3D42%23cb%3Df10790c8e07839%26domain%3Devents.dancemarathon.com%26origin%3Dhttps%253A%252F%252Fevents.dancemarathon.com%252Ff13d7a9733397bc%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=https%3A%2F%2Fevents.dancemarathon.com%2Findex.cfm%3Ffuseaction%3DdonorDrive.event%26eventID%3D3066&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;skin=light&amp;version=v2.4&amp;width=100%25" style="border: none; overflow: hidden; height: 178px; width: 100%;"></iframe></span></div>
								</div></div>

				<div id="socialBtns" class="box">

						<h1>Get The Word Out</h1>

					<div class="padding">

						<button class="js-facebook-share dd-btn dd-social-btn dd-social-btn--facebook" type="button" title="Share on Facebook"><i class="icon icon-facebook"></i>Share</button>

					<button class="js-tweet dd-btn dd-social-btn dd-social-btn--twitter" type="button" title="Share on Twitter"><i class="icon icon-twitter"></i>Tweet</button>

				<button class="js-linkedin-share dd-btn dd-social-btn dd-social-btn--linkedin" type="button" title="Share on LinkedIn"><i class="icon icon-linkedin"></i>Share</button>

						<div class="clr">&nbsp;</div>
					</div>
				</div>

			<div class="clr"></div>
		</div>
	</div>


<div id="instagram-feed">
	<!-- SnapWidget -->
	<div id="instagram-heading"><h1><i class="icon-twitter"></i> @floridadm</h1></div>
	<iframe allowtransparency="true" class="snapwidget-widget" frameborder="0" scrolling="no" src="https://snapwidget.com/embed/180558" style="border:none; overflow:hidden; width:100%; height:200px"></iframe>
</div>


<div id="footer">
	<div class="wrap">

		<div id="footer-text">
			<a href="index.cfm?fuseaction=donorDrive.donate&amp;eventID=3066" class="dd-btn btn-big" id="btn-donate-now">Donate</a> <a href="index.cfm?fuseaction=register.start&amp;eventID=3066" class="dd-btn btn-big" id="btn-reg">Register</a>
			<div class="clr">&nbsp;</div>
			© 2018 Children's Miracle Network Hospitals <a href="index.cfm?fuseaction=donorDrive.privacy&amp;eventID=3066">Privacy</a>
			&nbsp;&nbsp;
			<a href="index.cfm?fuseaction=donorDrive.contactUs&amp;eventID=3066">Contact</a>
		</div>
		<a id="powered-by" href="http://www.donordrive.com" title="Powered by DonorDrive® Peer-to-Peer Fundraising" target="_blank"><img src="//assets.donordrive.com/themes/resources/img/brand/dd-logo-light.svg?v=201808161105" alt="DonorDrive"> </a>
		<a href="http://floridadm.org/" target="_blank" id="footer-logo" class="pull-right"></a>
		<div class="clr">&nbsp;</div>
	</div>
</div>





				<script type="text/javascript">
					$(window).on('load', function() {
						$('<video loop="loop" autoplay="autoplay" muted="muted" preload="auto" poster="//assets.donordrive.com/themes/floridadm/video/floridaDm.jpg?v=201808161105" id="bgvid"><source src="//assets.donordrive.com/themes/floridadm/video/floridaDm.webm?raw=1&v=201808161105" type="video/webm" /><source src="//assets.donordrive.com/themes/floridadm/video/floridaDm.mp4?raw=1&v=201808161105" type="video/mp4" /></video>').appendTo($('#video-banner'));
					});
				</script>
			 <iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.9e36650065da04ebaceb904a35d79d9c.html?origin=https%3A%2F%2Fevents.dancemarathon.com&amp;settingsEndpoint=https%3A%2F%2Fsyndication.twitter.com%2Fsettings" title="Twitter settings iframe" style="display: none;"></iframe><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe"></iframe></body></html>
