<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	public function _initViewHelpers(){
		
		$this->bootstrap('layout');
		$layout = $this->getResource('layout');
		$view = $layout->getView();
		
		$view->doctype('XHTML1_TRANSITIONAL');
		$view->headTitle()->setSeparator(' :: ');
		$view->headTitle('RGProgress');
	
	}

}

