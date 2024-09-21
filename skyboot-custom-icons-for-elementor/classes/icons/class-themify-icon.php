<?php
namespace Skb_Cife;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*--------------------------
*   Class Themify Icon Manager
* -------------------------*/
class Skb_Cife_Themify_Icon_Manager{

    private static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function __construct(){
        $this->init();
    }

    public function init() {

        // Custom icon filter
        add_filter( 'elementor/icons_manager/additional_tabs', [ $this,'skb_cife_themify_icon'] );  

    }

	public function skb_cife_themify_icon( $themify_icons_args = array() ) {

	    // Append new icons
	    $themify_icons = array(
					'ti-arrow-up',
					'ti-arrow-right',
					'ti-arrow-left',
					'ti-arrow-down',
					'ti-arrows-vertical',
					'ti-arrows-horizontal',
					'ti-angle-up',
					'ti-angle-right',
					'ti-angle-left',
					'ti-angle-down',
					'ti-angle-double-up',
					'ti-angle-double-right',
					'ti-angle-double-left',
					'ti-angle-double-down',
					'ti-move',
					'ti-fullscreen',
					'ti-arrow-top-right',
					'ti-arrow-top-left',
					'ti-arrow-circle-up',
					'ti-arrow-circle-right',
					'ti-arrow-circle-left',
					'ti-arrow-circle-down',
					'ti-arrows-corner',
					'ti-split-v',
					'ti-split-v-alt',
					'ti-split-h',
					'ti-hand-point-up',
					'ti-hand-point-right',
					'ti-hand-point-left',
					'ti-hand-point-down',
					'ti-back-right',
					'ti-back-left',
					'ti-exchange-vertical',
					'ti-wand',
					'ti-save',
					'ti-save-alt',
					'ti-direction',
					'ti-direction-alt',
					'ti-user',
					'ti-link',
					'ti-unlink',
					'ti-trash',
					'ti-target',
					'ti-tag',
					'ti-desktop',
					'ti-tablet',
					'ti-mobile',
					'ti-email',
					'ti-star',
					'ti-spray',
					'ti-signal',
					'ti-shopping-cart',
					'ti-shopping-cart-full',
					'ti-settings',
					'ti-search',
					'ti-zoom-in',
					'ti-zoom-out',
					'ti-cut',
					'ti-ruler',
					'ti-ruler-alt-2',
					'ti-ruler-pencil',
					'ti-ruler-alt',
					'ti-bookmark',
					'ti-bookmark-alt',
					'ti-reload',
					'ti-plus',
					'ti-minus',
					'ti-close',
					'ti-pin',
					'ti-pencil',
					'ti-pencil-alt',
					'ti-paint-roller',
					'ti-paint-bucket',
					'ti-na',
					'ti-medall',
					'ti-medall-alt',
					'ti-marker',
					'ti-marker-alt',
					'ti-lock',
					'ti-unlock',
					'ti-location-arrow',
					'ti-layout',
					'ti-layers',
					'ti-layers-alt',
					'ti-key',
					'ti-image',
					'ti-heart',
					'ti-heart-broken',
					'ti-hand-stop',
					'ti-hand-open',
					'ti-hand-drag',
					'ti-flag',
					'ti-flag-alt',
					'ti-flag-alt-2',
					'ti-eye',
					'ti-import',
					'ti-export',
					'ti-cup',
					'ti-crown',
					'ti-comments',
					'ti-comment',
					'ti-comment-alt',
					'ti-thought',
					'ti-clip',
					'ti-check',
					'ti-check-box',
					'ti-camera',
					'ti-announcement',
					'ti-brush',
					'ti-brush-alt',
					'ti-palette',
					'ti-briefcase',
					'ti-bolt',
					'ti-bolt-alt',
					'ti-blackboard',
					'ti-bag',
					'ti-world',
					'ti-wheelchair',
					'ti-car',
					'ti-truck',
					'ti-timer',
					'ti-ticket',
					'ti-thumb-up',
					'ti-thumb-down',
					'ti-stats-up',
					'ti-stats-down',
					'ti-shine',
					'ti-shift-right',
					'ti-shift-left',
					'ti-shift-right-alt',
					'ti-shift-left-alt',
					'ti-shield',
					'ti-notepad',
					'ti-server',
					'ti-pulse',
					'ti-printer',
					'ti-power-off',
					'ti-plug',
					'ti-pie-chart',
					'ti-panel',
					'ti-package',
					'ti-music',
					'ti-music-alt',
					'ti-mouse',
					'ti-mouse-alt',
					'ti-money',
					'ti-microphone',
					'ti-menu',
					'ti-menu-alt',
					'ti-map',
					'ti-map-alt',
					'ti-location-pin',
					'ti-light-bulb',
					'ti-info',
					'ti-infinite',
					'ti-id-badge',
					'ti-hummer',
					'ti-home',
					'ti-help',
					'ti-headphone',
					'ti-harddrives',
					'ti-harddrive',
					'ti-gift',
					'ti-game',
					'ti-filter',
					'ti-files',
					'ti-file',
					'ti-zip',
					'ti-folder',
					'ti-envelope',
					'ti-dashboard',
					'ti-cloud',
					'ti-cloud-up',
					'ti-cloud-down',
					'ti-clipboard',
					'ti-calendar',
					'ti-book',
					'ti-bell',
					'ti-basketball',
					'ti-bar-chart',
					'ti-bar-chart-alt',
					'ti-archive',
					'ti-anchor',
					'ti-alert',
					'ti-alarm-clock',
					'ti-agenda',
					'ti-write',
					'ti-wallet',
					'ti-video-clapper',
					'ti-video-camera',
					'ti-vector',
					'ti-support',
					'ti-stamp',
					'ti-slice',
					'ti-shortcode',
					'ti-receipt',
					'ti-pin2',
					'ti-pin-alt',
					'ti-pencil-alt2',
					'ti-eraser',
					'ti-more',
					'ti-more-alt',
					'ti-microphone-alt',
					'ti-magnet',
					'ti-line-double',
					'ti-line-dotted',
					'ti-line-dashed',
					'ti-ink-pen',
					'ti-info-alt',
					'ti-help-alt',
					'ti-headphone-alt',
					'ti-gallery',
					'ti-face-smile',
					'ti-face-sad',
					'ti-credit-card',
					'ti-comments-smiley',
					'ti-time',
					'ti-share',
					'ti-share-alt',
					'ti-rocket',
					'ti-new-window',
					'ti-rss',
					'ti-rss-alt',	
					'ti-control-stop',
					'ti-control-shuffle',
					'ti-control-play',
					'ti-control-pause',
					'ti-control-forward',
					'ti-control-backward',
					'ti-volume',
					'ti-control-skip-forward',
					'ti-control-skip-backward',
					'ti-control-record',
					'ti-control-eject',	
					'ti-paragraph',
					'ti-uppercase',
					'ti-underline',
					'ti-text',
					'ti-Italic',
					'ti-smallcap',
					'ti-list',
					'ti-list-ol',
					'ti-align-right',
					'ti-align-left',
					'ti-align-justify',
					'ti-align-center',
					'ti-quote-right',
					'ti-quote-left',													
					'ti-layout-width-full',
					'ti-layout-width-default',
					'ti-layout-width-default-alt',
					'ti-layout-tab',
					'ti-layout-tab-window',
					'ti-layout-tab-v',
					'ti-layout-tab-min',
					'ti-layout-slider',
					'ti-layout-slider-alt',
					'ti-layout-sidebar-right',
					'ti-layout-sidebar-none',
					'ti-layout-sidebar-left',
					'ti-layout-placeholder',
					'ti-layout-menu',
					'ti-layout-menu-v',
					'ti-layout-menu-separated',
					'ti-layout-menu-full',
					'ti-layout-media-right',
					'ti-layout-media-right-alt',
					'ti-layout-media-overlay',
					'ti-layout-media-overlay-alt',
					'ti-layout-media-overlay-alt-2',
					'ti-layout-media-left',
					'ti-layout-media-left-alt',
					'ti-layout-media-center',
					'ti-layout-media-center-alt',
					'ti-layout-list-thumb',
					'ti-layout-list-thumb-alt',
					'ti-layout-list-post',
					'ti-layout-list-large-image',
					'ti-layout-line-solid',
					'ti-layout-grid4',
					'ti-layout-grid3',
					'ti-layout-grid2',
					'ti-layout-grid2-thumb',
					'ti-layout-cta-right',
					'ti-layout-cta-left',
					'ti-layout-cta-center',
					'ti-layout-cta-btn-right',
					'ti-layout-cta-btn-left',
					'ti-layout-column4',
					'ti-layout-column3',
					'ti-layout-column2',
					'ti-layout-accordion-separated',
					'ti-layout-accordion-merged',
					'ti-layout-accordion-list',
					'ti-widgetized',
					'ti-widget',
					'ti-widget-alt',
					'ti-view-list',
					'ti-view-list-alt',
					'ti-view-grid',
					'ti-upload',
					'ti-download',
					'ti-loop',
					'ti-layout-sidebar-2',
					'ti-layout-grid4-alt',
					'ti-layout-grid3-alt',
					'ti-layout-grid2-alt',
					'ti-layout-column4-alt',
					'ti-layout-column3-alt',
					'ti-layout-column2-alt',
					'ti-flickr',
					'ti-flickr-alt',
					'ti-instagram',
					'ti-google',
					'ti-github',
					'ti-facebook',
					'ti-dropbox',
					'ti-dropbox-alt',
					'ti-dribbble',
					'ti-apple',
					'ti-android',
					'ti-yahoo',
					'ti-trello',
					'ti-stack-overflow',
					'ti-soundcloud',
					'ti-sharethis',
					'ti-sharethis-alt',
					'ti-reddit',
					'ti-microsoft',
					'ti-microsoft-alt',
					'ti-linux',
					'ti-jsfiddle',
					'ti-joomla',
					'ti-html5',
					'ti-css3',
					'ti-drupal',
					'ti-wordpress',
					'ti-tumblr',
					'ti-tumblr-alt',
					'ti-skype',
					'ti-youtube',
					'ti-vimeo',
					'ti-vimeo-alt',
					'ti-twitter',
					'ti-twitter-alt',
					'ti-linkedin',
					'ti-pinterest',
					'ti-pinterest-alt',
					'ti-themify-logo',
					'ti-themify-favicon',
					'ti-themify-favicon-alt'			
	    );
	    
	    $themify_icons_args['skb_cife-themify-icon'] = array(
	        'name'          => 'skb_cife-themify-icon',
	        'label'         => esc_html__( 'Skyboot:: Themify Icon', 'skb_cife' ),
	        'labelIcon'     => 'fas fa-user',
	        'prefix'        => '',
	        'displayPrefix' => '',
	        'url'           => SKB_CIFE_ASSETS . 'css/themify.css',
	        'icons'         => $themify_icons,
	        'ver'           => SKB_CIFE_VERSION,
	    );

	    return $themify_icons_args;
	}



}
Skb_Cife_Themify_Icon_Manager::instance();