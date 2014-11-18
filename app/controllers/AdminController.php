<?php
class AdminController extends BaseController {
	public function __construct(AdminValidator $validation){
		parent::__construct();
		$this->validation = $validation;
	}
    public function showLogin(){
      	return View::make('login');
	}
	public function postLogin(){
		if($this->validation->fails()){
			return Redirect::to('admin')->withErrors($this->validation->errors())->withInput();
		}else{
			echo 'Votre username est: '.Input::get('user');
			echo 'Votre password est: '.Input::get('pass');
		}
	}
}