<?php
/**
 * The template for displaying search forms in Innova
 *
 * @package WordPress
 * @subpackage MiniBuzz
 * @since MiniBuzz 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="searcharea">
    <input type="text" name="s" id="s" value=""  />
    <input type="submit" class="searchbutton" value="" />
</div>
</form>