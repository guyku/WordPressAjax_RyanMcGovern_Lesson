<div class="js-filter">
	<?php

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1
		);

		$query = new WP_Query($args);

		if($query->have_posts()) :
			while($query->have_posts()) : $query->the_post();
				the_title('<h2>', '</h2>');
				the_content('<p>', '</p>');
			endwhile;
			endif;
			wp_reset_postdata(); ?>
</div>

<div class="categories">
	<ul>
		<li class="js-filter-item"><a href="<?= home_url(); ?>">All</a></li>
<?php 
$cat_args = array(
	'exclude' => array(1),
	'option_all' => 'All'
);

$categories = get_categories($cat_args);

foreach($categories as $cat) : ?>
	<li class="js-filter-item"><a data-category="<?= $cat->term_id; ?>" href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
