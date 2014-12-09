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
	echo $this->Form->input('place', array( 'class' => 'input-xlarge',
											'label' => 'Local',
											'placeholder' => 'Local',
											'error' => array(
											'wrap' => 'div', 
											'class' => 'formerror'
											)
							            ));
	echo $this->Form->input('photographer', array( 'class' => 'input-xlarge',
											'label' => 'Fotógrafo',
											'placeholder' => 'Fotógrafo',
											'error' => array(
											'wrap' => 'div', 
											'class' => 'formerror'
											)
							            ));
	echo $this->Form->input('model', array( 'class' => 'input-xlarge', 
											'label' => 'Modelo',
											'placeholder' => 'Modelo',
											'error' => array(
											'wrap' => 'div', 
											'class' => 'formerror'
											)
							            ));
	echo $this->Form->input('when', array(
									    'class' => 'input-small',
									    'label' => 'Data',
									    'dateFormat' => 'DMY',
									));
	echo $this->Form->input('category_id', array( 'class' => 'input-xlarge', 
											'label' => 'Categoria',
											'error' => array(
											'wrap' => 'div', 
											'class' => 'formerror'
											)
							            ));
?>