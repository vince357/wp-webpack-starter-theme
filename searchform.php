<?php
/**
 * The template for displaying native search form
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="visually-hidden"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="search-field form-control"
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="search-submit btn btn-primary"
    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>