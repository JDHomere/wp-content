<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>HARDWORKING / DEDICATED / TRUSTWORTHY</h3>
				<h1>MEET THE NEXUS TEAM</h1>
				<hr>
				<a href="#team" class="smoothScroll btn btn-danger">Team Members</a>
				<a href="#faq" class="smoothScroll btn btn-default">F.A.Q</a>
			</div>
		</div>
	</div>		
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<?php while(have_posts()){
				the_post();
				?>
				<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
				<div class="img-responsive"><?php the_post_thumbnail('memberPortrait');?></div>
				<div class="team-des">
					<a href="<?php the_permalink(); ?>" style="color:white"><h4><?php the_title(); ?></h4></a>
					<h3><?php $memberTitle = get_field('member_title'); 
					if($memberTitle){
						echo $memberTitle;
					}else {
						echo "Nexus Employee";
						} ?>
					</h3>
					<hr>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
						<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
						<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					</ul>
				</div>
			</div>
			</div>
			<?php } ?>
		</div>
		<div class="center">
				<?php custom_paginate_links(); ?>
			</div>
</section>
<h2 id="faq" style="text-align:center;">Frequently Asked Questions</h2>

<?php 
$questions = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'question'
	));
	
if($questions){
while($questions->have_posts()){
	$questions->the_post();
	?>
	<button class="accordion"><?php the_title(); ?></button>
	<div class="panel">
		<p><?php the_content(); ?></p>
	</div>
<?php }}?>

<?php get_footer() ?>