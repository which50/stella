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
						<ol id="most-popular-week"><li><a href="https://www.which-50.com/smes-often-lack-cybersecurity-awareness-responsible-cyber-ceo">SMEs often lack cybersecurity awareness: Responsible Cyber CEO</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/energy-disruptor-amber-electric-raises-2-5-million">Energy disruptor Amber Electric raises $2.5 million</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/neobank-86-400-officially-launches-with-savings-and-transaction-accounts">Neobank 86 400 officially launches with savings and transaction accounts</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/australia-has-the-third-worst-rate-of-ad-fraud-in-the-world-report">Australia has the third worst rate of ad fraud in the world: Report</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/carbar-and-jaguar-australia-launch-luxury-car-subscription-service">Carbar and Jaguar Australia launch luxury car subscription service</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/marketers-no-longer-control-the-brand-says-shutterstock-cmo">Marketers no longer control the brand, says Shutterstock CMO</a><span><time><i class="icon-entypo-clock"></i> 10 September, 2019</time></span></li><li><a href="https://www.which-50.com/human-rights-groups-sound-alarm-on-governments-facial-recognition-laws">Human rights groups sound alarm on government’s facial recognition laws</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li><li><a href="https://www.which-50.com/the-worlds-noisiest-marketplace-ecargo-launches-incubator-program-to-help-australian-fmcg-brands-enter-china">The world’s noisiest marketplace: eCargo launches incubator program to help Australian FMCG brands enter China</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li><li><a href="https://www.which-50.com/small-business-which-spend-more-on-technology-grow-faster-xero-data">Small businesses that spend more on technology grow faster: Xero data</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li><li><a href="https://www.which-50.com/its-official-xinja-secures-full-banking-licence">It’s official: Xinja secures full banking licence</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"><li><a href="https://www.which-50.com/cover-story-sustainability-builds-brand-equity-and-margin-but-also-an-incentive-to-greenwash">COVER STORY: Sustainability builds brand equity and margin. But also an incentive to greenwash</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li><li><a href="https://www.which-50.com/where-does-your-business-sit-on-the-digital-transformation-maturity-curve">Where does your business sit on the digital transformation maturity curve?</a><span><time><i class="icon-entypo-clock"></i> 9 September, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-as-surveillance-capitalism-takes-hold-australia-lacks-the-ability-or-political-will-to-protect-its-citizens-privacy">Cover Story: As surveillance capitalism takes hold, Australia lacks the ability to protect its citizens’ privacy</a><span><time><i class="icon-entypo-clock"></i> 2 September, 2019</time></span></li><li><a href="https://www.which-50.com/australias-banks-have-lost-us6-billion-in-brand-value-but-everyone-still-loves-bunnings">Australia’s banks have lost US$6 billion in brand value, but everyone still loves Bunnings</a><span><time><i class="icon-entypo-clock"></i> 29 August, 2019</time></span></li><li><a href="https://www.which-50.com/a-group-of-australian-ceos-are-building-a-strategy-to-ease-the-impact-of-ai-and-automation-on-their-workforce">CEO group building a strategy to ease the impact of AI and automation on the workforce</a><span><time><i class="icon-entypo-clock"></i> 28 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-auspost-and-rmit-are-closing-the-cloud-skills-gap">How AusPost and RMIT are closing the cloud skills gap</a><span><time><i class="icon-entypo-clock"></i> 28 August, 2019</time></span></li><li><a href="https://www.which-50.com/cybersecurity-is-fundamentally-broken-says-vmware-svp">Cybersecurity is fundamentally broken, says VMware SVP</a><span><time><i class="icon-entypo-clock"></i> 27 August, 2019</time></span></li><li><a href="https://www.which-50.com/how-ericssons-head-of-innovation-encourages-entrepreneurship">How Ericsson’s head of innovation encourages entrepreneurship</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/the-accc-is-looking-for-organisations-to-test-the-consumer-data-right">The ACCC is looking for organisations to test the Consumer Data Right</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li><li><a href="https://www.which-50.com/cover-story-the-trends-driving-transformation-at-energyaustralia">Cover Story: The trends driving transformation at EnergyAustralia&nbsp;</a><span><time><i class="icon-entypo-clock"></i> 26 August, 2019</time></span></li></ol>
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