<?php

/*
|----------------------------------------------------------------------------
| Translations for users
|----------------------------------------------------------------------------
*/

return array(
  'users'  => '用戶',
  'role'   => '角色',
  'invite' => array(
    'invite'  => '邀請用戶',
    'email'   => '電子郵件',
    'message' => '訊息（可選項）',
    'sample'  => '我想邀請您加入此 Learning Record Store （LRS）。',
    'invited' => '這些用戶已邀請。 :tokens<br /><br />將密碼重置連接分別分享給用戶。<br />如果您已經在連接中設定了電子郵件，將會自動給使用者發送郵件。',
    'failed'  => '邀請失敗。該用戶可能不是此LRS的成員，或者電子郵件地址無效。',
    'has_added' => ':INVITOR 已經將您添加  <strong>:LRS_TITLE</strong> Learning Record Store (LRS).',
    'has_invited' => ':INVITOR 邀請您加入 <strong>:LRS_TITLE</strong> Learning Record Store (LRS).',
    'instructions' => '請前往以下網頁：'
  ),
  'password'         => '密碼',
  'password_again'   => '密碼確認',
  'password_current' => '目前的密碼',
  'password_change'  => '變更密碼',
  'password_add'     => '輸入新的密碼',
  'password_problem' => '存儲密碼時遇到問題。',
  'password_remind'  => '密碼提示',
  'password_current_wrong' => '您目前的密碼不正確。',
  'password_instructions' => '請為您的賬號輸入新的密碼。請先完成這些。',
  'email'          => '電子郵件',
  'verify'         => '確認',
  'verify_success' => '您已經確認了此用戶。',
  'verified'       => '已確認',
  'verify_request' => '請先檢查您的電子郵件。',
  'email_verified' => '感謝，您 已經完成電子郵件驗證。',
  'email_verify_problem' => '驗證您的電子郵件地址時遇到問題。',
  'unverified'     => '未驗證',
  'verify_resend'  => '重新發送認證郵件。',
  'reset'          => '重置您的密碼',
  'success'        => '您的密碼已存儲。',
  'roles' => array(
    'super'       => 'Super Admin (可以做任何事)',
    'plus'        => 'Observer Plus (沒有具體的權限)',
    'observer'    => 'Observer (沒有具體的權限)',
    'help'        => 'Observer及Observer Plus存在的唯一理由是：提供一個可以給指定用戶授予建立LRS權限的選項。',
  ),
  'role_change'    => '用戶的角色已變更。',
  'deleted'        => '該用戶已刪除，他建立的LRS已移交給 site admin.',
  'updated'        => '賬號設定已更新。',
  'updated_error'  => '更新賬號時遇到問題。',
  'registration' => array(
      'thanks'       => '感謝登記使用 Learning Locker！為了完成您的註冊，我們需要驗證您的電子郵箱地址。',
      'instructions' => '請前往以下網頁：'
    ) 
);