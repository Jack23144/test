<?php
/**
 * Mobile account element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

$icon_style = flatsome_option('account_icon_style');
?>
<li class="account-item has-icon">
<?php if($icon_style && $icon_style !== 'image' && $icon_style !== 'plain') echo '<div class="header-button">'; ?>
	<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
	class="account-link-mobile <?php echo get_flatsome_icon_class($icon_style, 'small');?>" title="<?php _e('حساب کاربری من', 'woocommerce'); ?>">
	  <?php echo get_flatsome_icon('icon-user'); ?>
	</a>
<?php if($icon_style && $icon_style !== 'image' && $icon_style !== 'plain') echo '</div>'; ?>
</li>
