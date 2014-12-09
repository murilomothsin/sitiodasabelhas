<?php

class PicturesController extends AppController {

	var $name = 'Pictures';

	var $helpers = array('Html', 'Form');

	var $components = array('Upload');


	public function admin_index() {
		//$this->set('pictures', $this->Picture->find('all'));
		$this->Picture->recursive = 0;
		$options = array(
			'order' => array('Picture.created' => 'ASC'),
			'limit' => 10
		);
		$this->paginate = $options;
		$this->set('pictures', $this->paginate());
	}


	// function admin_add() {
	// 	$this->Session->setFlash(__('Não é possivel adicionar uma imagem.', true));
	// 	$this->redirect(array('action'=>'index'));
	// 	if (!empty($this->request->data)) {
	// 		$this->request->data['Picture'] = $this->Upload->uploadImg($this->request->data['Picture']);
	// 		if ($this->Picture->save($this->request->data)) { //salva o trabalho
	// 			$this->Session->setFlash(__('Arquivo enviado com sucesso.', true));
	// 			$this->redirect(array('action'=>'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('Desculpe. O trabalho não pode ser salvo. Tente novamente.', true));
	// 		}
	// 	}
	// }

	public function admin_NaCapa($id = null) {
		$this->Picture->id = $id;
		$this->request->data = $this->Picture->read(null, $id);
		$this->request->data['Picture']['capa'] = !$this->request->data['Picture']['capa'];
		$this->Picture->save($this->request->data);
		$this->redirect(array('action'=>'index'));

	}

	function admin_delete($id = null) {
		$this->Picture->id = $id;
		$options['conditions'] = array(
		    'Picture.id' => $id
		);
		$options['limit'] = '1';

		$pics = $this->Picture->find('all', $options);
		foreach ($pics as $key => $value) {
			//pr($value);
			//echo getcwd();
			if($value['Picture']['dir'] != 'img/capa')
				$targetPath = 'img/pictures/'.$value['Picture']['dir'];
			else
				$targetPath = $value['Picture']['dir'];
			if( is_dir($targetPath) ){
				$files1 = scandir($targetPath);
				unset($files1[0]);
				unset($files1[1]);
				sort($files1);
				//echo $targetPath.'/'.$value['Picture']['picture_path'];
				unlink($targetPath.'/'.$value['Picture']['picture_path']);
				$filesInDir = count($files1);
				if($filesInDir == 0){
					rmdir($targetPath);
				}
			}
		}
		//die();
		if($this->Picture->delete()){
			$this->Session->setFlash("Imagem foi excluido com sucesso!");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("Erro ao excluir imagem!");
		$this->redirect(array('action' => 'index'));
	}
}


?>