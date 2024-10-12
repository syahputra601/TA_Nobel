<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
		'register' => array(
				array(
						'field' => 'username',
						'label' => 'Username',
						'rules' => 'required|callback_username_check'	
					),
				array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required|min_length[6]'
					),
				array(
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'required|valid_email|callback_email_check'
					)
		),
		'login' => array(
				array(
						'field' => 'username',
						'label' => 'Username',
						'rules' => 'required'	
					),
				array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required|callback_password_check'
					)
		)
);