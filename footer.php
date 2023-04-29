<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytesttheme
 */

?>

<?php $test_data = CFS()->get( 'test_data', 11 ); ?>
<?php if ( ! empty( $test_data ) ): ?>

	<?php foreach ( $test_data as $item ): ?>

        <div class="mb-2" style="border-top: 1px solid #ccc">
            <p><?= $item['test_data_genre'] ?></p>
            <p><?= $item['test_data_year'] ?></p>
        </div>

	<?php endforeach; ?>

<?php endif; ?>


<?php wp_footer(); ?>

</body>

</html>