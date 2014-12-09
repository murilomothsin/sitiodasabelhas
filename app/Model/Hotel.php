<?php

	class Hotel extends AppModel {

		public $userTable = 'hotel';

		public $name = 'Hotel';

		public $hasMany = array('Picture' => array(
								'className' => 'Picture',
								'dependent'=> true,));


		public $validate = array(
		  'title' => array(
				'required' => array(
					 'rule' => array('notEmpty'),
					 'message' => 'Digite um titulo para a cabana!'
				)
		  )
		);
	}

?>