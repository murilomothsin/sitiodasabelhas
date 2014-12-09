<?php

class CapasController extends AppController {

	var $name = 'Capa';

	var $helpers = array('Html', 'Form');

	public $uses = array('Picture');

	public function admin_index() {
		//$this->set('pictures', $this->Picture->find('all', array(
		//'conditions' => array('capa' => '1'))));

		$this->Picture->recursive = 0;
		$options = array(
			'conditions' => array('capa' => '1'),
			'order' => array('Picture.created' => 'ASC'),
			'limit' => 10
		);
		$this->paginate = $options;
		$this->set('pictures', $this->paginate());
	}

	public function admin_add() {
		if (!empty($this->request->data)) {
			$this->request->data['Picture'] = $this->Upload->uploadImg($this->request->data['Picture'], 'img/capa');
			$this->request->data['Picture']['capa'] = 1;
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('Arquivo enviado com sucesso.', true));
			} else {
				$this->Session->setFlash(__('Desculpe. O trabalho não pode ser salvo. Tente novamente.', true));
			}
			$this->redirect(array('action'=>'index'));
		}
	}

	function admin_delete($id = null) {
		$this->Picture->id = $id;
		$options['conditions'] = array(
		    'Picture.id' => $id
		);
		$options['limit'] = '1';

		$pics = $this->Picture->find('all', $options);
		foreach ($pics as $key => $value) {
			if($value['Picture']['dir'] != 'img/capa')
				$targetPath = 'img/pictures/'.$value['Picture']['dir'];
			else
				$targetPath = $value['Picture']['dir'];
			if( is_dir($targetPath) ){
				$files1 = scandir($targetPath);
				unset($files1[0]);
				unset($files1[1]);
				sort($files1);
				unlink($targetPath.'/'.$value['Picture']['picture_path']);
				$filesInDir = count($files1);
				if($filesInDir == 0){
					rmdir($targetPath);
				}
			}
		}
		if($this->Picture->delete()){
			$this->Session->setFlash("Imagem foi excluido com sucesso!");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("Erro ao excluir imagem!");
		$this->redirect(array('action' => 'index'));
	}

}
