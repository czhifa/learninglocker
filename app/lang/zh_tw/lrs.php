<?php

/*
|----------------------------------------------------------------------------
| Translations for LRSs
|----------------------------------------------------------------------------
*/

return array(
    'add'       => '新增LRS',
    'home'		=> 'LRS首頁',
    'create'    => '新增一個LRS',
    'delete_confirm' => '您確定要刪除此LRS嗎？刪除后無法恢復，您可能會丟失所有的定義！',
    'edit'      => '編輯LRS',
    'new'		=> '建立新的LRS',
    'verify'    => '在您建立LRS之前，您需要<a href=":verify_link">驗證您的電子郵件</a>。',
    'list'      => 'LRS列表',
    'none'      => '暫無LRS',
    'reporting' => '報告中',
    'deleted'   => 'LRS已刪除',
    'updated'   => 'LRS已更新',
    'create_problem' => '建立 LRS時遇到問題。',
    'created'   => 'LRS已建立。',
    'active'    => '激活',

    'sidebar'	=> array(
    	'dash' 	    => '首頁',
    	'edit' 	    => '編輯LRS詳細信息',
    	'endpoint'  => '管理客戶端',
    	'api'	    => 'LRS API',
    	'users'     => '管理用戶',
    	'analytics' => '分析',
    	'reporting' => '報告中',
      'exporting' => '正在導出'
    ),

    'endpoint' 	=> array(
    	'endpoint'       => '端點',
    	'basic_http'     => '基本HTTP認證',
    	'submit'         => '接受xAPI定義',
    	'instructions'   => '接受xAPI定義，您需要提交到以下端點并認證。',
    	'new_key_secret' => '產生新的秘鑰和密碼。'
    ),

    'api'       => array(
    	'oauth'    => 'OAuth 2.0',
    	'settings' => 'API 設定',
    	'api'	   => 'LRS API'
    ),
    
	'client'       => array(
    	'manageclients'   => '客戶端',
    	'manageclients_intro'   => '為通過xAPI使用LRS的應用程式或者用戶建立一個新的客戶端。',
    	'new_client'   => '建立客戶端',
    	'unnamed_client' => '未命名的客戶端',
    	'created_fail' => '很抱歉，客戶端建立失敗！ ',
    	'created_sucecss' => '客戶端建立成功。歡呼！',
    	'updated'   => '客戶端已更新',
    	'none' => '我們尚且沒有任何客戶端。',
    	'delete_client_success' => '客戶端已刪除。',
    	'delete_client_error' => '哎呀，出錯了，客戶端沒有刪除成功！',
    	'authority' => array(
			'ifi' => '標識符',
			'mbox' => '電子郵件',
			'mbox_sha1sum' => '加密電子郵件',
			'openid' => '開放的id',
			'account' => '賬號',
			'accountname' => '賬號名稱',
			'accounthomepage' => '賬號首頁'
		)
    	
    ),

    'update_key'       => '您的秘鑰已更新。',
    'update_key_error' => '更新您的秘鑰及密碼時遇到問題。',
    'remove_user'      => '從用戶已從該LRS中移除。'
);