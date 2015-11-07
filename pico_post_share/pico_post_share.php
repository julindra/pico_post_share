<?php

/**
 * Share your post to social media
 * @author Renhard Julindra (http://renhard.net)
 * @link https://github.com/julindra/pico_post_share
 */

class Pico_Post_Share {
	public function before_render(&$twig_vars, &$twig) {
		$twig_vars['pico_post_share'] = '
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->';
    }
}