<?php

/*
|----------------------------------------------------------------------------
| Translations for LRSs
|----------------------------------------------------------------------------
*/

return array(
    'add'       => 'LRSを追加する',
    'home'		=> 'LRSホーム',
    'create'    => 'LRSを作成する',
    'delete_confirm' => 'あなたはこのLRSを削除してもよろしいですか？それは元に戻すことができないので、すべての声明が失うことになる。',
    'edit'      => 'LRSを編集する',
    'new'		=> '新しいLRSを作成する',
    'verify'    => 'LRSを作成する前に、<a href=":verify_link">イメールを確認する</a>が必要です。',
    'list'      => 'LRSリスト',
    'none'      => 'LRSがない',
    'reporting' => '報告',
    'deleted'   => 'LRSが削除された',
    'updated'   => 'LRSを更新した',
    'create_problem' => 'LRSを作成する時に、問題が発生した。',
    'created'   => 'LRSが作成した。',
    'active'    => 'アクティブ',

    'sidebar'	=> array(
    	'dash' 	    => 'ダッシュボード',
    	'edit' 	    => 'LRS詳細を編集する',
    	'endpoint'  => 'クライアントを管理する',
    	'api'	    => 'LRS API',
    	'users'     => 'ユーザーを管理する',
    	'analytics' => '分析論',
    	'reporting' => '報告',
      'exporting' => 'エクスポート'
    ),

    'endpoint' 	=> array(
    	'endpoint'       => 'エンドポイント',
    	'basic_http'     => '基本HTTP認証',
    	'submit'         => 'XAPI声明を受け入れる',
    	'instructions'   => 'XAPI声明を受け入れるためには、次のエンドポイントと認証を提出する必要があります。',
    	'new_key_secret' => '新しい鍵とシークレットを生成する'
    ),

    'api'       => array(
    	'oauth'    => 'OAuth 2.0',
    	'settings' => 'API設定',
    	'api'	   => 'LRS API'
    ),
    
	'client'       => array(
    	'manageclients'   => 'クライアント',
    	'manageclients_intro'   => 'XAPI経由LRSにアクセスする時、各アプリケーションまたはユーザーに新しいクライアントを作成する。',
    	'new_client'   => 'クライアントを作成する',
    	'unnamed_client' => '名前がないクライアント',
    	'created_fail' => 'すみさせん。クライアントが正常に作成されなかった。',
    	'created_sucecss' => '万歳！クライアントが正常に作成された。',
    	'updated'   => 'クライアントを更新した',
    	'none' => 'はい、私たちはクライアントが持っていない。',
    	'delete_client_success' => 'クライアントが削除された。',
    	'delete_client_error' => 'おっと。何かが間違っていた。クライアントが削除されていない。',
    	'authority' => array(
			'ifi' => '識別子',
			'mbox' => 'イメール',
			'mbox_sha1sum' => '暗号化されたいメール',
			'openid' => 'Open id',
			'account' => 'アカウント',
			'accountname' => 'アカウント名',
			'accounthomepage' => 'アカウントホームページ'
		)
    	
    ),

    'update_key'       => 'あなたの鍵が更新された。',
    'update_key_error' => 'あなたの鍵とシークレットの更新中にエラーが発生した。',
    'remove_user'      => 'ユーザーはLRSから削除された。'
);