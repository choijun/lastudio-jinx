<?php
namespace LaStudioKitThemeBuilder\Modules\Woocommerce\Conditions;

use LaStudioKitThemeBuilder\Modules\ThemeBuilder as ThemeBuilder;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Shop_Page extends ThemeBuilder\Conditions\Condition_Base {

	public static function get_type() {
		return 'singular';
	}

	public function get_name() {
		return 'shop_page';
	}

	public static function get_priority() {
		return 40;
	}

	public function get_label() {
		return __( 'Shop Page', 'lastudio-kit' );
	}

	public function check( $args ) {
		return is_shop();
	}
}
