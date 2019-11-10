<?php
namespace Accounts {
	
	class AccountController {

		private $context;
		private $id;

		public function __construct($context = null, $id = null) {

			$this->context = $context;
			$this->id = $id;

		}

		public function __invoke($context = null) {

			return array('account: ' . $this->id);

		}

	}

}
