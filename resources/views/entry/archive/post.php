<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php the_post_thumbnail( 'mag-medium', [ 'class' => 'entry__image' ] ) ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>

		<div class="entry__byline">
			<?php Hybrid\Post\display_author() ?>
			<?php Hybrid\Post\display_date( [ 'before' => Mag\sep() ] ) ?>
			<?php Hybrid\Post\display_comments_link( [ 'before' => Mag\sep() ] ) ?>
		</div>
	</header>

	<div class="entry__summary">
		<?php the_excerpt() ?>
	</div>

</article>
