<table border="1">
	<thead>
	</thead>
	<tbody>
		<?php foreach ($list as $item): ?>
		<tr>
			<td><?= $item['idx'] ?></td>
			<td><?= $item['title'] ?></td>
			<td><?= $item['name'] ?></td>		
		</tr>
		<?php endforeach; ?>	
	</tbody>
</table>
<div class="paging">
	<?php

		
	?>
</div>