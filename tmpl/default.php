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
<?php if ( ! empty ( $url ) ): ?>
    <a href="<?php echo $url ?>">
<?php endif; ?>

<img src="<?php echo $path ?>" alt="<?php echo $alt ?>" id="<?php echo $id ?>" class="<?php echo $class ?>"/>

<?php if ( ! empty ( $url ) ): ?>
    </a>
<?php endif; ?>
