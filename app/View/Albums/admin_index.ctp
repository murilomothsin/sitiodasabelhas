<?php  $helpers = array('Link'); ?>
<div class="row">
	<?php echo $this->Link->makeLink(); ?>

	<div class="large-12 columns">
		<legend><?php echo __('Albuns'); ?></legend>
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
					<th style="width: 10%;">Fotografo</th>
					<th style="width: 10%;">modelo</th>
					<th style="width: 7%;">Quando</th>
					<th style="width: 7%;">Categoria</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($albums as $album) {
				?>
				<tr>
					<td><?php echo $album['Album']['id']; ?></td>
					<td><?php echo $album['Album']['title']; ?></td>
					<td><?php echo $album['Album']['description']; ?></td>
					<td><?php echo $album['Album']['place']; ?></td>
					<td><?php echo $album['Album']['photographer']; ?></td>
					<td><?php echo $album['Album']['model']; ?></td>
					<td><?php echo $album['Album']['when']; ?></td>
					<td><?php echo $album['Category']['category']; ?></td>
					<td>
					<?php
						echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $album['Album']['id']), array('escape' => false, 'style' => 'padding: 3px'));
						echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $album['Album']['id']), array('confirm' => 'Você tem certeza que quer excluir este album?',
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