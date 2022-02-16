<?php
// Remove WP version number in HTML source
function remove_version() { return ''; } add_filter('the_generator', 'remove_version');