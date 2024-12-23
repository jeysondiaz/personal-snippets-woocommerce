<?php
/**
 * Countries
 *
 * Returns an array of countries and codes.
 * Country codes and names should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/displaynames/countryregion-territory-names).
 *
 * See https://github.com/unicode-org/cldr/blob/master/common/subdivisions/en.xml
 *
 * @package WooCommerce\i18n
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;


/**
 * Colombian states
colocar en la ruta wp-content/plugins/woocommerce/i18n/states.php
 */
 return array(
	'CO' => array( 
		'CA' => __( 'Cali', 'woocommerce' ),
		'JA' => __( 'Jamundi', 'woocommerce' ),
		'CN' => __( 'Candelaria', 'woocommerce' ),
		'YU' => __( 'Yumbo', 'woocommerce' ),
		'PA' => __( 'Palmira', 'woocommerce' ),
	),
	);
