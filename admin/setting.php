<div class="wrap">
<h1>Compound Interest Calculator</h1>

	<form method="post" action="options.php">
		<?php 	
		settings_fields( 'cic-settings-group' ); ?>
		<?php do_settings_sections( 'cic-settings-group' );
		settings_errors();?>
		 
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Title</th>
				<td><input type="text" name="cic_title" value="<?php echo esc_attr( get_option('cic_title') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row">Amount Text</th>
				<td><input type="text" name="cic_amount_text" value="<?php echo esc_attr( get_option('cic_amount_text') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row">Year Text</th>
				<td><input type="text" name="cic_year_text" value="<?php echo esc_attr( get_option('cic_year_text') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Interest Text</th>
				<td><input type="text" name="cic_interest_text" value="<?php echo esc_attr( get_option('cic_interest_text') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Currency</th>
				<td><input type="text" name="cic_currency_text" value="<?php echo esc_attr( get_option('cic_currency_text') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Primary Color</th>
				<td><input type="text" class="my-color-field" data-default-color="#6258A8" name="cic_primary_color" value="<?php echo esc_attr( get_option('cic_primary_color') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Secondary Color</th>
				<td><input type="text" class="my-color-field" data-default-color="#FE6384" name="cic_secondary_color" value="<?php echo esc_attr( get_option('cic_secondary_color') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Tertiary Color</th>
				<td><input type="text" class="my-color-field" data-default-color="#FE6384" name="cic_tertiary_color" value="<?php echo esc_attr( get_option('cic_tertiary_color') ); ?>" /></td>
			</tr>
            <tr valign="top">
                <th scope="row">Range Color</th>
                <td><input type="text" class="my-color-field" data-default-color="#FE6384" name="cic_range_color" value="<?php echo esc_attr( get_option('cic_range_color') ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Show Bar Graph ? </th>
                <td>
                    <input type="checkbox" name="cic_graph_select" value="1" <?php checked(1, get_option('cic_graph_select'), true); ?> />

                </td>
            </tr>
			<tr valign="top">
				<th scope="row">Shortcode</th>
				<td id="p1">[cicw_shortcode]</td>

			</tr>
            <tr valign="top" id="block1">
                <td > </td>
                <td id="p3" onclick="copyToClipboard('#p1')"><b>Click Here To Copy Shortcode</b></td>
            </tr>
            <tr valign="top" id="block2" style="display: none;">
                <td > </td>
                <td id="p2" style="color: #4F800D;"><b>---- Copied To Clipboard ----</b></td>
            </tr>
		</table>

        <?php submit_button(); ?>


	</form>
</div>
