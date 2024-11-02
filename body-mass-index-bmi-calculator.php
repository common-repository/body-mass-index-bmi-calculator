<?php
/*
  Plugin Name: Body Mass Index (BMI) Calculator
  Plugin URI: https://www.calculators.tech/bmi-calculator
  Description: Online BMI Calculator checks Body Mass Index for Men & Women. It is designed for both male and female to find out their healthy weight ratio.
  Version: 1.0
  Author: Calculators.tech
  Author URI: https://profiles.wordpress.org/calculators
  License: GPLv3+
*/

/*


This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


	












add_shortcode( 'online-bmi-calculator', 'bmi_calculatorstech_shortcode' );

function bmi_calculatorstech_shortcode() {
	include('bmi-html.php');
	return $bmi_boxHtml;
}
