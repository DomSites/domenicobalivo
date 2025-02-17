<?php
/**
 * UI panel row layout template.
 *
 * @var array $vc_row_layouts
 * @var string $rowInfo
 * @var string $customRowInfo
 * @var Vc_Edit_Layout $box
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// @codingStandardsIgnoreStart
?>
<div class="vc_ui-font-open-sans vc_ui-panel-window vc_media-xs vc_ui-panel" data-vc-panel=".vc_ui-panel-header-header" data-vc-ui-element="panel-row-layout" id="vc_ui-panel-row-layout">
	<div class="vc_ui-panel-window-inner">
		<?php
		vc_include_template('editors/popups/vc_ui-header.tpl.php', array(
			'title' => esc_html__( 'Row Layout', 'js_composer' ),
			'controls' => array( 'minimize', 'close' ),
			'header_css_class' => 'vc_ui-row-layout-header-container',
		));
		?>
		<div class="vc_ui-panel-content-container">
			<div class="vc_ui-panel-content vc_properties-list vc_edit_form_elements" data-vc-ui-element="panel-content">
				<div class="vc_row vc_ui-flex-row">
					<div class="vc_col-sm-12 vc_column vc_layout-panel-switcher">
						<div class="wpb-param-heading">
							<div class="wpb_element_label"><?php esc_html_e( 'Row layout', 'js_composer' ); ?></div>
							<?php if ( is_string( $rowInfo ) ) { echo $rowInfo ; } ?>
						</div>
						<?php foreach ( $vc_row_layouts as $layout ) : ?>
							<a data-vc-ui-element="button-layout" class="vc_layout-btn" <?php
							echo 'data-cells="' . esc_attr( $layout['cells'] ) . '" data-cells-mask="' . esc_attr( $layout['mask'] ) . '" title="' . esc_attr( $layout['title'] )
							?>">
							<i class="vc-composer-icon vc-c-icon-<?php echo esc_attr( $layout['icon_class'] ); ?>"></i>
							</a>
						<?php endforeach ?>

					</div>
					<div class="vc_col-sm-12 vc_column">
						<div class="wpb-param-heading">
							<div class="wpb_element_label"><?php esc_html_e( 'Enter custom layout for your row', 'js_composer' ); ?></div>
							<?php if ( is_string( $customRowInfo ) ) { echo $customRowInfo ; } ?>
						</div>
						<div class="edit_form_line">
							<input name="padding" class="wpb-textinput vc_row_layout" type="text" value="" id="vc_row-layout">
							<span class="vc_general vc_ui-button vc_ui-button-size-sm vc_ui-button-action vc_ui-button-shape-rounded vc_ui-button-update-layout" data-vc-ui-element="button-update-layout"><?php esc_html_e( 'Update', 'js_composer' ); ?></span>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
// @codingStandardsIgnoreEnd
