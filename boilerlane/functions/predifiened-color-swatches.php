<?php
function load_javascript_on_admin_edit_post_page() {
	global $parent_file;

  // If we're on the edit post page.
	if (
	  strpos($parent_file, 'post-new.php') !== -1 ||
	  strpos($parent_file, 'edit.php') !== -1 ||
	  strpos($parent_file, 'post.php') !== -1
	) {
		echo "
		  <script>
		  jQuery(document).ready(function(){
			jQuery('.color_picker').iris({
			  palettes: ['#031649', '#FFF', '#CCC', '#999', '#666', '#333', '#000'],
			  change: function(event, ui){
				jQuery(this).parents('.wp-picker-container').find('.wp-color-result').css('background-color', ui.color.toString());
			  }
			});
		  });
		  </script>
		";
	}
}
add_action('in_admin_footer', 'load_javascript_on_admin_edit_post_page');
  ?>