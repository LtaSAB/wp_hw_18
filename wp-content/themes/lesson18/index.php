<?php
get_header(); ?>
	<main class="m-page clearfix">
			<div id="content">
				<section class="main-section">
					<?php if ( have_posts() ):
						while ( have_posts() ) : the_post(); ?>
							<article class="post clearfix">
								<div class="post-thumbnail-wrapper">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="description">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_content(); ?>
									<a href="<?php the_permalink(); ?>" class="button read-more">
										Continue Reading
									</a>
								</div>
							</article>
						<?php endwhile;
					else:
						echo '<p> No content found</p>';
					endif; ?>
				</section>
<!--				Непонятный отступ в инспекторе ничего не обнаружил,а на деле присутствует-->
			</div>
			<?php get_sidebar(); ?>
		<div class="pagination ">
			<a class="pagination-link prev-link" href="">previous</a>
			<a class="pagination-link next-link" href="">next</a>
		</div>
	</main>
<?php get_footer(); ?>