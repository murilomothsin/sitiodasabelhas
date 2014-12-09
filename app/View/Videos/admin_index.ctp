<?php  $helpers = array('Link'); ?>

<div class="row">
<?php echo $this->Link->makeLink(); ?>
	<div class="large-12 columns">
		<legend><?php echo __('Videos'); ?></legend>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th style="width: 3%;">Id</th>
					<th style="width: 92%;">Video</th>
					<th style="width: 5%;">&nbsp;</th>
				</tr>
			</thead>
		<?php
		foreach ($videos as $video)
		{
		?>
		   <tr>
			  <td><?php echo $video['Video']['id']; ?></td>
			  <td><?php echo $video['Video']['video']; ?></td>
			  <td class='actions'>
			  <?php
			  echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $video['Video']['id']), array('escape' => false, 'style' => 'padding: 5px'));
			  echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $video['Video']['id']), array('confirm' => 'Você tem certeza que quer excluir esta categoria?', 'escape' => false, 'style' => 'padding: 5px'));
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
