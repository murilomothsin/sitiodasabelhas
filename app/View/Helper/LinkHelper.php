<?php
	App::uses('AppHelper', 'View/Helper');

	class LinkHelper extends AppHelper {

		public $helpers = array('Html', 'Form');

		public function makeLink() {

		$link = '<hr>
			<div>
				<ul class="nav nav-pills">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Albums<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'albums', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'albums', 'action' => 'add')).'</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'users', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'users', 'action' => 'add')).'</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Videos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'videos', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'videos', 'action' => 'add')).'</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'categories', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'categories', 'action' => 'add')).'</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Capas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'capas', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'capas', 'action' => 'add')).'</li>
						</ul>
					</li>
					<li>'.$this->Html->link('Imagens', array('controller' => 'pictures', 'action' => 'index')).'</li>
					<li>'.$this->Html->link('Adicionar', array('action' => 'add')).'</li>
					<li style="float: right;">'.$this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')).'</li>
					<li style="float: right;">'.$this->Html->link('Limpar', array('controller' => 'albums', 'action' => 'clearTemp')).'</li>
				</ul>
			</div>
		<hr>';

		return  $link;
		}

		public function formUsers( $Legend ) {
			$options = array(
				'label' => 'Enviar',
				'class' => 'btn btn-large btn-primary'
			);
			$link = $this->Form->create('User', array('class' => 'form-horizontal')).
						"<fieldset>
							<legend>$Legend</legend>".
							$this->Form->input('name', array('class' => 'input-xxlarge',
																'label' => 'Nome',
																'div' => array('class' => 'control-group'))).
							$this->Form->input('email', array('class' => 'input-xxlarge',
																'label' => 'E-mail',
																'div' => array('class' => 'control-group'))).
							$this->Form->input('username', array('label' => 'Usuário',
																	'div' => array('class' => 'control-group'))).
							$this->Form->input('password', array('label' => 'Senha',
																	'div' => array('class' => 'control-group'))).
							$this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author'),
												'label' => 'Grupo',
												'div' => array('class' => 'control-group')
							)).
					   		$this->Form->end($options).
						"</fieldset>";
			return $link;
		}
	}
?>