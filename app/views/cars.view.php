<h5>Available cars</h5>

<table>

	<tr>
		<td>id</td>
		<td>title</td>
		<td>model</td>
	</tr>

	<?php foreach ($cars as $car): ?>
		<tr>
			<td><a href="/detailed?id=<?= $car->id;?>"> <?= $car->id;?></a></td>
			<td><?= $car->title;?></td>
			<td><?= $car->model;?></td>
		</tr>
	<?php endforeach ?>

</table>

<br>