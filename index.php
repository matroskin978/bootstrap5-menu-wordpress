<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytesttheme
 */

get_header();
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text"><?php the_content( '' ); ?></p>
                            <a href="<?php the_permalink(); ?>">Read more</a>

                            <hr>
                            <p>Number of Pages: <?= CFS()->get( 'general_page_nums' ) ?></p>
                            <p>Cover: <?= CFS()->get( 'general_cover_isset' ) ? 'Yes' : 'No' ?></p>

							<?php $reviews = CFS()->get( 'additional_reviews' ); ?>
							<?php if ( ! empty( $reviews ) ): ?>

								<?php foreach ( $reviews as $review ): ?>

                                <div class="mb-2" style="border-top: 1px solid #ccc">
                                    <p><?= $review['additional_reviews_author'] ?></p>
                                    <p><?= $review['additional_reviews_text'] ?></p>
                                </div>

								<?php endforeach; ?>

							<?php endif; ?>

                        </div>
                    </div>

				<?php endwhile; else: ?>
                    Записей нет.
				<?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_footer();
