<?php

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

		function widget( $instance ) {
			if ( function_exists( 'icl_t' ) ) {
				$instance['title'] = icl_t( VW_THEME_NAME.' Widget', $this->id.'_title', $instance['title'] );
			}

			if ( ! empty( $instance['title'] ) ) {
				$title = apply_filters( 'widget_title', wp_kses_data( $instance['title'] ), $instance, $this->id_base);
			}

			echo $before_widget;

			if ( $instance['title'] ) echo $before_title . $title . $after_title;

			?>

			<div id="most-popular-list" class="tabs">
				<div class="tab">
					<input type="radio" id="tab-1" name="tab-group-1" checked>
					<label id="tab-label-1" for="tab-1">Week</label>

					<div class="content">
						<ol id="most-popular-week"></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-2" name="tab-group-1">
					<label id="tab-label-2" for="tab-2">Month</label>

					<div class="content">
						<ol id="most-popular-month"></ol>
					</div> 
				</div>
				<div class="tab">
					<input type="radio" id="tab-3" name="tab-group-1">
					<label id="tab-label-3" for="tab-3">All Time</label>

					<div class="content">
						<ol id="most-popular-all-time"></ol>
					</div> 
				</div>
				<div class="spinner"></div>
			</div>
			<script>
			(function( ls ) {
				/*
				 * Config
				 */
				var config = {
						clientID : '336706961271-76msfr6tpj2vaqssvi68m0puuscsfeqm.apps.googleusercontent.com',
						scopes   : [ 'https://www.googleapis.com/auth/analytics.readonly' ],
						account  : 'Which-50',
						limit    : 50,
						maxShow  : 5,
						domain   : 'www.which-50.com'
					},
					range = {
						week    : '7daysAgo',
						month   : '30daysAgo',
						allTime : '2012-01-01'
					},
					container = {
						week    : 'most-popular-week',
						month   : 'most-popular-month',
						allTime : 'most-popular-all-time'
					},
					queryDate      = 'most-popular-date',
					queryRange     = range.week,
					queryContainer = container.week;

				/*
				 * Utilities
				 */
				function renderList( html ) {
					document.getElementById( queryContainer ).innerHTML = html;
				}

				function convertTime( timestamp ) {
					var now = new Date( timestamp );

					months = [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

					return now.getDate() + ' ' + months[ now.getMonth() ] + ', ' + now.getFullYear();
				}

				/*
				 * Main functions
				 */
				function loader() {
					var script = document.createElement( 'script' );

					script.src    = 'https://apis.google.com/js/client.js';
					script.onload = authorise;

					document.head.appendChild( script );
				}

				function bindEvents() {
					document.getElementById('tab-label-1').addEventListener('click', function() {
						queryRange     = range.week;
						queryContainer = container.week;

						authorise();
					});

					document.getElementById('tab-label-2').addEventListener('click', function() {
						queryRange     = range.month;
						queryContainer = container.month;

						authorise();
					});

					document.getElementById('tab-label-3').addEventListener('click', function() {
						queryRange     = range.allTime;
						queryContainer = container.allTime;

						authorise();
					});
				}

				function checkSession() {
					if ( ls && ls.getItem( queryDate ) ) {
						var newDate = new Date(),
							oldDate = new Date( JSON.parse( ls.getItem( queryDate ) ) ),
							diffTime, diffDays; 

						diffTime = newDate.getTime() - oldDate.getTime(); 
						diffDays = diffTime / ( 1000 * 3600 * 24 );

						if ( diffDays >= 7 ) {
							ls.removeItem( queryDate );
							ls.removeItem( container.week );
							ls.removeItem( container.month );
							ls.removeItem( container.allTime );
						}
					}
				}

				function init() {
					checkSession();
					loader();
					bindEvents();
				}

				function authorise() {
					var authData = {
							client_id: config.clientID,
							scope: config.scopes,
							immediate: true
						};

					var i = setInterval(function() {
						if ( gapi && gapi.auth ) {
							clearInterval( i );

							if ( ls && ls.getItem( queryContainer ) ) {
								console.log( ls.getItem( queryDate ) );
								renderList( JSON.parse( ls.getItem( queryContainer ) ) );
							} else {
								if ( ls ) {
									ls.setItem( queryDate, JSON.stringify( new Date() ) );
								}

								gapi.auth.authorize(authData, function( response ) {
									console.log(response);
									if ( !response.error ) {
										queryAccounts();
									}
								});
							}
						} else {
							authorise();
						}
					}, 500);
				}

				function queryAccounts() {
					gapi.client.load( 'analytics', 'v3' ).then(function() {
						gapi.client.analytics.management.accounts.list().then( handleAccounts );
					});
				}

				function handleAccounts( response ) {
					if ( response.result.items && response.result.items.length ) {
						var items = response.result.items;

						items.forEach(function( v ) {
							if ( v.name && v.name === config.account ) {
								queryProperties( v.id );
							}
						});
					} else {
						console.error( 'No accounts found for this user.' );
					}
				}

				function queryProperties( accountId ) {
					gapi.client.analytics.management.webproperties.list({
						'accountId': accountId
					})
					.then( handleProperties )
					.then(null, function( err ) {
						console.log( err );
					});
				}

				function handleProperties( response ) {
					if (response.result.items && response.result.items.length) {
						var firstAccountId  = response.result.items[0].accountId,
							firstPropertyId = response.result.items[0].id;

						queryProfiles( firstAccountId, firstPropertyId );
					} else {
						console.error( 'No properties found for this user.' );
					}
				}

				function queryProfiles( accountId, propertyId ) {
					gapi.client.analytics.management.profiles.list({
						'accountId'     : accountId,
						'webPropertyId' : propertyId
					})
					.then( handleProfiles )
					.then(null, function( err ) {
						console.log( err );
					});
				}

				function handleProfiles( response ) {
					if ( response.result.items && response.result.items.length ) {
						var firstProfileId = response.result.items[0].id;

						queryCoreReportingApi( firstProfileId );
					} else {
						console.error( 'No views (profiles) found for this user.' );
					}
				}

				function getWPRestAPIResult( posts ) {
					var url     = 'https://' + config.domain + '/wp-json/wp/v2/posts?slug=' + posts,
						xmlhttp = new XMLHttpRequest();

					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
							var html = '';

							results = JSON.parse( xmlhttp.responseText );

							if ( results.length > 0 ) {
								results.forEach(function( v ) {
									html += '<li><a href="https://' + config.domain + '/' + v.slug + '">' + v.title.rendered + '</a><span><time><i class="icon-entypo-clock"></i> ' + convertTime( v.date ) + '</time></span></li>';
								});

								renderList( html );

								if ( ls ) {
									ls.setItem( queryContainer, JSON.stringify( html ) );
								}
							}
						}
					};

					xmlhttp.open( 'GET', url, true );
					xmlhttp.send();
				}

				function queryCoreReportingApi( profileId ) {
					gapi.client.analytics.data.ga.get({
						'ids'        : 'ga:' + profileId,
						'start-date' : queryRange,
						'end-date'   : 'today',
						'metrics'    : 'ga:pageviews',
						'dimensions' : 'ga:pagePath',
						'sort'       : '-ga:pageviews',
						'max-results': config.limit
					})
					.then(function( response ) {
						var results = response.result;
						
						if ( results && results.rows ) {
							var posts = [],
								limit = config.limit,
								rows  = results.rows;

							if ( rows.length > 0 ) {
								for ( var i = 0; i < limit; i++ ) {
									if ( rows[i][0].length > 1 ) {
										posts.push( rows[i][0].split('/')[1] );
									}
								}

								getWPRestAPIResult( posts.toString() );
							}
						}
					})
					.then(null, function( err ) {
						console.log( err );
					});
				}

				/*
				 * Init
				 */
				init();
			})( window.localStorage );
			</script>

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