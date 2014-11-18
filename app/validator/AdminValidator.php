<?php
class AdminValidator extends BaseValidator{
	public function __construct(){
		$this->regles = array('user' => 'required|max:50',
						'pass' => 'required|min:5|max:50');
	}
}
?>