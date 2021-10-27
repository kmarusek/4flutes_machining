<?php get_header();?>
<?php get_header('primary');?>
<!-----Hero Banner--->
<div class="fp_hero" style="background-image: url(<?php echo get_template_directory_uri();?>/img/4FM-large-watermark-bg-min.png);">
    <img class="top-triangle" loading="lazy" src="<?php echo get_template_directory_uri();?>/img/gradient-triangle-banner-bg-min.png" alt="Gradient grey triangle background image"/>
    <img src="<?php echo get_template_directory_uri();?>/img/navy-trangle-right-side-bg-min.png" alt="Navy triangle background image" class="bottom-triangle">
    <div class="split top">
			<div class="leftside">
					<img class="slide-left animation" src="<?php the_field('fp_top50_img');?>"/>
            </div>
            <div class="rightside" >
				<div class="centerbox">
					<div class="title">
						<h4><?php the_field('fp_top50_title');?></h4>
					</div>
					<div class="subtitle">
						<h2><?php the_field('fp_top50_subTitle');?></h2>
					</div>
                    <div class="textwrap">
                        <?php the_field('fp_top50_content');?>
                    </div>
					<div class="buttonwrap">
						<a class="button  more-link" href="<?php the_field('fp_top50_link');?>"><?php the_field('fp_top50_label');?></a>
					</div>
				</div>
			</div>
	</div>
	<div class="split bottom">
            <div class="leftside" >
				<div class="centerbox">
					<div class="title">
						<h2><?php the_field('fp_bottom50_title');?></h2>
					</div>
					<div class="subtitle">
						<h5><?php the_field('fp_bottom50_subTitle');?></h5>
					</div>
                    <div class="textwrap">
                        <?php the_field('fp_bottom50_content');?>
                    </div>
					<div class="buttonwrap">
						<a class="button  more-link" href="<?php the_field('fp_bottom50_link');?>"><?php the_field('fp_bottom50_label');?></a>
					</div>
				</div>
			</div>
			<div class="rightside">
					<img class="slide-right animation" src="<?php the_field('fp_bottom50_img');?>"/>
            </div>
	</div>
</div><!-----End Hero---->
<!---- Process Repeater---->
<div class="fp_process">
	<div class="titlewrap">
		<h2><?php the_field('fp_process_title');?></h2>
	</div>
<?php if(have_rows('fp_process_rp')):?>
	<?php $counter = 1;?>
	<div class="centerbox">
<?php while( have_rows('fp_process_rp')): the_row();?>
		<div class="itembox">
			<div class="imagewrapper animation" style="background-image: url('<?php the_sub_field('fp_process_img');?>'); --animation-order: <?php echo $counter;?>;">
				<h5 class="number animation" style=" --animation-order: <?php echo $counter;?>;" ><?php the_sub_field('fp_process_number');?></h5>
			</div>
			<div class="title">
				<h2><?php the_sub_field('fp_process_title');?></h2>
			</div>
			<div class="textwrap">
				<p><?php the_sub_field('fp_process_text');?></p>
			</div>
		</div>
		<?php $counter++;?>
<?php endwhile;?>
	</div>
<?php endif;?>
</div><!----End Process Repeater---->
<!----CalltoAction--->
<div class="fp_callouts">
<?php if(have_rows('fp_callout_rp')):?>

<?php while( have_rows('fp_callout_rp')): the_row();?>
	<a class="callout_anchor" href="<?php the_sub_field('fp_callout_link');?>">
		<div class="callout" >
			<div class="backgroundimage" style="background-image: url('<?php the_sub_field('fp_callout_img');?>');" ></div>
			<div class="centerwrap">
				<div class="title">
					<h3><?php the_sub_field('fp_callout_title');?></h3>
				</div>
				<div class="textwrap">
					<p><?php the_sub_field('fp_callout_text');?></p>
				</div>
				<div class="buttonwrap">
					<p class="button  more-link"><?php the_sub_field('fp_callout_label');?></p>
				</div>
			</div>
		</div>
	</a>
<?php endwhile;?>

<?php endif;?>
</div><!---End CalltoAction--->
<!-----Services----->
<div class="fp_services">
	<div class="content">
		<div class="title">
			<h2><?php the_field('fp_service_title');?></h2>
		</div>
		<div class="textwrap">
			<?php the_field('fp_service_content1');?>
		</div>
	</div>
	<div class="service_repeater">
	<?php if( have_rows('fp_service_rp')):?>
		<div class="centerwrap">
	<?php while( have_rows('fp_service_rp')): the_row();?>
			<div class="itembox">
				<a href="<?php the_sub_field('fp_rp_link');?>">
					<div class="overlay">
						<img src="<?php the_sub_field('fp_service_img');?>" alt="" class="service_img">
					</div>
				</a>	
				<div class="service_name">
					<h3><?php the_sub_field('fp_service_name');?></h3>
				</div>
			</div>
	<?php endwhile;?>
		</div>
	<?php endif;?>
	</div>
	<div class="content content2">
		<div class="textwrap">
			<?php the_field('fp_service_content2');?>
		</div>
		<div class="buttonwrap">
			<a href="<?php the_field('fp_service_link');?>" class="button more-link">
				<?php the_field('fp_service_label');?>
			</a>
		</div>
	</div>
</div><!------End Services------>
<!------Parallax Banner------->
<div class="fp_parallax" style="background-image: url(<?php the_field('fp_parallax_banner');?>);">
	<div class="split">
		<div class="leftside">
			<div class="centerbox">
				<div class="title">
					<h3><?php the_field('fp_parallax_title');?></h3>
				</div>
				<div class="textwrap">
					<?php the_field('fp_parallax_text');?>
				</div>
				<div class="buttonwrap">
					<a href="<?php the_field('fp_parallax_link');?>" class="button more-link"><?php the_field('fp_parallax_label');?></a>
				</div>
			</div>
		</div>
		<div class="rightside">
			<img src="<?php the_field('fp_parallax_img');?>" alt="">
		</div>
	</div>
</div>
<?php get_footer('menu');?>
<?php get_footer();?>