<?php
namespace Home {
	
	class HomeController {

		private $context;
		public $news = '\\News\\NewsController';
		public $accounts = '\\Accounts\\AccountsController';

		public function __construct($context = null) {

			$this->context = $context;

		}

		public function __invoke($context = null) {

			return array('homepage');

		}

	}

}
