<?php $content_types_url = add_query_arg(array('tab' => 'plugin-information', 'plugin' => 'cpo-content-types', 'TB_iframe' => 'true', 'width' => '640', 'height' => '500'), admin_url('plugin-install.php')); ?>
<?php $content_types = '<strong><a class="thickbox" href="'.$content_types_url.'">CPO Content Types</a></strong>'; ?>
<div class="feature-section three-col">

	<div class="col">
		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Contact Support', 'allegiant' ); ?></h3>
		<p>
			<i><?php esc_html_e( 'We offer excellent support through our advanced ticketing system. Make sure to register your purchase before contacting support!', 'allegiant' ) ?></i>
		</p>
		<p><a target="_blank"  class="button button-primary"
		      href="<?php echo esc_url( 'https://cpothemes.com/support' ); ?>"><?php esc_html_e( 'Contact Support', 'allegiant' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="col">
		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Documentation', 'allegiant' ); ?></h3>
		<p>
			<i><?php esc_html_e( 'This is the place to go to reference different aspects of the theme. Our online documentation is an incredible resource for learning the ins and outs of using Allegiant.', 'allegiant' ) ?></i>
		</p>
		<p>
			<a target="_blank" href="<?php echo esc_url( 'https://cpothemes.com/documentation' ); ?>"><?php esc_html_e( 'See our full documentation', 'allegiant' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="col">
		<h3><i class="dashicons dashicons-portfolio"></i><?php esc_html_e( 'Changelog', 'allegiant' ); ?></h3>
		<p>
			<i><?php esc_html_e( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'allegiant' ) ?></i>
		</p>
		<p>
			<a target="_blank"  href="<?php echo esc_url( admin_url( 'themes.php?page=cpotheme-welcome&tab=changelog' ) ); ?>"><?php esc_html_e( 'See changelog', 'allegiant' ); ?></a>
		</p>
	</div><!--/.col-->

	</div>
