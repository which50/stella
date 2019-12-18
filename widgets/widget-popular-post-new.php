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
						<ol id="most-popular-week"><li><a href="https://www.which-50.com/a-cloud-guru-acquires-main-skills-training-rival">A Cloud Guru Acquires Main Skills Training Rival</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/china-is-gobbling-up-machine-learning-patents">China is Gobbling Up Machine Learning Patents</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/volt-launches-to-waitlist-customers-joining-australias-neobanks-in-the-app-store">Volt launches to waitlist customers, joining Australia’s neobanks in the app store</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/openpay-shares-drop-first-day-on-the-asx-while-latitude-and-mastercard-partner-to-create-bnpl-offering">Openpay shares drop first day on the ASX, While Latitude and Mastercard partner to create BNPL offering</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/coles-implements-global-trade-and-finance-platforms">Coles implements global trade and finance platforms</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/integration-is-key-to-tackling-to-two-disruptive-challenges-in-utilities">Integration is key to tackling two disruptive challenges in utilities&nbsp;</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/parts-off-ebay-review-reveals-governments-it-woes">Parts Off Ebay: Review Reveals Government’s IT Woes</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/commbank-uses-personalisation-engine-to-power-cashback-rewards-program">CommBank uses personalisation engine to power cashback rewards program</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/sell-the-outcome-of-integration-not-the-product">Sell the outcome of integration, not the product says Origin’s Dev and Ops head</a><span><time><i class="icon-entypo-clock"></i> 17 December, 2019</time></span></li><li><a href="https://www.which-50.com/tinkering-around-the-edges-review-finds-australian-public-sector-falling-behind-on-digital">‘Tinkering around the edges’: Review finds Australian Public Sector falling behind on digital</a><span><time><i class="icon-entypo-clock"></i> 16 December, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"><li><a href="https://www.which-50.com/cover-story-minicasts-neobanks-muscle-in-adtechs-big-lie-facial-recognition-afterpays-catch">Cover Story: Minicasts – Neobanks muscle in, Adtech’s big lie, Privacy pushback, Afterpay’s catch</a><span><time><i class="icon-entypo-clock"></i> 16 December, 2019</time></span></li><li><a href="https://www.which-50.com/three-things-to-know-about-2020-customer-experience-trends">Three Things To Know About 2020 Customer Experience Trends</a><span><time><i class="icon-entypo-clock"></i> 16 December, 2019</time></span></li><li><a href="https://www.which-50.com/iag-to-put-3000-staff-through-its-cloud-academy-by-june">IAG to put 3,000 staff through its Cloud Academy by June</a><span><time><i class="icon-entypo-clock"></i> 12 December, 2019</time></span></li><li><a href="https://www.which-50.com/government-responds-to-digital-platform-report-with-more-inquiries-voluntary-codes-and-extra-duties-for-the-accc">Government responds to digital platform report with more inquiries, voluntary codes and extra duties for the ACCC</a><span><time><i class="icon-entypo-clock"></i> 12 December, 2019</time></span></li><li><a href="https://www.which-50.com/ubank-lays-groundwork-for-open-banking-with-basiq-partnership">UBank lays groundwork for open banking with Basiq partnership</a><span><time><i class="icon-entypo-clock"></i> 10 December, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-our-readers-on-the-inevitable-and-throughly-unpredictable-disruptive-decade">Cover Story: Our readers on the inevitable and thoroughly unpredictable disruptive decade</a><span><time><i class="icon-entypo-clock"></i> 9 December, 2019</time></span></li><li><a href="https://www.which-50.com/optus-launches-donate-your-data-program-to-benefit-young-australians-in-need">Optus launches ‘Donate your Data’ program to benefit young Australians in need</a><span><time><i class="icon-entypo-clock"></i> 5 December, 2019</time></span></li><li><a href="https://www.which-50.com/were-better-than-this-part-ii-lifting-the-lid-on-programmatics-black-box">We’re Better Than This Part II: Lifting the Lid on Programmatic’s Black Box</a><span><time><i class="icon-entypo-clock"></i> 5 December, 2019</time></span></li><li><a href="https://www.which-50.com/majority-of-marketers-will-abandon-personalisation-efforts-by-2025-gartner">Majority of marketers will abandon personalisation efforts by 2025: Gartner</a><span><time><i class="icon-entypo-clock"></i> 4 December, 2019</time></span></li><li><a href="https://www.which-50.com/dxc-technology-opens-new-digital-transformation-centre-at-uts">DXC Technology Opens New Digital Transformation Centre at UTS</a><span><time><i class="icon-entypo-clock"></i> 4 December, 2019</time></span></li></ol>
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