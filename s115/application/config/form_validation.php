<?php

$config = array(
	'adduser'	=>	array(
			array(
				'field'	=>	'uname',
				'label'	=> '用户名',
				'rules'	=> 'required'
				),
			array(
				'field'	=>	'mobile',
				'label'	=> '手机号',
				'rules'	=> 'required|regex_match[/1[3|4|5|7|8][0-9]{9}/]'
				),
			array(
				'field'	=>	'email',
				'label'	=> '邮箱',
				'rules'	=> 'required|valid_email'
				),
			array(
				'field'	=>	'level',
				'label'	=> '用户等级',
				'rules'	=> 'required'
				),
			array(
				'field'	=>	'registertime',
				'label'	=> '注册时间',
				'rules'	=> 'required'
				)
		),
	'addagent'	=> array(
			array(
				'field'	=> 'agentname',
				'label'	=> '代理商名称',
				'rules'	=> 'required'
				),
			array(
				'field'	=> 'address',
				'label'	=> '代理商地址',
				'rules'	=> 'required'
				),
			array(
				'field'	=> 'manager',
				'label'	=> '负责人',
				'rules'	=> 'required'
				),
			array(
				'field'	=> 'identity',
				'label'	=> '负责人身份证',
				'rules'	=> 'required|regex_match[/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/]'
				),
			array(
				'field'	=> 'discount',
				'label'	=> '代理商折扣',
				'rules'	=> 'required'
				),
			array(
				'field'	=> 'phone',
				'label'	=> '手机',
				'rules'	=> 'required|regex_match[/1[3|4|5|7|8][0-9]{9}/]'
				),
			array(
				'field'	=> 'qq',
				'label'	=> 'QQ',
				'rules'	=> 'required|regex_match[/[1-9][0-9]{4,14}/]'
				),
			array(
				'field'	=> 'wechat',
				'label'	=> '微信',
				'rules'	=> 'required|alpha_dash'
				),
			array(
				'field'	=> 'email',
				'label'	=> '邮箱',
				'rules'	=> 'required|valid_email'
				),
			array(
				'field'	=> 'alipayname',
				'label'	=> '支付宝账户名',
				'rules'	=> 'required'
				),
			array(
				'field'	=> 'alipay',
				'label'	=> '支付宝账号',
				'rules'	=> 'required'
				)
		),

	);









