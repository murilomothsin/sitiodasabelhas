<?php  $helpers = array('Link'); ?>
<?php echo $this->Link->makeLink(); ?>
<script type="text/javascript">

</script>
<div class="row">
	<div class="span12">
	<?php echo $this->Form->create('Hotel', array('type'=>'file')); ?>
	<fieldset>
		<legend>Editar</legend>
	 	<?php echo $this->element('form_hotels'); ?>
	</fieldset>
	<?php
		$options = array(
			'label' => 'Enviar',
			'class' => 'btn btn-large btn-primary'
		);
		echo $this->Form->end($options);
	?>
	</div>
</div>

<?php echo $this->Html->script('Hotels'); ?>