<html>
	<table border="1">
		<h2>Fecha y Hora</h2>
			<thead>
				<tr>
					<th>Fecha</th>
				</tr>
			</thead>
    
			<tbody>    
				<tr>
					<td>
						<?php echo date('l, d/m/Y'); ?>
					</td>
				</tr>
			</tbody>

			<thead>
				<tr>
					<th>Hora</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
					<?php echo date('H:i'); ?>
					</td>
				</tr>
			</tbody>

	</table>
</html>