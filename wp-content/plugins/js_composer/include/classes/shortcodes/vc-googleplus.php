<?php
/**
 * Class that handles specific [vc_googleplus] shortcode.
 *
 * @see js_composer/include/templates/shortcodes/vc_googleplus.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Class WPBakeryShortCode_Vc_GooglePlus
 */
class WPBakeryShortCode_Vc_GooglePlus extends WPBakeryShortCode {
	/**
	 * Get shortcode inline html.
	 *
	 * @param array $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	protected function contentInline( $atts, $content = null ) {
		/**
		 * Shortcode attributes
		 *
		 * @var $atts
		 * @var $type
		 * @var $annotation
		 * @var $widget_width
		 * @var $css
		 * @var $css_animation
		 * Shortcode class
		 * @var WPBakeryShortCode_Vc_GooglePlus $this
		 */
		$type = $annotation = $widget_width = $css = $css_animation = '';
		$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
		extract( $atts );
		if ( strlen( $type ) === 0 ) {
			$type = 'standard';
		}
		if ( strlen( $annotation ) === 0 ) {
			$annotation = 'bubble';
		}

		$css = isset( $atts['css'] ) ? $atts['css'] : '';
		$el_class = isset( $atts['el_class'] ) ? $atts['el_class'] : '';

		$class_to_filter = 'wpb_googleplus vc_social-placeholder wpb_content_element vc_socialtype-' . $type;
		$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

		return '<div class="' . esc_attr( $css_class ) . '"></div>';
	}
}
