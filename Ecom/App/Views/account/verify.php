<form method="post" action="//<?php echo $_SERVER['SERVER_NAME']; ?>/account/updateCustomer">
	<table>
		<thead>
			<tr>
				<th colspan="2">Billing Address</th>
				<th colspan="2">Shipping Address</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>First Name:</td>
				<td><input type="text" value="<?php echo (isset($billing['first_name'])) ? $billing['first_name'] : ''; ?>" name="billing_first_name" /></td>
				<td>First Name:</td>
				<td><input type="text" value="<?php echo (isset($shipping['first_name'])) ? $shipping['first_name'] : ''; ?>" name="shipping_first_name" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" value="<?php echo (isset($billing['last_name'])) ? $billing['last_name'] : ''; ?>" name="billing_last_name" /></td>
				<td>Last Name:</td>
				<td><input type="text" value="<?php echo (isset($shipping['last_name'])) ? $shipping['last_name'] : ''; ?>" name="shipping_last_name" /></td>
			</tr>
			<tr>
				<td>Address Line 1:</td>
				<td><input type="text" value="<?php echo (isset($billing['address_1'])) ? $billing['address_1'] : ''; ?>" name="billing_address_1" /></td>
				<td>Address Line 1:</td>
				<td><input type="text" value="<?php echo (isset($shipping['address_1'])) ? $shipping['address_1'] : ''; ?>" name="shipping_address_1" /></td>
			</tr>
			<tr>
				<td>Address Line 2:</td>
				<td><input type="text" value="<?php echo (isset($billing['address_2'])) ? $billing['address_2'] : ''; ?>" name="billing_address_2" /></td>
				<td>Address Line 2:</td>
				<td><input type="text" value="<?php echo (isset($shipping['address_2'])) ? $shipping['address_2'] : ''; ?>" name="shipping_address_2" /></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" value="<?php echo (isset($billing['city'])) ? $billing['city'] : ''; ?>" name="billing_city" /></td>
				<td>City:</td>
				<td><input type="text" value="<?php echo (isset($shipping['city'])) ? $shipping['city'] : ''; ?>" name="shipping_city" /></td>
			</tr>
			<tr>
				<td>State:</td>
				<td>
					<select name="billing_state">
						<?php foreach($states as $state) : ?>
							<option <?php echo (isset($billing['state']) and $billing['state'] == $state) ? 'selected="selected"' : '' ?>><?php echo $state; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
				<td>State:</td>
				<td>
					<select name="shipping_state">
						<?php foreach($states as $state) : ?>
							<option <?php echo (isset($shipping['state']) and $shipping['state'] == $state) ? 'selected="selected"' : '' ?>><?php echo $state; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Country:</td>
				<td>
					<select name="billing_country">
						<?php foreach($countries as $country) : ?>
							<option <?php echo (isset($billing['country']) and $billing['country'] == $country) ? 'selected="selected"' : '' ?>><?php echo $country; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
				<td>Country:</td>
				<td>
					<select name="shipping_country">
						<?php foreach($countries as $country) : ?>
							<option <?php echo (isset($shipping['country']) and $shipping['country'] == $country) ? 'selected="selected"' : '' ?>><?php echo $country; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Zip Code:</td>
				<td><input type="text" value="<?php echo (isset($billing['zip_code'])) ? $billing['zip_code'] : ''; ?>" name="billing_zip_code" /></td>
				<td>Zip Code:</td>
				<td><input type="text" value="<?php echo (isset($shipping['zip_code'])) ? $shipping['zip_code'] : ''; ?>" name="shipping_zip_code" /></td>
			</tr>
		</tbody>
	</table>
	<div>
		<input type="hidden" value="<?php echo (isset($continue) ? $continue : '' ); ?>" name="continue" />
		<input type="submit" value="Update Account"/>
	</div>
</form>