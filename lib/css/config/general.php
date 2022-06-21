<?php
	echo $_s->build_css(
		'body .wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);