<h5>Available cars</h5>

<table>

	<tr>
		<td>id</td>
		<td>title</td>
		<td>model</td>
	</tr>

	<tr>
		<td><?//= $car->id;?></td>
		<td><?//= $car->title;?></td>
		<td><?//= $car->model;?></td>
	</tr>

</table>

<small>Сук пздц</small>
<div class="desscription">
	Тип кузова: <? echo $car->body; ?>
	<hr>
	<? echo $car->description; ?>
</div>

<br>