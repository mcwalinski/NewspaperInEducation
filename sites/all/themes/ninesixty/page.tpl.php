<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>


	<!-- ****** HEAD ****** -->
	<head>
	
		<!-- Add title after "Washington Post:" -->
		<title>Washington Post: </title>
		<!-- Add keywords and descriptions if necessary -->
		<meta name="keywords" content=""></meta>
		<meta name="description" content=""></meta>
		<!-- For referenced styles from Washington Post: Eidos -->
		
<link media="all" rel="stylesheet" type="text/css" href="/sites/all/themes/ninesixty/styles/wapo.css"/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                
<link type="text/css" href="http://css.wpdigitalink.net/wpost/css/combo?context=eidos&m=true&c=true&r=/2.0.0/external-header-base&r=/2.0.0/header.css&r=/2.0.0/footer.css" rel="stylesheet"/>

<link type="text/css" href="https://ssl1.washingtonpost.com/wpost/css/combo?context=eidos&m=true&c=true&r=/2.0.0/external-header-base&r=/2.0.0/header.css&r=/2.0.0/footer.css" rel="stylesheet"/>

<script type="text/javascript" src="http://js.washingtonpost.com/wpost/js/combo?context=wpost&m=true&c=false&r=/yui-base/3.3.0/build/yui/yui-min.js&r=/yui-base/twp-yui/twp-yui.js&r=/yui-base/3.3.0/build/loader/loader-min.js&r=/yui-base/global/global-external-modules.js"></script>

<script type="text/javascript" src="https://ssl1.washingtonpost.com/wpost/js/combo?context=wpost&m=true&c=false&r=/yui-base/3.3.0/build/yui/yui-min.js&r=/yui-base/twp-yui/twp-yui.js&r=/yui-base/3.3.0/build/loader/loader-min.js&r=/yui-base/global/global-external-modules.js"></script>
	


<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>
	
			
	</head>

	<!-- ****** BODY ****** -->
	<body class="eidos">
		<!-- START shell -->
		<div id="shell">
			
             <div id="header-v3" class="external" data-config="hotTopics=false"></div> 
			
          		 <?php print render($page['header']); ?>

			
			
			<!-- START: Main #content -->
				<div id="content"  class="margin-bottom border-top-black">
					
					<div class="wp-column ten margin-right main-content">
						<!-- *** BEGIN MAIN CONTENT AREA *** -->
							  <div id="main" class="column ">
                              
                              <?php 
 if ($action_links): ?>
    <ul class="action-links"><?php print render($action_links); ?></ul>
 <?php endif; ?>
    
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

  
  </div>
	
						<!-- *** END MAIN CONTENT AREA *** -->
 </div>
					
					<!-- START: Right Rail -->
					
						<div class="wp-column six end">
							<div id="right-rail" class="module right-rail background" style="min-height:500px;">	
							
								<div class="padding-bottom padding-left">
									<?php if ($page['sidebar_first']): ?>
				  					<div id="sidebar-left" class="column">
								    <?php print render($page['sidebar_first']); ?>
								  </div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<!-- END: Right Rail -->
					
						
			<!-- END: Main #content -->
		
		
			<!-- This will generate the footer and section information via a javascript call. 
			See External header and Footer documentation -->	
			<!-- <div id="footer-v3-external"></div> -->
        
		</div>	
		<!-- END shell -->
        
        <!--
        <p id="back-top">
		<a href="#top"><span></span>Back to Top</a>
		</p>        
		-->
        
                    <div id="footer-v3" class="external"></div>
                </div>
        </div>



		
<?php
include("pagecode.php");
?>