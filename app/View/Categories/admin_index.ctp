<?php  $helpers = array('Link'); ?>

<div class="row">
<?php echo $this->Link->makeLink(); ?>
	<div class="large-12 columns">
		<legend><?php echo __('Categorias'); ?></legend>
	</div>
<div>
</div>
<div class="large-12 columns">
	<table class="table table-hover table-condensed table-bordered">
		<thead>
			<tr>
				<th style="width: 3%;">Id</th>
				<th style="width: 20%;">Categoria</th>
				<th  style="width: 72%;">Descrição</th>
				<th  style="width: 5%;">&nbsp;</th>
			</tr>
		</thead>
	<?php
	foreach ($categories as $category) {
	?>
	   <tr>
		  <td><?php echo $category['Category']['id']; ?></td>
		  <td><?php echo $category['Category']['category']; ?></td>
		  <td><?php echo $category['Category']['description']; ?></td>
		  <td class='actions'>
		  <?php
		  echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $category['Category']['id']), array('escape' => false, 'style' => 'padding: 5px'));
		  echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $category['Category']['id']), array('confirm' => 'Você tem certeza que quer excluir esta categoria?', 'escape' => false, 'style' => 'padding: 5px'));
		  ?>
		  </td>
	   </tr>
	<?php } ?>
	</table>
</div>
</div>
