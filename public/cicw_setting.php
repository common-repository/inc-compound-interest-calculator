<?php
global $cicw_title, $cicw_amount_text, $cicw_year_text, $cicw_interest_text, $cicw_currency_text, $cicw_primary_color, $cicw_secondary_color, $cicw_tertiary_color,
$cicw_range_color,$cicw_graph_select,$cicw_graph_checked;
//Get all options value
$cicw_title = (get_option('cicw_title')=='')?'Loan Calculator':esc_attr( get_option('cicw_title'));
$cicw_amount_text = (get_option('cicw_amount_text')=='')?'Amount':esc_attr( get_option('cicw_amount_text'));
$cicw_year_text = (get_option('cicw_year_text')=='')?'Length':esc_attr( get_option('cicw_year_text'));
$cicw_interest_text = (get_option('cicw_interest_text')=='')?'Interest':esc_attr( get_option('cicw_interest_text'));
$cicw_currency_text = (get_option('cicw_currency_text')=='')?'$':esc_attr( get_option('cicw_currency_text'));
$cicw_primary_color = (get_option('cicw_primary_color')=='')?'#6258A8':esc_attr( get_option('cicw_primary_color'));
$cicw_secondary_color = (get_option('cicw_secondary_color')=='')?'#FE6384':esc_attr( get_option('cicw_secondary_color'));
$cicw_tertiary_color = (get_option('cicw_tertiary_color')=='')?'#FE6384':esc_attr( get_option('cicw_tertiary_color'));
$cicw_range_color = (get_option('cicw_range_color')=='')?'#FE6384':esc_attr( get_option('cicw_range_color'));
// $cicw_graph_select = (get_option('cicw_graph_select')=='')?'yes':esc_attr( get_option('cicw_graph_select'));


$cicw_graph_select = get_option('cicw_graph_select');

$cicw_graph_checked = ($cicw_graph_select == 'true' ? ' checked="checked"' : '');
