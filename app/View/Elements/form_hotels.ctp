<?php
	echo $this->Form->input('title', array( 'class' => 'input-xxlarge',
											'label' => 'Título',
											'placeholder' => 'Título',
											'error' => array(
											'wrap' => 'div',
											'class' => 'formerror'
											)
							            ));
	echo $this->Form->input('description', array( 'class' => 'input-xxlarge',
											'label' => 'Descrição',
											'placeholder' => 'Descrição',
											'error' => array(
											'wrap' => 'div',
											'class' => 'formerror'
											)
							            ));
?>