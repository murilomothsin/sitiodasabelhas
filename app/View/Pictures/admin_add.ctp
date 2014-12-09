<?php  $helpers = array('Link'); ?>
<?php echo $this->Link->makeLink(); ?>
<div>
	<?php echo $this->Form->create('Picture', array('type'=>'file'));?>  
	<fieldset>
	<legend>Imagem</legend>
	<?php
	echo $this->Form->input('title');
	echo $this->Form->input('Img', array('type'=>'file'));
	?>
	</fieldset>
	<?php 
	$options = array(
			'label' => 'Upload',
			'class' => 'btn btn-large btn-primary'
		);
	echo $this->Form->end($options); ?>
</div>