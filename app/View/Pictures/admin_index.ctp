<?php  $helpers = array('Link'); ?>

<div class="row">
<?php echo $this->Link->makeLink(); ?>
	<div class="large-12 columns">
		<legend><?php echo __('Imagens'); ?></legend>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th style="width: 3%;">Id</th>
					<th style="width: 10%;">Titulo</th>
					<th style="width: 10%;">Diretorio</th>
					<th style="width: 8%;">Tamanho</th>
					<th style="width: 25%;">Album</th>
					<th style="width: 10%;">Criado</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
		<?php
		foreach ($pictures as 	$picture){
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
			  $icon = 'icon-star-empty';
			  if($picture['Picture']['capa'])
			  	$icon = 'icon-star';
			  echo $this->Html->link('<i class="'.$icon.'"></i>', array('action' => 'NaCapa', $picture['Picture']['id']), array('escape' => false, 'style' => 'padding: 5px'));
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
