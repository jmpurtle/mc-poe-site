<?php
namespace Accounts {
	
	class AccountsController {

		private $context;

		public function __construct($context = null) {

			$this->context = $context;

		}

		public function __invoke($context = null) {

			return array('accounts');

		}

		public function create($context = null) {

			return array('create account');
			
		}

		public function __get($id) {

			return new AccountController($this->context, $id);

		}

	}

}
