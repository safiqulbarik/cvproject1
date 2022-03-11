<?php
get_header();

?>
<body <?php body_class()?> >
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html">
					
				
				<?php the_custom_logo();?>			
			
			</a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
					<?php wp_nav_menu( array(
				  'theme_location'=>'header_menu',
					'fallback_cb' => false));?>

					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<?php if(get_theme_mod('id_fb_section')) :?>

					<li><a href="<?php echo esc_url(get_theme_mod('id_fb_section'))?>"><span class="fb"> </span></a></li>
					
				<?php endif ?>


				<?php if(get_theme_mod('id_tw_section')) :?>
					<li><a href="<?php echo esc_url(get_theme_mod('id_tw_section'))?>"><span class="twit"> </span></a></li>
					<?php endif ?>
					
					<!-- <li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li> -->
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	
	<!--banner-end-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
					<?php while(have_posts()) : the_post();?> 

							<div class="col-md-6 abt-left">
								<a href="single.html" class="coffe-post-image"><?php the_post_thumbnail();?> </a>
								<h6><?php the_category(' ');?></h6>
								<h3><a href="single.html"><?php the_title();?></a></h3>
								<p><?php echo wp_trim_words(get_the_content(),30,'....' )?></p>
							</div>
							
						
						<?php  endwhile;?>
							
							<!-- <div class="clearfix"></div> -->
						
					</div>	
				</div>
				<?php get_sidebar()?>

				
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php
	get_footer();
	?>