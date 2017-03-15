<?php 

//Define customizer sections
if(!function_exists('cpotheme_metadata_panels')){
	function cpotheme_metadata_panels(){
		$data = array();
		
		$data['cpotheme_layout'] = array(
		'title' => __('Layout', 'allegiant'),
		'description' => __('Here you can find settings that control the structure and positioning of specific elements within your website.', 'allegiant'),
		'priority' => 25);
		
		return apply_filters('cpotheme_customizer_panels', $data);
	}
}


//Define customizer sections
if(!function_exists('cpotheme_metadata_sections')){
	function cpotheme_metadata_sections(){
		$data = array();
		
		$data['cpotheme_upsell'] = array(
		'title' => __('Allegiant Pro', 'allegiant'),
		'capability' => 'edit_theme_options',
		'priority' => 10);

		$data['cpotheme_management'] = array(
		'title' => __('General Theme Options', 'allegiant'),
		'description' => __('Options that help you manage your theme better.', 'allegiant'),
		'capability' => 'edit_theme_options',
		'priority' => 15);
		
		$data['cpotheme_layout_general'] = array(
		'title' => __('Site Wide Structure', 'allegiant'),
		'description' => sprintf(__('Upgrade to %s to control the layout of your sidebars and other global elements.', 'allegiant'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 25);
		
		$data['cpotheme_layout_home'] = array(
		'title' => __('Homepage', 'allegiant'),
		'description' => sprintf(__('Upgrade to %s to control the ordering of elements in the homepage as well as its behavior.', 'allegiant'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 50);
		
		if(defined('CPOTHEME_USE_SLIDES') && CPOTHEME_USE_SLIDES == true){
			$data['cpotheme_layout_slider'] = array(
			'title' => __('Slider', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to customize the behavior of the slider.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_FEATURES') && CPOTHEME_USE_FEATURES == true){
			$data['cpotheme_layout_features'] = array(
			'title' => __('Features', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to customize the columns and appearance of the feature blocks.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_PORTFOLIO') && CPOTHEME_USE_PORTFOLIO == true){
			$data['cpotheme_layout_portfolio'] = array(
			'title' => __('Portfolio', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to control the number of portfolio columns, related portfolio items, and overall appearance.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_SERVICES') && CPOTHEME_USE_SERVICES == true){
			$data['cpotheme_layout_services'] = array(
			'title' => __('Services', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to control the number of columns for services.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_TEAM') && CPOTHEME_USE_TEAM == true){
			$data['cpotheme_layout_team'] = array(
			'title' => __('Team Members', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to control the number of columns of the team section.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_TESTIMONIALS') && CPOTHEME_USE_TESTIMONIALS == true){
			$data['cpotheme_layout_testimonials'] = array(
			'title' => __('Testimonials', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to customize the appearance of testimonials.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_CLIENTS') && CPOTHEME_USE_CLIENTS == true){
			$data['cpotheme_layout_clients'] = array(
			'title' => __('Clients', 'allegiant'),
			'description' => sprintf(__('Upgrade to %s to customize the appearance of clients.', 'allegiant'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		$data['cpotheme_typography'] = array(
		'title' => __('Typography', 'allegiant'),
		'description' => __('Custom typefaces for the entire site.', 'allegiant'),
		'capability' => 'edit_theme_options',
		'priority' => 45);

		$data['cpotheme_layout_posts'] = array(
		'title' => __('Blog Posts', 'allegiant'),
		'description' => sprintf(__('Upgrade to %s to control the appearance of specific elements in your blog posts such as dates, authors, or comments.', 'allegiant'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 50);
		
		$data['cpotheme_typography'] = array(
		'title' => __('Typography', 'allegiant'),
		'description' => sprintf(__('Upgrade to %s to control the gain full control over the typography of your site.', 'allegiant'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'priority' => 45);
		
		return apply_filters('cpotheme_customizer_sections', $data);
	}
}


if(!function_exists('cpotheme_metadata_customizer')){
	function cpotheme_metadata_customizer($std = null){
		$data = array();

		$data['general_upsell'] = array(
		'section'      => 'cpotheme_upsell',
		'type'		   => 'mte-upsell',
        'options'      => array(
            esc_html__( 'Slider options', 'allegiant' ),
            esc_html__( 'Improved Tagline', 'allegiant' ),
            esc_html__( 'More Sections', 'allegiant' ),
            esc_html__( 'Reorder Sections', 'allegiant' ),
            esc_html__( 'Sections Description', 'allegiant' ),
            esc_html__( 'Custom Colors', 'allegiant' ),
            esc_html__( 'Custom Typography', 'allegiant' ),
        ),
        'requirements' => array(
            esc_html__( 'You can set the slider height. Also you can control the speed and the duration of a slide.', 'allegiant' ),
            esc_html__( 'In Allegian Pro tagline is transform in a CTA section with button and description.', 'allegiant' ),
            esc_html__( 'Now you can add your shop products on Homepage.', 'allegiant' ),
            esc_html__( 'You can order Homepage sections how you want', 'allegiant' ),
            esc_html__( 'Get in-content banner areas - blend your ads with the posts for a better click-through rate.', 'allegiant' ),
            esc_html__( 'For each sections apart from title you can also add a description for users to better understand your sections content', 'allegiant' ),
            esc_html__( 'You can change your site colors directly from Customizer.', 'allegiant' ),
            esc_html__( 'You can change your site conts directly from Customizer.', 'allegiant' ),
        ),
        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
		);
		
		$data['general_logo'] = array(
		'label' => __('Custom Logo', 'allegiant'),
		'description' => __('Insert the URL of an image to be used as a custom logo.', 'allegiant'),
		'section' => 'title_tagline',
		'sanitize' => 'esc_url',
		'type' => 'image',
		'partials' => '#logo .site-logo'
		);
		
		$data['general_logo_width'] = array(
		'label' => __('Logo Width (px)', 'allegiant'),
		'description' => __('Forces the logo to have a specified width.', 'allegiant'),
		'section' => 'title_tagline',
		'type' => 'text',
		'placeholder' => '(none)',
		'sanitize' => 'absint',
		'width' => '100px');
		
		$data['general_texttitle'] = array(
		'label' => __('Enable Text Title?', 'allegiant'),
		'description' => __('Activate this to display the site title as text.', 'allegiant'),
		'section' => 'title_tagline',
		'type' => 'checkbox',
		'sanitize' => 'cpotheme_sanitize_bool',
		'std' => false);
		
		$data['general_editlinks'] = array(
		'label' => __('Show Edit Links', 'allegiant'),
		'description' => __('Display edit links on the site layout for logged in users.', 'allegiant'),
		'section' => 'cpotheme_management',
		'type' => 'checkbox',
		'sanitize' => 'cpotheme_sanitize_bool',
		'std' => '1');
		
		//Layout
		$data['home_upsell'] = array(
		'section'      => 'cpotheme_layout_home',
		'type'		   => 'mte-upsell',
        'options'      => array(
            esc_html__( 'Improved Tagline', 'allegiant' ),
            esc_html__( 'Reorder Sections', 'allegiant' ),
        ),
        'requirements' => array(
            esc_html__( 'In Allegian Pro tagline is transform in a CTA section with button and description.', 'allegiant' ),
            esc_html__( 'You can order Homepage sections how you want', 'allegiant' ),
        ),
        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
		);		
		$data['home_tagline'] = array(
		'label' => __('Tagline Title', 'allegiant'),
		'section' => 'cpotheme_layout_home',
		'empty' => true,
		'multilingual' => true,
		'default' => __('Add your custom tagline here.', 'allegiant'),
		'sanitize' => 'wp_kses_post',
		'type' => 'textarea',
		'partials' => '#tagline .container'
		);

		
		//Homepage Slider
		if(defined('CPOTHEME_USE_SLIDES') && CPOTHEME_USE_SLIDES == true){
			$data['slider_settings'] = array(
			'label' => __('Slider Options', 'allegiant'),
			'description' => __('Customize the speed, timeout and effects of the homepage slider.', 'allegiant'),
			'section' => 'cpotheme_layout_slider',
			'type' => 'label');
		}
		
		//Homepage Features
		if(defined('CPOTHEME_USE_FEATURES') && CPOTHEME_USE_FEATURES == true){
			$data['features_upsell'] = array(
			'section'      => 'cpotheme_layout_features',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Features Columns', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your features.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_features'] = array(
			'label' => __('Features Description', 'allegiant'),
			'section' => 'cpotheme_layout_features',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Our core features', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#features #features-heading'
			);
		}
		
		//Portfolio layout
		if(defined('CPOTHEME_USE_PORTFOLIO') && CPOTHEME_USE_PORTFOLIO == true){
			$data['portfolio_upsell'] = array(
			'section'      => 'cpotheme_layout_portfolio',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Portfolio Columns', 'allegiant' ),
	            esc_html__( 'Related Portfolios', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your portfolio.', 'allegiant' ),
	            esc_html__( 'You can enable related portfolio.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_portfolio'] = array(
			'label' => __('Portfolio Description', 'allegiant'),
			'section' => 'cpotheme_layout_portfolio',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Take a look at our work', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#portfolio #portfolio-heading'
			);
		}
		
		//Services layout
		if(defined('CPOTHEME_USE_SERVICES') && CPOTHEME_USE_SERVICES == true){
			$data['services_upsell'] = array(
			'section'      => 'cpotheme_layout_services',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Services Columns', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your services.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_services'] = array(
			'label' => __('Services Description', 'allegiant'),
			'section' => 'cpotheme_layout_services',
			'empty' => true,
			'multilingual' => true,
			'default' => __('What we can offer you', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#services #services-heading'
			);
		}
		
		//Services layout
		if(defined('CPOTHEME_USE_TEAM') && CPOTHEME_USE_TEAM == true){
			$data['team_upsell'] = array(
			'section'      => 'cpotheme_layout_team',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Team Columns', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your team members.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_team'] = array(
			'label' => __('Team Members Description', 'allegiant'),
			'section' => 'cpotheme_layout_team',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Meet our team', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#team #team-heading'
			);
		}
		
		//Testimonials
		if(defined('CPOTHEME_USE_TESTIMONIALS') && CPOTHEME_USE_TESTIMONIALS == true){
			$data['testimonials_upsell'] = array(
			'section'      => 'cpotheme_layout_testimonials',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Testimonials Columns', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your testimonials.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_testimonials'] = array(
			'label' => __('Testimonials Description', 'allegiant'),
			'section' => 'cpotheme_layout_testimonials',
			'empty' => true,
			'multilingual' => true,
			'default' => __('What they say about us', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#testimonials #testimonials-heading'
			);
		}
		
		//Clients
		if(defined('CPOTHEME_USE_CLIENTS') && CPOTHEME_USE_CLIENTS == true){
			$data['clients_upsell'] = array(
			'section'      => 'cpotheme_layout_clients',
			'type'		   => 'mte-upsell',
	        'options'      => array(
	            esc_html__( 'Add Description', 'allegiant' ),
	            esc_html__( 'Clients Columns', 'allegiant' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'Apart from title you can also add a description for users to better understand your section content', 'allegiant' ),
	            esc_html__( 'You can select on how many Columns you want to show your clients.', 'allegiant' ),
	        ),
	        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
			);
			$data['home_clients'] = array(
			'label' => __('Clients Description', 'allegiant'),
			'section' => 'cpotheme_layout_clients',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Featured clients', 'allegiant'),
			'sanitize' => 'wp_kses_post',
			'type' => 'textarea',
			'partials' => '#clients #clients-heading'
			);
		}
		
		//Blog Posts
		$data['home_posts'] = array(
		'label' => __('Enable Posts On Homepage', 'allegiant'),
		'section' => 'cpotheme_layout_posts',
		'type' => 'checkbox',
		'sanitize' => 'cpotheme_sanitize_bool',
		'default' => false);
		
		//Typography
		$data['type_settings'] = array(
		'label' => __('Typography Options', 'allegiant'),
		'description' => __('Select custom fonts for the headings, navigation, and body text of your site.', 'allegiant'),
		'section' => 'cpotheme_typography',
		'type' => 'label');
		
		//Colors
		$data['colors_upsell'] = array(
		'section'      => 'colors',
		'type'		   => 'mte-upsell',
		'priority'	   => 0,
        'options'      => array(
            esc_html__( 'Custom Colors', 'allegiant' ),
        ),
        'requirements' => array(
            esc_html__( 'You can change your site colors directly from Customizer.', 'allegiant' ),
        ),
        'button_url'   => esc_url( 'https://cpothemes.com/theme/allegiant' ),
        'button_text'  => esc_html__( 'Get the PRO version!', 'allegiant' ),
		);
		$data['color_settings'] = array(
		'label' => __('Color Options', 'allegiant'),
		'description' => __('Customize the colors of primary and secondary elements, as well as headings, navigation, and text.', 'allegiant'),
		'section' => 'colors',
		'type' => 'label');

		
		return apply_filters('cpotheme_customizer_controls', $data);
	}
}