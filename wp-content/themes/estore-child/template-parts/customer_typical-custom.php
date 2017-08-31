<?php
/**
 * Created by PhpStorm.
 * User: nobikun1412
 * Date: 11-May-17
 * Time: 23:40
 */
/**
 * Template part for displaying add customers typical custom.
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 0.1
 */
?>
<?php
$list_stores_lhts = get_field('list_stores_lht');
if ($list_stores_lhts):
    ?>
    <div class="list-stores-lht container">
        <?php
        $title_list_stores_lht = get_field('title_list_stores_lht');
        if ($title_list_stores_lht != ''):
            ?>
            <div class="title">
                <h4>
                    <span class="underline-title">
                        <?php
                        echo $title_list_stores_lht;
                        ?>
                    </span>
                </h4>
            </div>
        <?php endif; ?>
        <div class="bxslider slider-agency-custom">
            <?php $i = 0; ?>
            <?php foreach ($list_stores_lhts as $key => $list_stores_lht):?>
                <div class="col-xxs-12 col-xs-6 col-sm-3 col-md-3 store-item">
                    <div class="store-item-inner">
                        <a target="_blank" title="<?php echo $list_stores_lht['title_image']; ?>" href="<?php echo $list_stores_lht['link_to_store_lht']; ?>">
                            <img class="img-vertical-center" class="img-<?php echo $i; $i+=1; ?>" alt="<?php  echo $list_stores_lht['title_image']; ?>" src="<?php echo $list_stores_lht['image']['url']; ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>