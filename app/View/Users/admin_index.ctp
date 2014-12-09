<?php  $helpers = array('Link'); ?>

<div class="row">
	<?php echo $this->Link->makeLink(); ?>
	<div class="large-12 columns">
		<legend><?php echo __('Usuário'); ?></legend>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th style="width: 3%;">Id</th>
					<th style="width: 35%;">Nome</th>
					<th style="width: 15%;">Username</th>
					<th style="width: 15%;">Email</th>
					<th style="width: 10%;">Categoria</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($users as $user){	
				?>
				<tr>
					<td><?php echo $user['User']['id']; ?></td>
					<td><?php echo $user['User']['name']; ?></td>
					<td><?php echo $user['User']['username']; ?></td>
					<td><?php echo $user['User']['email']; ?></td>
					<td><?php echo $user['User']['role']; ?></td>
					<td class='actions'>
					<?php
					echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $user['User']['id']), array('escape' => false, 'style' => 'padding: 5px'));
					echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?',
					'escape' => false, 'style' => 'padding: 5px'));
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
