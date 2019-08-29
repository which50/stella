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

			<div id="most-popular-list" class="tabs tabbed-listy">
				<div class="tab">
					<input type="radio" id="tab-1" name="tab-group-1" checked>
					<label id="tab-label-1" for="tab-1">Week</label>

					<div class="content">
						<ol id="most-popular-week"><li><a href="https://www.which-50.com/a-group-of-australian-ceos-are-building-a-strategy-to-ease-the-impact-of-ai-and-automation-on-their-workforce">CEO group building a strategy to ease the impact of AI and automation on the workforce</a><span><time><i class="icon-entypo-clock"></i> 28 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-auspost-and-rmit-are-closing-the-cloud-skills-gap">How AusPost and RMIT are closing the cloud skills gap</a><span><time><i class="icon-entypo-clock"></i> 28 August, 2019</time></span></li><li><a href="https://www.which-50.com/its-revisionist-to-suggest-companies-only-care-about-shareholders-says-michael-dell">It’s Revisionist to Suggest Companies Only Care about Shareholders, says Michael Dell</a><span><time><i class="icon-entypo-clock"></i> 27 August, 2019</time></span></li><li><a href="https://www.which-50.com/cybersecurity-is-fundamentally-broken-says-vmware-svp">Cybersecurity is fundamentally broken, says VMware SVP</a><span><time><i class="icon-entypo-clock"></i> 27 August, 2019</time></span></li><li><a href="https://www.which-50.com/dta-renews-mou-with-it-industry-group-for-further-collaboration">DTA renews MOU with IT Industry Group for Further Collaboration</a><span><time><i class="icon-entypo-clock"></i> 27 August, 2019</time></span></li><li><a href="https://www.which-50.com/to-improve-roi-brands-revisit-their-martech-choices">To improve ROI, brands revisit their martech choices</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-ericssons-head-of-innovation-encourages-entrepreneurship">How Ericsson’s head of innovation encourages entrepreneurship</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/the-accc-is-looking-for-organisations-to-test-the-consumer-data-right">The ACCC is looking for organisations to test the Consumer Data Right</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-the-trends-driving-transformation-at-energyaustralia">Cover Story: The trends driving transformation at EnergyAustralia&nbsp;</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/asx-signs-mou-with-vmware-and-digital-asset-to-develop-more-dlt-solutions">ASX signs MOU with VMware and Digital Asset to develop more DLT solutions</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"><li><a href="https://www.which-50.com/cover-story-the-trends-driving-transformation-at-energyaustralia">Cover Story: The trends driving transformation at EnergyAustralia&nbsp;</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/technology-for-good-fighting-the-growing-problem-of-child-exploitation">Technology for good: fighting the growing problem of child exploitation</a><span><time><i class="icon-entypo-clock"></i> 21 August, 2019</time></span></li><li><a href="https://www.which-50.com/85-per-cent-of-zendesks-systems-are-managed-outside-it-but-dont-call-it-shadow-it">85 per cent of Zendesk’s systems are managed outside IT — but don’t call it Shadow IT</a><span><time><i class="icon-entypo-clock"></i> 21 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-youfoodz-and-corelogic-build-their-businesses-cases-for-cx-initiatives">How Youfoodz and CoreLogic build their businesses cases for CX initiatives</a><span><time><i class="icon-entypo-clock"></i> 21 August, 2019</time></span></li><li><a href="https://www.which-50.com/the-four-customer-initiatives-accelerated-by-digital-transformation">The four customer initiatives accelerated by digital transformation</a><span><time><i class="icon-entypo-clock"></i> 21 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-artificial-intelligence-and-machine-learning-shape-customer-journeys">How Artificial Intelligence and Machine Learning Shape Customer Journeys</a><span><time><i class="icon-entypo-clock"></i> 20 August, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-global-momentum-builds-behind-new-privacy-laws-next-stop-california-and-ccpa">Cover Story: Global momentum builds behind new privacy laws. Next stop California and CCPA</a><span><time><i class="icon-entypo-clock"></i> 19 August, 2019</time></span></li><li><a href="https://www.which-50.com/most-banks-dont-have-the-systems-to-take-advantage-of-open-banking-infosys-exec">Most banks don’t have the systems to take advantage of open banking: Infosys exec</a><span><time><i class="icon-entypo-clock"></i> 15 August, 2019</time></span></li><li><a href="https://www.which-50.com/what-these-10-charts-from-the-acccs-digital-platform-report-tells-us-about-the-australian-media-landscape">What these 10 charts from the ACCC’s digital platform report tell us about the Australian media landscape</a><span><time><i class="icon-entypo-clock"></i> 15 August, 2019</time></span></li><li><a href="https://www.which-50.com/government-expanding-biometric-authentication-for-services-with-opt-in-trials">Government expanding biometric authentication for services with opt in trials</a><span><time><i class="icon-entypo-clock"></i> 14 August, 2019</time></span></li></ol>
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