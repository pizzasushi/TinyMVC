<h5>PAGE HELLO!</h5>

<table>
	<tr>
		<td>id</td>
		<td>title</td>
		<td>model</td>
	</tr>

	<?php foreach ($cars as $car): ?>
		<tr>
			<td><?= $car->id;?></td>
			<td><?= $car->title;?></td>
			<td><?= $car->model;?></td>
		</tr>
	<?php endforeach ?>
</table>