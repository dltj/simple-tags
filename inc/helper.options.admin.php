<?php
return array(
	'features' => array(
		array('active_mass_edit', __('Mass edit terms', 'simpletags'), 'checkbox', '1',
			__('This feature allow to edit terms of any taxonomy for many posts per page.', 'simpletags')),
		array('active_manage', __('Advanced Manage Terms', 'simpletags'), 'checkbox', '1',
			__('This feature allow to edit, merge, delete, add terms for any taxonomy. Please consider the plugin <a href="http://wordpress.org/extend/plugins/term-management-tools/" target="_blank">Term Management Tools</a> if you only need to merge terms.', 'simpletags')),
		array('active_autotags', __('Auto terms posts', 'simpletags'), 'checkbox', '1',
			__('This feature allow to add automatically terms on a post by proceding to a search into content.', 'simpletags')),
		array('use_tag_pages', __('Tags for page', 'simpletags'), 'checkbox', '1',
			__('This feature allow page post type to be tagged. This option add pages in tags search. Also add tag management in write page.', 'simpletags')),
		array('allow_embed_tcloud', __('Tag cloud Shortcode', 'simpletags'), 'checkbox', '1',
			__('Enabling this will allow Wordpress to look for tag cloud shortcode <code>[st_tag_cloud]</code> or <code>[st-tag-cloud]</code> when displaying posts. WordPress replace this shortcode by a tag cloud.', 'simpletags'))	
	),
	'administration' => array(
		array('use_click_tags', __('Activate click tags feature:', 'simpletags'), 'checkbox', '1',
			__('This feature add a link allowing you to display all the tags of your database. Once displayed, you can click over to add tags to post.', 'simpletags')),
		array('order_click_tags', __('Click tags order', 'simpletags'), 'dropdown', 'count-asc/count-desc/name-asc/name-desc/random',
			'<ul>
				<li>'.__('<code>count-asc</code> &ndash; Least used.', 'simpletags').'</li>
				<li>'.__('<code>count-desc</code> &ndash; Most popular. (default)', 'simpletags').'</li>
				<li>'.__('<code>name-asc</code> &ndash; Alphabetical.', 'simpletags').'</li>
				<li>'.__('<code>name-desc</code> &ndash; Inverse Alphabetical.', 'simpletags').'</li>
				<li>'.__('<code>random</code> &ndash; Random.', 'simpletags').'</li>
			</ul>'),
		array('use_autocompletion', __('Activate autocompletion feature with old input:', 'simpletags'), 'checkbox', '1',
			__('This feature displays a visual help allowing to enter tags more easily. As well add tags is easier than the autocompletion default of WordPress', 'simpletags')),
		array('use_suggested_tags', __('Activate suggested tags feature: (Yahoo! Term Extraction API, OpenCalais, Alchemy, Zemanta, Tag The Net, Local DB)', 'simpletags'), 'checkbox', '1',
			__('This feature add a box allowing you get suggested tags, by comparing post content and various sources of tags. (external and internal)', 'simpletags')),
		array('opencalais_key', __('OpenCalais API Key', 'simpletags'), 'text', '',
			__('You can create an API key from <a href="http://www.opencalais.com/">service website</a>', 'simpletags')),
		array('alchemy_api', __('Alchemy API Key', 'simpletags'), 'text', '',
			__('You can create an API key from <a href="http://www.alchemyapi.com/">service website</a>', 'simpletags')),
		array('zemanta_key', __('Zemanta API Key', 'simpletags'), 'text', '',
			__('You can create an API key from <a href="http://developer.zemanta.com/">service website</a>', 'simpletags'))
	),
	'auto-links' => array(
		array('auto_link_tags', __('Active auto link tags into post content:', 'simpletags'), 'checkbox', '1',
			__('Example: You have a tag called "WordPress" and your post content contains "wordpress", this feature will replace "wordpress" by a link to "wordpress" tags page. (http://myblog.net/tag/wordpress/)', 'simpletags')),
		array('auto_link_min', __('Min usage for auto link tags:', 'simpletags'), 'text', '1',
			__('This parameter allows to fix a minimal value of use of tags. Default: 1.', 'simpletags')),
		array('auto_link_max_by_post', __('Maximum number of links per article:', 'simpletags'), 'text', '10',
			__('This setting determines the maximum number of links created by article. Default: 10.', 'simpletags')),
		array('auto_link_max_by_tag', __('Maximum number of links for the same tag:', 'simpletags'), 'text', '10',
			__('This setting determines the maximum number of links created by article for the same tag. Default: 1.', 'simpletags')),	
		array('auto_link_case', __('Ignore case for auto link feature ?', 'simpletags'), 'checkbox', '1',
			__('Example: If you ignore case, auto link feature will replace the word "wordpress" by the tag link "WordPress".', 'simpletags')),
		array('auto_link_exclude', __('Exclude some terms from tag link. For Ads Link subtition, etc.', 'simpletags'), 'text', '',
			__('Example: If you enter the term "Paris", the auto link tags feature will never replace this term by this link.', 'simpletags')),
		array('auto_link_priority', __('Priority on hook the_content', 'simpletags'), 'text', '12',
			__('For expert, possibility to change the priority of autolinks functions on the_content hook. Useful for fix a conflict with an another plugin. Default: 12.', 'simpletags')),
	),
	'tagcloud' => array(
		array('text_helper', 'text_helper', 'helper', '', __('Which difference between <strong>&#8216;Order tags selection&#8217;</strong> and <strong>&#8216;Order tags display&#8217;</strong> ?<br />', 'simpletags')
			. '<ul style="list-style:square;margin-left:20px;">
				<li>'.__('<strong>&#8216;Order tags selection&#8217;</strong> is the first step during tag\'s cloud generation, corresponding to collect tags.', 'simpletags').'</li>
				<li>'.__('<strong>&#8216;Order tags display&#8217;</strong> is the second. Once tags choosen, you can reorder them before display.', 'simpletags').'</li>
			</ul>'.
			__('<strong>Example:</strong> You want display randomly the 100 tags most popular.<br />', 'simpletags').
			__('You must set &#8216;Order tags selection&#8217; to <strong>count-desc</strong> for retrieve the 100 tags most popular and &#8216;Order tags display&#8217; to <strong>random</strong> for randomize cloud.', 'simpletags')),
		array('cloud_selectionby', __('Order by for tags selection:', 'simpletags'), 'dropdown', 'count/name/random',
			'<ul>
				<li>'.__('<code>count</code> &ndash; Counter.', 'simpletags').'</li>
				<li>'.__('<code>name</code> &ndash; Name.', 'simpletags').'</li>
				<li>'.__('<code>random</code> &ndash; Random. (default)', 'simpletags').'</li>
			</ul>'),
		array('cloud_selection', __('Order tags selection:', 'simpletags'), 'dropdown', 'asc/desc',
			'<ul>
				<li>'.__('<code>asc</code> &ndash; Ascending.', 'simpletags').'</li>
				<li>'.__('<code>desc</code> &ndash; Descending.', 'simpletags').'</li>
			</ul>'),
		array('cloud_orderby', __('Order by for tags display:', 'simpletags'), 'dropdown', 'count/name/random',
			'<ul>
				<li>'.__('<code>count</code> &ndash; Counter.', 'simpletags').'</li>
				<li>'.__('<code>name</code> &ndash; Name.', 'simpletags').'</li>
				<li>'.__('<code>random</code> &ndash; Random. (default)', 'simpletags').'</li>
			</ul>'),
		array('cloud_order', __('Order tags display:', 'simpletags'), 'dropdown', 'asc/desc',
			'<ul>
				<li>'.__('<code>asc</code> &ndash; Ascending.', 'simpletags').'</li>
				<li>'.__('<code>desc</code> &ndash; Descending.', 'simpletags').'</li>
			</ul>'),
		array('cloud_format', __('Tags cloud type format:', 'simpletags'), 'dropdown', 'list/flat',
			'<ul>
				<li>'.__('<code>list</code> &ndash; Display a formatted list (ul/li).', 'simpletags').'</li>
				<li>'.__('<code>flat</code> &ndash; Display inline (no list, just a div)', 'simpletags').'</li>
			</ul>'),
		array('cloud_xformat', __('Tag link format:', 'simpletags'), 'text', 80,
			__('You can find markers and explanations <a href="http://redmine.beapi.fr/wiki/simple-tags/Theme_integration">in the online documentation.</a>', 'simpletags')),
		array('cloud_limit_qty', __('Maximum number of tags to display: (default: 45)', 'simpletags'), 'text', 10),
		array('cloud_notagstext', __('Enter the text to show when there is no tag:', 'simpletags'), 'text', 80),
		array('cloud_title', __('Enter the positioned title before the list, leave blank for no title:', 'simpletags'), 'text', 80),
		array('cloud_max_color', __('Most popular color:', 'simpletags'), 'text-color', 10,
			__("The colours are hexadecimal colours,  and need to have the full six digits (#eee is the shorthand version of #eeeeee).", 'simpletags')),
		array('cloud_min_color', __('Least popular color:', 'simpletags'), 'text-color', 10),
		array('cloud_max_size', __('Most popular font size:', 'simpletags'), 'text', 10,
			__("The two font sizes are the size of the largest and smallest tags.", 'simpletags')),
		array('cloud_min_size', __('Least popular font size:', 'simpletags'), 'text', 10),
		array('cloud_unit', __('The units to display the font sizes with, on tag clouds:', 'simpletags'), 'dropdown', 'pt/px/em/%',
			__("The font size units option determines the units that the two font sizes use.", 'simpletags')),
		array('cloud_adv_usage', __('<strong>Advanced usage</strong>:', 'simpletags'), 'text', 80,
			__('You can use the same syntax as <code>st_tag_cloud()</code> function to customize display. See <a href="http://redmine.beapi.fr/wiki/simple-tags/Theme_integration">documentation</a> for more details.', 'simpletags'))
	),
	'metakeywords' => array(
		array('text_helper', 'text_helper', 'helper', '', __('This feature has been removed from Simple Tags because it is not relevant enough and there are better plugins like<br />', 'simpletags')
			. '<ul style="list-style:square;margin-left:20px;">
				<li><a href="http://wordpress.org/extend/plugins/seo-ultimate/" target="_blank">SEO Ultimate</a></li>
				<li><a href="http://wordpress.org/extend/plugins/platinum-seo-pack/" target="_blank">Platinum SEO Pack</a></li>
				<li><a href="http://wordpress.org/extend/plugins/wordpress-seo/" target="_blank">WordPress SEO by Yoast</a></li>
			</ul>' )
	),
	'tagspost' => array(
		array('tt_feed', __('Automatically display tags list into feeds', 'simpletags'), 'checkbox', '1'),
		array('tt_embedded', __('Automatically display tags list into post content:', 'simpletags'), 'dropdown', 'no/all/blogonly/feedonly/homeonly/singularonly/pageonly/singleonly',
			'<ul>
				<li>'.__('<code>no</code> &ndash; Nowhere (default)', 'simpletags').'</li>
				<li>'.__('<code>all</code> &ndash; On your blog and feeds.', 'simpletags').'</li>
				<li>'.__('<code>blogonly</code> &ndash; Only on your blog.', 'simpletags').'</li>
				<li>'.__('<code>homeonly</code> &ndash; Only on your home page.', 'simpletags').'</li>
				<li>'.__('<code>singularonly</code> &ndash; Only on your singular view (single & page).', 'simpletags').'</li>
				<li>'.__('<code>singleonly</code> &ndash; Only on your single view.', 'simpletags').'</li>
				<li>'.__('<code>pageonly</code> &ndash; Only on your page view.', 'simpletags').'</li>
			</ul>'),
		array('tt_separator', __('Post tag separator string:', 'simpletags'), 'text', 10),
		array('tt_before', __('Text to display before tags list:', 'simpletags'), 'text', 40),
		array('tt_after', __('Text to display after tags list:', 'simpletags'), 'text', 40),
		array('tt_number', __('Max tags display:', 'simpletags'), 'text', 10,
			__('You must set zero (0) for display all tags.', 'simpletags')),
		array('tt_inc_cats', __('Include categories in result ?', 'simpletags'), 'checkbox', '1'),
		array('tt_xformat', __('Tag link format:', 'simpletags'), 'text', 80,
			__('You can find markers and explanations <a href="http://redmine.beapi.fr/wiki/simple-tags/Theme_integration">in the online documentation.</a>', 'simpletags')),
		array('tt_notagstext', __('Text to display if no tags found:', 'simpletags'), 'text', 80),
		array('tt_adv_usage', __('<strong>Advanced usage</strong>:', 'simpletags'), 'text', 80,
			__('You can use the same syntax as <code>st_the_tags()</code> function to customize display. See <a href="http://redmine.beapi.fr/wiki/simple-tags/Theme_integration">documentation</a> for more details.', 'simpletags'))
	),
	'relatedposts' => array(
		array('text_helper', 'text_helper', 'helper', '', __('This feature has been removed from Simple Tags because it is not relevant enough and there are better plugins like<br />', 'simpletags')
			. '<ul style="list-style:square;margin-left:20px;">
				<li><a href="http://wordpress.org/extend/plugins/similar-posts/" target="_blank">Similar Posts</a></li>
				<li><a href="http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/" target="_blank">Yet Another Related Posts Plugin</a></li>
			</ul>' )
	),
	'relatedtags' => array(
		array('text_helper', 'text_helper', 'helper', '', __('This feature has been removed from Simple Tags because it is not relevant enough and there are better plugins like<br />', 'simpletags')
			. '<ul style="list-style:square;margin-left:20px;">
				<li><a href="http://wordpress.org/extend/plugins/query-multiple-taxonomies/" target="_blank">Query Multiple Taxonomies</a></li>
			</ul>' )
	),
);
?>