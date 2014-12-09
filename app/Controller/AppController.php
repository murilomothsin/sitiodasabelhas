<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('Upload',
								'Session',
								'Auth' => array(
									'loginRedirect' => array('controller' => 'hotel', 'action' => 'index'),
									'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
									'authorize' => array('Controller')
						));

	public function isAuthorized($user) {
		return true;
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true; //Admin pode acessar todas actions
		}
		return false; // O resto não pode
		}

	function beforeFilter() {
		$this->Auth->allow('index');
		if (isset($this->params['admin'])) {
			$this->Auth->deny('*'); // nega sempre que a rota for admin
		} else {
			$this->Auth->allow('*'); // permite todas as que não forem admin
		}
		Security::setHash('md5'); // seta o tipo de encriptação, pode ser sha ou outra também
		//$this->Auth->loginAction = array('controller'=>'pictures', 'action'=>'index');
		$this->Auth->autoRedirect = true; //ativado redireciona o usuário para a requisição anterior que foi negada após o login
		$this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);
        $this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);
	}

}