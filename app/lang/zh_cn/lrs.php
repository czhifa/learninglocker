<?php

/*
|----------------------------------------------------------------------------
| Translations for LRSs
|----------------------------------------------------------------------------
*/

return array(
    'add'       => '添加LRS',
    'home'		=> 'LRS主页',
    'create'    => '创建一个LRS',
    'delete_confirm' => '要删除此LRS吗？撤消不可逆，你将失去所有的声明。',
    'edit'      => '编辑一个LRS',
    'new'		=> '创建新的LRS',
    'verify'    => '在你创建一个LRS之前，需要<a href=":verify_link">认证邮箱</a>。',
    'list'      => 'LRS列表',
    'none'      => '没有可用的LRS。',
    'reporting' => '报告中',
    'deleted'   => 'LRS已删除',
    'updated'   => 'LRS已更新',
    'create_problem' => 'LRS创建时，遇到了问题。',
    'created'   => 'LRS已创建',
    'active'    => '激活',

    'sidebar'	=> array(
    	'dash' 	    => '主页',
    	'edit' 	    => '编辑LRS详情',
    	'endpoint'  => '管理客户端',
    	'api'	    => 'LRS API',
    	'users'     => '管理用户',
    	'analytics' => '分析',
    	'reporting' => '报告中',
      'exporting' => '导出中'
    ),

    'endpoint' 	=> array(
    	'endpoint'       => '终端',
    	'basic_http'     => '基本HTTP认证',
    	'submit'         => '接受xAPI声明',
    	'instructions'   => '为了接受XAPI声明，你将需要提交以下端点和身份验证。',
    	'new_key_secret' => '生成新的密钥和密码'
    ),

    'api'       => array(
    	'oauth'    => 'OAuth 2.0',
    	'settings' => 'API设定',
    	'api'	   => 'LRS API'
    ),
    
	'client'       => array(
    	'manageclients'   => '客户端',
    	'manageclients_intro'   => '经由XAPI访问LRS时，为每个应用程序或用户一个新的客户端。',
    	'new_client'   => '创建客户端',
    	'unnamed_client' => '未命名客户端',
    	'created_fail' => '对不起，客户端没有创建成功。',
    	'created_sucecss' => '耶！客户端创建成功。',
    	'updated'   => '客户端已更新',
    	'none' => '是的，我们没有客户端。',
    	'delete_client_success' => '客户端已删除。',
    	'delete_client_error' => '哎呀。 出了些问题。客户端没有被删除。',
    	'authority' => array(
			'ifi' => '标识符',
			'mbox' => '电子邮件',
			'mbox_sha1sum' => '加密电子邮件',
			'openid' => 'Open id',
			'account' => '账户',
			'accountname' => '账户名',
			'accounthomepage' => '账户首页'
		)
    	
    ),

    'update_key'       => '您的密钥已被更新。',
    'update_key_error' => '更新你的密钥和密码时发生了错误。',
    'remove_user'      => '该用户已在这个LRS上被移除。'
);