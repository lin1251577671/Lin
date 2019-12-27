<?php
namespace app\desktop\controller;
use think\Controller;

class jtnice extends Controller
{
	public function data()
	{
		
		return $this->fetch('index');
	}
}
