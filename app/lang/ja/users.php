<?php

/*
|----------------------------------------------------------------------------
| Translations for users
|----------------------------------------------------------------------------
*/

return array(
  'users'  => 'ユーザー',
  'role'   => 'ロール',
  'invite' => array(
    'invite'  => 'ユーザーを招待する',
    'email'   => 'イメールアドレス（別々の行）',
    'message' => 'メッセージ（オプション）',
    'sample'  => '私はLearning Record Store (LRS)に招待したい。',
    'invited' => 'これらのユーザーが招待されている。:tokens<br /><br />それぞれのユーザーとこワンタイムパスワードリセットのリンクを共有する。<br />あなたはイメールでこれらのリンクを設定した場合は、ユーザーにイメールで送信される。',
    'failed'  => 'ユーザー招待を失敗した、ユーザーがLRSのメンバー、そして、メールが有効のことを確認してください。',
    'has_added' => ':INVITOR は　<strong>:LRS_TITLE</strong> Learning Record Store (LRS)にあなたを追加した。',
    'has_invited' => ':INVITOR は <strong>:LRS_TITLE</strong> Learning Record Store (LRS)にあなたを招待した。',
    'instructions' => '次のWebアドレスにアクセスしてください：'
  ),
  'password'         => 'パスワード',
  'password_again'   => 'パスワードの確認',
  'password_current' => '現在のパスワード',
  'password_change'  => 'パスワードを変更する',
  'password_add'     => 'パスワードを追加する',
  'password_problem' => 'パスワードを保存する問題が発生した。',
  'password_remind'  => 'パスワードリマインダ',
  'password_current_wrong' => 'あなたの現在のパスワードが正しくない。',
  'password_instructions' => 'あなたのアカウントにパスワードを追加してください。続行する前に、これを実行する必要がある。',
  'email'          => 'イメール',
  'verify'         => '確認',
  'verify_success' => 'このユーザーを確認した。',
  'verified'       => '確認した',
  'verify_request' => '続行するために、あなたのイメールをチェックしてください。',
  'email_verified' => 'おかげて、あなたのイメールが正常に確認された。',
  'email_verify_problem' => 'メールアドレスを確認する問題が発生した。',
  'unverified'     => '確認しない',
  'verify_resend'  => 'イメールを再送信する',
  'reset'          => 'パスワードをリセットする',
  'success'        => 'あなたのパスワードが正常に保存した。',
  'roles' => array(
    'super'       => 'スーパー管理者（アクセスして、すべてことをできる）',
    'plus'        => 'オブザーバープラス（特定の権限がない）',
    'observer'    => 'オブザーバー（特定の権限がない）',
    'help'        => 'オブザーバーとオブザーバープラスが存在する唯一の理由は、特定のユーザーにLRSを作成する権限を提供する。',
  ),
  'role_change'    => 'ユーザーロールを変更する',
  'deleted'        => 'ユーザーが削除され、すべて作成したLRSは管理者に転送する。',
  'updated'        => 'アカウント設定が更新された',
  'updated_error'  => 'アカウント更新する時に、問題が発生した',
  'registration' => array(
      'thanks'       => 'ありがとうございます。Learning Lockerを使用するために、新規登録した。登録を完了するために、電子メールを確認する必要がる。',
      'instructions' => '次のWebアドレスにアクセスしてください：'
    ) 
);