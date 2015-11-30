<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Example_model extends MY_Model {
	
	/**
	 * Validation Rules
	 * @var array
	 */
	protected $validate = array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'required|max_length[20]|alpha_dash'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[8]'
		),
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'valid_email'
		)
	);

	protected $validate_messages = array(
		array(
			'rule'=> 'required',
			'message' => '{field} is required. Please insert de text'
		),
		array(
			'rule'=> 'greater_than',
			'message' => '{field} bla bla bla bla'
		)
	);
}