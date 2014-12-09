<?php

	class Picture extends AppModel {

		public $userTable = 'pictures';

		public $name = 'Picture';

		public $belongsTo = 'Hotel';

	}

?>