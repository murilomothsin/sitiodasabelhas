<?php  $helpers = array('Link'); ?>
<?php echo $this->Link->makeLink(); ?>
<div>
	<?php echo $this->Form->create('Video'); ?>
	<fieldset>
		<legend>Adicionar</legend>
	 	<?php
			echo $this->Form->input('video');
			echo $this->Form->input('embed');
		?>
	</fieldset>
	<?php 
	$options = array(
			'label' => 'Enviar',
			'class' => 'btn btn-large btn-primary'
		);
	echo $this->Form->end($options); ?>
</div>