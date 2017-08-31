<?php
/**
 * Created by PhpStorm.
 * User: nobikun1412
 * Date: 11-May-17
 * Time: 23:40
 */
/**
 * Template part for displaying slider custom.
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 0.1
 */
?>
<?php
$sliders = get_field('slider_images');
?>
<?php if ($sliders): ?>
    <div class="slider-custom">
        <ul class="bxslider slider-images-custom">
            <?php
            foreach ($sliders as $key => $slider):
                $image = $slider['image'];
                $title = $slider['title_image'];
                ?>
                <li><img class="img-slider-custom" src="<?php echo $image['url']; ?>" alt="<?php echo ($title != '') ? $title : $image['name']; ?>" /></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
