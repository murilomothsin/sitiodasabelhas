<?php

   class UsersController extends AppController {
	  public $helpers = array ('Html','Form');
	  public $uses = 'User';
	  public $name = 'Users';
	  public $components = array('Session');

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('add', 'logout', 'login');
		}

		public function admin_login() {
			if ($this->Auth->login()) {
				$this->redirect(array('controller' => 'Hotel', 'action' => 'index'));
			} else {
				if($this->request->is('post')){
					$this->Session->setFlash(__('Usuário ou senha inválidos!'));
					$this->redirect(array('action' => 'login'));
				}
			}
		}

		public function admin_logout() {
			$this->redirect($this->Auth->logout());
		}

		public function admin_index(){
			//$this->set('users', $this->User->find('all'));
			$this->User->recursive = 0;
			$options = array(
				'order' => array('User.created' => 'ASC'),
				'limit' => 10
			);
			$this->paginate = $options;
			$this->set('users', $this->paginate());
		}

		public function admin_add(){
			if($this->Auth->user('role') != 'admin'){
				$this->Session->setFlash('Você não tem premissão para adicionar usuários.');
				$this->redirect(array('action' => 'index'));
			}
			if($this->request->is('post')){
				$this->User->create();
				if($this->User->save($this->request->data)){
					$this->Session->setFlash("Usuário foi adicionado com sucesso!");
				} else {
					$this->Session->setFlash('Falha na inserção do usuário, tente outra vez.');
				}
				$this->redirect(array('action' => 'index'));
			}
		}

		public function admin_edit($id = null){
			if($this->Auth->user('role') != 'admin'){
				$this->Session->setFlash('Você não tem premissão para editar usuários.');
				$this->redirect(array('action' => 'index'));
			}
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Usuário inválido!'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Usuário foi editado com sucesso.'));
				} else {
					$this->Session->setFlash(__('Não foi possivel editar o usuário.'));
				}
				$this->redirect(array('action' => 'index'));
			} else {
				$this->request->data = $this->User->read(null, $id);
				unset($this->request->data['User']['password']);
			}
		}

		public function admin_delete($id = null) {
			if($this->Auth->user('role') != 'admin'){
				$this->Session->setFlash('Você não tem premissão para excluir usuários.');
				$this->redirect(array('action' => 'index'));
			}
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Usuário inválido.'));
			}
			if ($this->User->delete()) {
				$this->Session->setFlash(__('Usuário removido.'));
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Erro ao remover usuário.'));
			$this->redirect(array('action' => 'index'));
		}

   }

?>