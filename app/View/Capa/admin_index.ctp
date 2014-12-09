<?php  $helpers = array('Link'); ?>

<div class="row">
<?php echo $this->Link->makeLink(); ?>
	<div class="large-12 columns">
		<legend><?php echo __('Capas'); ?></legend>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Diretorio</th>
					<th>Tamanho</th>
					<th>Album</th>
					<th>Criado</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
		<?php
		foreach ($pictures as $picture){
		?>
		   <tr>
			  <td><?php echo $picture['Picture']['id']; ?></td>
			  <td><?php echo $picture['Picture']['title']; ?></td>
			  <td><?php echo $picture['Picture']['dir']; ?></td>
			  <td><?php echo $picture['Picture']['file_size']; ?></td>
			  <td><?php echo $picture['Album']['title']; ?></td>
			  <td><?php echo $picture['Picture']['created']; ?></td>
			  <td class='actions'>
			  <?php
			  echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $picture['Picture']['id']), array('confirm' => 'Você tem certeza que quer excluir esta foto?', 'escape' => false, 'style' => 'padding: 5px'));
			  ?>
			  </td>
		   </tr>
		<?php } ?>
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
