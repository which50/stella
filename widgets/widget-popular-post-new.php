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
						<ol id="most-popular-week"><li><a href="https://www.which-50.com/the-secondhand-fashion-market-will-disrupt-retail-scott-galloway">The secondhand fashion market will disrupt retail: Scott Galloway</a><span><time><i class="icon-entypo-clock"></i> 24 September, 2019</time></span></li><li><a href="https://www.which-50.com/rmit-offers-new-aws-cloud-computing-courses-bolsters-tech-leadership">RMIT offers new AWS cloud computing courses, bolsters tech leadership</a><span><time><i class="icon-entypo-clock"></i> 24 September, 2019</time></span></li><li><a href="https://www.which-50.com/digital-transformation-reduced-costs-by-over-40-per-cent-in-typical-finance-organisations-study">Digital transformation reduces costs by over 40 per cent in typical finance organisations: Study</a><span><time><i class="icon-entypo-clock"></i> 24 September, 2019</time></span></li><li><a href="https://www.which-50.com/the-shift-to-the-cloud-is-accelerating-and-thats-a-gigantic-opportunity-for-oracle-says-larry-ellison">The shift to the cloud is accelerating and that’s a ‘gigantic opportunity’ for Oracle, says Larry Ellison</a><span><time><i class="icon-entypo-clock"></i> 23 September, 2019</time></span></li><li><a href="https://www.which-50.com/what-is-reasonable-privacy">What Is “Reasonable” Privacy?</a><span><time><i class="icon-entypo-clock"></i> 23 September, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-property-industry-responds-as-smart-buildings-open-up-new-cyber-security-threats">COVER STORY: Property industry responds as smart buildings open up new cybersecurity threats</a><span><time><i class="icon-entypo-clock"></i> 23 September, 2019</time></span></li><li><a href="https://www.which-50.com/what-do-australian-executives-want-from-their-enterprise-software">What do Australian executives want from their enterprise software?</a><span><time><i class="icon-entypo-clock"></i> 23 September, 2019</time></span></li><li><a href="https://www.which-50.com/tealium-launchesbuilt-in-machine-learning-tech-for-the-customer-data-platform">Tealium Launches Built-In Machine Learning Tech for the Customer Data Platform</a><span><time><i class="icon-entypo-clock"></i> 20 September, 2019</time></span></li><li><a href="https://www.which-50.com/acs-buys-adma-reaction-marketers-understand-the-rationale-but-fret-about-alignment">Marketers react to ACS buying ADMA: We understand the rationale, but worry about alignment</a><span><time><i class="icon-entypo-clock"></i> 20 September, 2019</time></span></li><li><a href="https://www.which-50.com/cdp-market-heats-up-with-new-capabilities-from-oracle-cx">CDP market heats up with new capabilities from Oracle CX</a><span><time><i class="icon-entypo-clock"></i> 19 September, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"><li><a href="https://www.which-50.com/cover-story-property-industry-responds-as-smart-buildings-open-up-new-cyber-security-threats">COVER STORY: Property industry responds as smart buildings open up new cybersecurity threats</a><span><time><i class="icon-entypo-clock"></i> 23 September, 2019</time></span></li><li><a href="https://www.which-50.com/acs-buys-adma-reaction-marketers-understand-the-rationale-but-fret-about-alignment">Marketers react to ACS buying ADMA: We understand the rationale, but worry about alignment</a><span><time><i class="icon-entypo-clock"></i> 20 September, 2019</time></span></li><li><a href="https://www.which-50.com/accc-to-announce-the-first-open-bank-data-recipients-next-week">ACCC to announce the first open banking data recipients next week</a><span><time><i class="icon-entypo-clock"></i> 19 September, 2019</time></span></li><li><a href="https://www.which-50.com/breaking-australian-computer-society-buys-adma">BREAKING — Australian Computer Society buys ADMA (and everything else)</a><span><time><i class="icon-entypo-clock"></i> 18 September, 2019</time></span></li><li><a href="https://www.which-50.com/dont-expect-to-be-flying-to-work-in-an-uber-any-time-soon-says-lek-consulting">Don’t expect to be flying to work in an Uber any time soon, says LEK Consulting</a><span><time><i class="icon-entypo-clock"></i> 17 September, 2019</time></span></li><li><a href="https://www.which-50.com/gdpr-plus-tech-industry-pushes-back-on-accc-recommendations-to-strengthen-privacy-act">‘GDPR Plus’: Tech industry pushes back on ACCC recommendations to strengthen Privacy Act</a><span><time><i class="icon-entypo-clock"></i> 17 September, 2019</time></span></li><li><a href="https://www.which-50.com/neobanks-and-fintechs-investing-in-cloud-based-core-banking-platforms">Neobanks and Fintechs investing in Cloud-Based Core Banking Platforms</a><span><time><i class="icon-entypo-clock"></i> 17 September, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-2019-which-50-digital-innovator-of-the-year-peter-auhl">Cover Story: 2019 Which-50 Digital Innovator of the Year – Peter Auhl</a><span><time><i class="icon-entypo-clock"></i> 16 September, 2019</time></span></li><li><a href="https://www.which-50.com/simple-fast-east-which-50-digital-experience-award-winners-revealed">Simple. Fast. Easy. Which-50 Digital Experience Award Winners Revealed</a><span><time><i class="icon-entypo-clock"></i> 16 September, 2019</time></span></li><li><a href="https://www.which-50.com/energy-disruptor-amber-electric-raises-2-5-million">Energy disruptor Amber Electric raises $2.5 million</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li></ol>
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