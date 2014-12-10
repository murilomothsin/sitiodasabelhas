<?php  $helpers = array('Link'); ?>
<div class="row">
	<?php echo $this->Link->makeLink(); ?>

	<div class="large-12 columns">
		<legend><?php echo __('Pousada/Cabanas'); ?></legend>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th style="width: 3%;">Id</th>
					<th style="width: 25%;">Titulo</th>
					<th style="width: 15%;">Descrição</th>
					<th style="width: 8%;">Local</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($hotels as $hotel) {
				?>
				<tr>
					<td><?php echo $hotel['Hotel']['id']; ?></td>
					<td><?php echo $hotel['Hotel']['title']; ?></td>
					<td><?php echo $hotel['Hotel']['description']; ?></td>
					<td><?php echo $hotel['Hotel']['place']; ?></td>
					<td>
					<?php
						echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $hotel['Hotel']['id']), array('escape' => false, 'style' => 'padding: 3px'));
						echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $hotel['Hotel']['id']), array('confirm' => 'Você tem certeza que quer excluir esta cabana?',
						'escape' => false, 'style' => 'padding: 3px'));
					?>
					</td>
				</tr>
				<?php } ?>
		</tbody>
		</table>
	</div>
	<div class="pagination pagination-centered">
		<ul>
		<?php
			if($this->Paginator->hasPrev())
				echo $this->Paginator->prev('<<', array('tag' => 'li', 'class' => 'disabled'));
			if($this->Paginator->hasPage())
				echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'disabled'));
			if($this->Paginator->hasNext())
				echo $this->Paginator->next('>>', array('tag' => 'li', 'class' => 'disabled'));
		?>
		</ul>
	</div>
</div>