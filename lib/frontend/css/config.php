<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-search' : '.sv100_sv_content_wrapper article .wp-block-search',
		array_merge(
			$script->get_parent()->get_setting('padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('margin')->get_css_data(),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);