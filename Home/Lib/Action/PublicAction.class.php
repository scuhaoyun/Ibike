<?php 
class PublicAction extends Action{
	/*public function index(){
		//this->page();
		import('Image');
		import('String');
		Image::buildImageVerify(5,3,png,40,22,'verify');
		//$this->display( ); // 输出模板
	}
	*/
	
	public function verify(){
		import('Image');
		import('String');
		Image::buildImageVerify(5,3,png,50,26,'verify');
		//this-display();
	}

}?>