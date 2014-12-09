<?php

class HotelController extends AppController {

	var $name = 'Hotel';

	var $helpers = array('Html', 'Form');

	var $components = array('Upload');

	public function admin_index() {
		$this->Hotel->recursive = 0;
		$options = array(
			'order' => array('Album.when' => 'DESC'),
			'limit' => 10
		);
		$this->paginate = $options;
		$this->set('hotels', $this->paginate());
	}

	public function admin_clearTemp(){

		echo getcwd();
		$targetPath = 'files/uploadify/temp/';
		pr($targetPath);
		$files1 = scandir($targetPath);
		unset($files1[0]);
		unset($files1[1]);
		sort($files1);
		// echo '<pre>';
		// print_r($files1);
		// echo '</pre>';
		$delete = false;
		foreach ($files1 as $key => $value) {
			$folders = scandir($targetPath.$value);
			unset($folders[0]);
			unset($folders[1]);
			sort($folders);
			foreach ($folders as $k => $v) {
				unlink($targetPath.$value.'/'.$v);
			}
			$delete = rmdir($targetPath.$value);
		}

		if($delete)
			$this->Session->setFlash('Arquivos temporarios excluidos com sucesso!');
		else
			$this->Session->setFlash('Falha ao excluir arquivos temporarios!');

		$this->redirect(array('action' => 'index'));
	}

	public function admin_add(){

		if($this->request->is('post')){
			chdir('files/uploadify/temp');

			$targetPath = AuthComponent::user('username').$this->request->data['timeInit'];
			$pathToCopy = realpath('../../../img/pictures').'/'.$this->request->data['timeInit'].'/';
			//$pathToCopy .= '/'.$this->request->data['timeInit'].'/';
			if( is_dir($targetPath) ){
				$files1 = scandir($targetPath);
				unset($files1[0]);
				unset($files1[1]);
				sort($files1);

				mkdir($pathToCopy, 0777);
				$i = 1;
				foreach ($files1 as $key => $value) {
					rename($targetPath.'/'.$value, $pathToCopy.$value);
					chmod($pathToCopy.$value, 0777);
					$file_size = filesize($pathToCopy.$value);
					$this->request->data['Picture'][$i]['picture_path'] = $value;
					$this->request->data['Picture'][$i]['dir'] = $this->request->data['timeInit'];
					$this->request->data['Picture'][$i]['file_size'] = number_format($file_size/1024, 2) . " KB";
					$i++;
				}
				rmdir($targetPath);
			}

			if( !is_dir($pathToCopy) )
				mkdir($pathToCopy, 0777);
			if(isset($this->request->data['Picture']['0'])){
				rename($this->request->data['Picture']['0']['Img']['tmp_name'], $pathToCopy.$this->request->data['Picture']['0']['Img']['name']);
				chmod($pathToCopy.$this->request->data['Picture']['0']['Img']['name'], 0777);
				$this->request->data['Picture']['0']['picture_path'] = $this->request->data['Picture']['0']['Img']['name'];
				$this->request->data['Picture']['0']['dir'] = $this->request->data['timeInit'];
				$this->request->data['Picture']['0']['file_size'] = number_format($this->request->data['Picture']['0']['Img']['size']/1024, 2) . " KB";
			}

			$this->Hotel->create();
			$this->request->data['Hotel']['user_id'] = $this->Auth->user('id');
			if($this->Hotel->saveAll($this->request->data)){
				$this->Session->setFlash("Cabana foi adicionado com sucesso!");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Falha na inserção do cabana, tente outra vez.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	function admin_delete($id = null) {
		$this->Hotel->id = $id;

		$options['conditions'] = array(
		    'Picture.album_id' => $id
		);
		$options['limit'] = '1';

		$pics = $this->Hotel->Picture->find('all', $options);

		foreach ($pics as $key => $value) {
			$targetPath = 'img/pictures/'.$value['Picture']['dir'];
			if( is_dir($targetPath) ){
				$files1 = scandir($targetPath);
				unset($files1[0]);
				unset($files1[1]);
				sort($files1);
				foreach ($files1 as $k => $v) {
					echo unlink($targetPath.'/'.$v);
				}
				echo rmdir($targetPath);
			}
		}

		if($this->Hotel->delete()){
			$this->Session->setFlash("Cabana foi excluido com sucesso!");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash("Erro ao excluir cabana!");
		$this->redirect(array('action' => 'index'));
	}

	function admin_edit($id = null) {
		$this->Hotel->id = $id;

		if($this->request->is('post') || $this->request->is('put')) {
			if($this->Hotel->save($this->request->data)){
				$this->Session->setFlash("Cabana foi editado com sucesso!");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Falha na edição do cabana, tente outra vez.');
			}
		}else{
			$this->request->data = $this->Hotel->read();
		}
	}
}

?>