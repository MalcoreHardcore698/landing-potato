<?php get_header(); ?>

	<section class="sec-01">
		<div class="container">
			<div class="row">
				<h2><?php echo get_cat_name(3); ?></h2>
                <p><?php echo category_description(3); ?></p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/potato-02.png" alt="potatos">
		</div>
	</section>

	<section class="sec-02">
		<div class="container">
			<div class="row">
                <h2><?php echo get_cat_name(4); ?></h2>
                <p><?php echo category_description(4); ?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/potato-03.png" alt="potatos" class="potatos-img">
				<div class="container potato-prop">
					<div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-3 col-calories">
						<span class="calories number">110</span><div class="text">calories</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-3 col-carbohydrate">
						<span class="carbohydrate number">26g</span><div class="text">carbohydrate</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-3 col-protein">
						<span class="protein number">3g</span><div class="text">protein</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-3 col-fat">
						<span class="fat number">0g</span><div class="text">fat</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sec-03">
		<div class="container">
			<div class="row">
                <h2><?php echo get_cat_name(5); ?></h2>
                <p><?php echo category_description(5); ?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/cheaps.png" alt="potatos" class="potatos-img">
			</div>
		</div>
	</section>

	<section class="sec-04">
        <h2><?php echo get_cat_name(6); ?></h2>
		<div class="carousel">
            <div class="slide">
                <div class="content"><p>"<?php echo get_post(14)-> post_content; ?>"</p></div>
                <div class="author"><b><?php echo get_the_title(14) ?></b></div>
            </div>
            <div class="slide">
                <div class="content"><p>"<?php echo get_post(16)-> post_content; ?>"</p></div>
                <div class="author"><b><?php echo get_the_title(16) ?></b></div>
            </div>
		</div>
	</section>

	<section class="sec-05">
		<div class="container">
            <h2><?php echo get_cat_name(7); ?></h2>
			<div class="row">
				<div class="col-md-4 col-sm-12 lite">
					<div class="wrap-sentence">
						    <h3><?php echo get_the_title(18) ?></h3>
                        <div class="wrap-order">
						    <p class="desc"><?php echo get_post(18)-> post_content; ?></p>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/potato-lite.png" alt="Potato Team" class="potato-lite-img">
				</div>
				<div class="col-md-4 col-sm-12 pro">
                    <div class="wrap-sentence">
                        <h3><?php echo get_the_title(21) ?></h3>
                        <div class="wrap-order">
                            <p class="desc"><?php echo get_post(21)-> post_content; ?></p>
                        </div>
                    </div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/potato-pro.png" alt="Potato Team" class="potato-pro-img">
				</div>
				<div class="col-md-4 col-sm-12 team">
                    <div class="wrap-sentence">
                        <h3><?php echo get_the_title(23) ?></h3>
                        <div class="wrap-order">
                            <p class="desc"><?php echo get_post(23)-> post_content; ?></p>
                        </div>
                    </div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/potato-team.png" alt="Potato Team"  class="potato-team-img">
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>