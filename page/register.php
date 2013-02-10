<?php
class page_register extends Page {
	function init(){
		parent::init();

		$form = $this->add('Form');
		$form->setModel('User',array('email','password'));

		$form->addSubmit('Register');


		if($form->isSubmitted()){
			$form->update();
			$form->js()->univ()->successMessage('We have send you confirmation email')->execute();
		}
		
	}
}