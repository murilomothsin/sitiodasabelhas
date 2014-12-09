<div class="users form" align="center">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
		<?php 
			echo $this->Form->input('username', array( 'label' => 'Usuário', 'placeholder' => 'Usuário'));
			echo $this->Form->input('password', array( 'type' => 'password', 
														'label' => 'Senha',
														'placeholder' => 'Senha'));
		?>
	</fieldset>
	<?php 
	$options = array(
			'label' => 'Login',
			'class' => 'btn btn-large btn-primary'
		);
	echo $this->Form->end($options);?>
</div>