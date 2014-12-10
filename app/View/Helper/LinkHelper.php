<?php
	App::uses('AppHelper', 'View/Helper');

	class LinkHelper extends AppHelper {

		public $helpers = array('Html', 'Form');

		public function makeLink() {

		$link = '<hr>
			<div>
				<ul class="nav nav-pills">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Pousada/Cabana<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>'.$this->Html->link('Lista', array('controller' => 'hotel', 'action' => 'index')).'</li>
							<li>'.$this->Html->link('Adicionar', array('controller' => 'hotel', 'action' => 'add')).'</li>
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