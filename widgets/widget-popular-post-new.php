<?php

add_action( 'wp_enqueue_scripts', 'vw_new_most_popular_lists' );
if ( ! function_exists( 'vw_new_most_popular_lists' ) ) {
	function vw_new_most_popular_lists(){
		wp_enqueue_script( 'vwjs-most-popular-lists', get_template_directory_uri() . '/js/mostPopular.js', array(), VW_THEME_VERSION, VW_CONST_ENQUEUE_SCRIPTS_ON_FOOTER );
	}
}

add_action( 'widgets_init', 'vw_widgets_init_popular_post' );
if ( ! function_exists( 'vw_widgets_init_popular_post' ) ) {
	function vw_widgets_init_popular_post() {
		register_widget( 'Vw_widget_popular_post' );
	}
}

if ( ! class_exists( 'Vw_widget_popular_post' ) ) {
	class Vw_widget_popular_post extends WP_Widget {
		private $default = array(
			'title' => '',
			'count' => '5',
		);

		public function __construct() {
			// widget actual processes
			parent::__construct(
		 		'vw_widget_popular_post', // Base ID
				VW_THEME_NAME.': Popular Posts', // Name
				array( 'description' => 'Display popular posts in a tabbed style' ) // Args
			);
		}

		function widget( $args, $instance ) {
			extract($args);

			$count = intval( $instance['count'] );

			if ( function_exists( 'icl_t' ) ) {
				$instance['title'] = icl_t( VW_THEME_NAME.' Widget', $this->id.'_title', $instance['title'] );
			}

			if ( ! empty( $instance['title'] ) ) {
				$title = apply_filters( 'widget_title', wp_kses_data( $instance['title'] ), $instance, $this->id_base);
			}

			echo $before_widget;

			if ( $instance['title'] ) {
				echo $before_title . $title . $after_title;
			}

			?>

			<div id="most-popular-list" class="tabs tabbed-list">
				<div class="tab">
					<input type="radio" id="tab-1" name="tab-group-1" checked>
					<label id="tab-label-1" for="tab-1">Week</label>

					<div class="content updated">
						<ol id="most-popular-week"><li><a href="https://www.which-50.com/how-cloud-computing-helps-improve-customer-experience">How cloud computing helps improve customer experience</a><span><time><i class="icon-entypo-clock"></i> 25 October, 2019</time></span></li><li><a href="https://www.which-50.com/kmart-group-to-train-1400-staff-on-aws-cloud-skills-in-2019">Kmart Group to train 1,400 staff on AWS cloud skills in 2019</a><span><time><i class="icon-entypo-clock"></i> 25 October, 2019</time></span></li><li><a href="https://www.which-50.com/splunk-moves-from-the-back-office-to-the-spotlight">Splunk moves from the back office to the spotlight</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/amazon-races-up-interbrands-list-of-most-valuable-brands-as-facebook-slips">Amazon races up Interbrand’s list of most valuable brands as Facebook slips</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/tight-timeline-puts-open-banking-participants-under-pressure">Tight timeline puts open banking participants under pressure</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/seven-west-media-taps-aws-ai-for-tv-ad-context">Seven West Media Taps AWS AI for TV Ad Context</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/using-analytics-to-break-up-human-trafficking">Using analytics to break up human trafficking</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/acs-appoints-pauline-fetaui-as-river-city-labs-general-manager">ACS appoints Pauline Fetaui as River City Labs’ General Manager</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li><li><a href="https://www.which-50.com/former-sap-ceo-bill-mcdermott-will-be-the-new-ceo-of-servicenow">Former SAP CEO Bill McDermott will be the new CEO of ServiceNow</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li><li><a href="https://www.which-50.com/deloitte-acquires-presence-of-it-creating-largest-and-most-capable-human-capital-consultancy-in-apac">Deloitte acquires Presence of IT, creating ‘largest and most capable’ human capital consultancy in APAC</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"><li><a href="https://www.which-50.com/how-cloud-computing-helps-improve-customer-experience">How cloud computing helps improve customer experience</a><span><time><i class="icon-entypo-clock"></i> 25 October, 2019</time></span></li><li><a href="https://www.which-50.com/kmart-group-to-train-1400-staff-on-aws-cloud-skills-in-2019">Kmart Group to train 1,400 staff on AWS cloud skills in 2019</a><span><time><i class="icon-entypo-clock"></i> 25 October, 2019</time></span></li><li><a href="https://www.which-50.com/splunk-moves-from-the-back-office-to-the-spotlight">Splunk moves from the back office to the spotlight</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/amazon-races-up-interbrands-list-of-most-valuable-brands-as-facebook-slips">Amazon races up Interbrand’s list of most valuable brands as Facebook slips</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/tight-timeline-puts-open-banking-participants-under-pressure">Tight timeline puts open banking participants under pressure</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/seven-west-media-taps-aws-ai-for-tv-ad-context">Seven West Media Taps AWS AI for TV Ad Context</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/using-analytics-to-break-up-human-trafficking">Using analytics to break up human trafficking</a><span><time><i class="icon-entypo-clock"></i> 24 October, 2019</time></span></li><li><a href="https://www.which-50.com/acs-appoints-pauline-fetaui-as-river-city-labs-general-manager">ACS appoints Pauline Fetaui as River City Labs’ General Manager</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li><li><a href="https://www.which-50.com/former-sap-ceo-bill-mcdermott-will-be-the-new-ceo-of-servicenow">Former SAP CEO Bill McDermott will be the new CEO of ServiceNow</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li><li><a href="https://www.which-50.com/deloitte-acquires-presence-of-it-creating-largest-and-most-capable-human-capital-consultancy-in-apac">Deloitte acquires Presence of IT, creating ‘largest and most capable’ human capital consultancy in APAC</a><span><time><i class="icon-entypo-clock"></i> 23 October, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-3" name="tab-group-1">
					<label id="tab-label-3" for="tab-3">All Time</label>

					<div class="content">
						<ol id="most-popular-all-time"><li><a href="https://www.which-50.com/word-link-one-of-google-plays-most-popular-games-looks-like-an-ad-fraud-say-researchers">One of Google Play’s most popular games is an ad fraud platform, say researchers</a><span><time><i class="icon-entypo-clock"></i> 15 January, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-why-australia-can-be-the-global-agtech-leader-and-why-it-isnt-yet">Cover Story: Australia Could Lead the World in AgTech. Or We Might Just Bugger it Up, Again</a><span><time><i class="icon-entypo-clock"></i> 6 August, 2018</time></span></li><li><a href="https://www.which-50.com/cover-story-no-mans-land">Cover Story: No Man’s Land</a><span><time><i class="icon-entypo-clock"></i> 30 July, 2018</time></span></li><li><a href="https://www.which-50.com/men-sucking">Men, Sucking</a><span><time><i class="icon-entypo-clock"></i> 30 July, 2018</time></span></li><li><a href="https://www.which-50.com/cover-story-adtech-wont-fix-ad-fraud-because-it-makes-them-too-much-money-say-specialists">Cover story: Adtech won’t fix ad fraud because it is too lucrative, say specialists</a><span><time><i class="icon-entypo-clock"></i> 18 June, 2018</time></span></li><li><a href="https://www.which-50.com/cover-story-six-months-on-and-australia-is-waiting-for-amazon-to-hit-the-accelerator">COVER STORY: Six Months on and Australia is Waiting for Amazon to Hit the Accelerator</a><span><time><i class="icon-entypo-clock"></i> 4 June, 2018</time></span></li><li><a href="https://www.which-50.com/as-amazon-blocks-australians-from-its-international-sites-alibaba-and-ebay-are-working-on-a-gst-fix">As Amazon blocks Australians from its international sites, Alibaba and eBay are working on a GST fix</a><span><time><i class="icon-entypo-clock"></i> 31 May, 2018</time></span></li><li><a href="https://www.which-50.com/linkedins-reveals-australias-companies-work-2018">LinkedIn reveals Australia’s Best companies to work for in 2018</a><span><time><i class="icon-entypo-clock"></i> 21 March, 2018</time></span></li><li><a href="https://www.which-50.com/chinas-biggest-ecommerce-companies">Who are China’s biggest ecommerce companies?</a><span><time><i class="icon-entypo-clock"></i> 7 December, 2017</time></span></li><li><a href="https://www.which-50.com/breaking-news-amazon-australia-set-soft-launch-thursday-2pm">Breaking News: Amazon Australia set for a ‘soft’ launch this Thursday at 2pm</a><span><time><i class="icon-entypo-clock"></i> 21 November, 2017</time></span></li></ol>
					</div> 
				</div>
				<div class="spinner"></div>
			</div>

			<?php

			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$new_instance = wp_parse_args( (array) $new_instance, $this->default );
			$instance['title'] = wp_kses_data( $new_instance['title'] );
			$instance['count'] = intval( $new_instance['count'] );

			if ( function_exists( 'icl_register_string' ) ) {
				icl_register_string( VW_THEME_NAME.' Widget', $this->id.'_title', $instance['title'] );
			}

			return $instance;
		}

		function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, $this->default );
			$title = $instance['title'];
			$count = intval( $instance['count'] );

			?>

			<!-- title -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">Title:</label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
			</p>

			<!-- count -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('count') ); ?>">Number of posts to show:</label>
				<input id="<?php echo esc_attr( $this->get_field_id('count') ); ?>" name="<?php echo esc_attr( $this->get_field_name('count') ); ?>" type="text" value="<?php echo esc_attr( $count ); ?>" size="3">
			</p>

			<?php
		}
	}
}