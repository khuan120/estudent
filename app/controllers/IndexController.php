<?php
class IndexController extends \Phalcon\Mvc\Controller {
	public function indexAction() {
		$user = new Users();
		$this->view->name = " Waraporn";
		$this->view->items = Users::find();
		//method find จะไปดึงข้อมูลในฐานข้อมูล  โดยส่งค่าตัวแปร items เข้าไปใน view  โดยเก็ทเดต้าจาก model
	}
}