<?php  $helpers = array('Link'); ?>
<?php echo $this->Link->makeLink(); ?>
<div>
	<?php echo $this->Form->create('Picture', array('type'=>'file'));?>  
	<fieldset>
	<legend>Adicionar imagem para capa</legend>
	<?php
	echo $this->Form->input('title', array('label' => 'Titulo da Foto'));
	echo $this->Form->input('Img', array('type'=>'file', 'Label' => 'Foto'));
	?>
	</fieldset>

	<?php 
	$options = array(
				'label' => 'Upload',
				'class' => 'btn btn-large btn-primary'
			);
	echo $this->Form->end($options); ?>
</div>