<?php

class IndexController extends Controller
{
	public $layout='column1';

	public function actionIndex()
	{
		$this->render('index');
	}
}