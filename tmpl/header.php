<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_pxlpicker
 *
 * @copyright   Christian Friedemann = https://pixelstun.de
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined( '_JEXEC' ) or die;
?>
<div class="header">
    <?php if ( ! empty ( $url ) ): ?>
        <a href="<?php echo $url ?>">
    <?php endif; ?>

    <img src="<?php echo $path ?>" alt="<?php echo $alt ?>" <?php if ($id): ?> id="<?php echo $id ?>" <?php endif; ?> class="<?php echo $class ?>"/>

    <?php if ( ! empty ( $url ) ): ?>
        </a>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"> <?php echo $title ?></h2>
            </div>
        </div>
    </div>
</div>
