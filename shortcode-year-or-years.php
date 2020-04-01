<?php
/**
 * Plugin Name:       Shortcode: Year or years
 * Plugin URI:        https://github.com/lukasbesch/shortcode-year-or-years
 * Description:       Display current year, and optionally a start year. Commonly used in copyright notices. Usage: [year_or_years from="2020" separator="–"]
 * Version:           1.0.0
 * Author:            Lukas Besch
 * Author URI:        https://lukasbesch.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shortcode-year-or-years
 *
 * @link              https://github.com/lukasbesch/shortcode-year-or-years/
 * @package           shortcode-year-or-years
 */

if (!defined('ABSPATH')) {
    die;
}

if (!function_exists('shortcode_year_or_years')) {
    /**
     * @param array $args
     *
     * @return false|string
     */
    function shortcode_year_or_years($args = [])
    {
        $args = wp_parse_args($args, [
            'from' => false,
            'separator' => _x('–', 'year separator', 'shortcode-year-or-years'),
        ]);
        $from = !empty($args['from']) ? (int)$args['from'] : false;
        $year = date('Y');
        return $from && $from < (int)$year ? $from . $args['separator'] . $year : $year;
    }
}

add_shortcode('year_or_years', 'shortcode_year_or_years');
