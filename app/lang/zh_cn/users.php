<?php

/*
|----------------------------------------------------------------------------
| Translations for users
|----------------------------------------------------------------------------
*/

return array(
  'users'  => '用户',
  'role'   => '角色',
  'invite' => array(
    'invite'  => '邀请用户',
    'email'   => '电子邮件(单行)',
    'message' => '信息(可选)',
    'sample'  => '我想邀请你参加Learning Record Store (LRS).',
    'invited' => '这些用户已经被邀请。 :tokens<br /><br />分享密码重置链接给他们各自的用户。<br />如果你有配置了这些链接的电子邮件，它会发送给用户。',
    'failed'  => '邀请该用户失败，请检查该用户是否为LRS的成员，电子邮件是否有效。',
    'has_added' => ':INVITOR已将你添加到<strong>:LRS_TITLE</strong> Learning Record Store (LRS).',
    'has_invited' => ':INVITOR已邀请你到<strong>:LRS_TITLE</strong> Learning Record Store (LRS).',
    'instructions' => '请访问以下网址：'
  ),
  'password'         => '密码',
  'password_again'   => '确认密码',
  'password_current' => '现在的密码',
  'password_change'  => '密码修改',
  'password_add'     => '设置密码',
  'password_problem' => '保存密码时遇到了问题。',
  'password_remind'  => '密码提醒',
  'password_current_wrong' => '现在的密码输入错误。',
  'password_instructions' => '为你的账户设置密码。完成之后才能继续。',
  'email'          => '电子邮件',
  'verify'         => '验证',
  'verify_success' => '已验证该用户。',
  'verified'       => '验证',
  'verify_request' => '为之后的步骤，请检查您的电子邮件。',
  'email_verified' => '谢谢，你已验证了电子邮件。',
  'email_verify_problem' => '验证你的邮箱地址时遇到了一个问题。',
  'unverified'     => '为验证',
  'verify_resend'  => '重新发送验证电子邮件',
  'reset'          => '重置密码',
  'success'        => '密码已保存',
  'roles' => array(
    'super'       => '超级管理员(可以访问执行所有)',
    'plus'        => '观察者＋(没有特殊权限)',
    'observer'    => '观察者(没有特殊权限)',
    'help'        => '观察者和观察者＋存在的唯一理由就是为特定用户提供创建LRS的权限。',
  ),
  'role_change'    => '用户角色已修改。',
  'deleted'        => '用户删除时，他创建的所有LRS都会被转移到网站管理员处。',
  'updated'        => '账户设置已更新',
  'updated_error'  => '更新账户时遇到了一个问题。',
  'registration' => array(
      'thanks'       => '感觉您注册Learning Locker. 为了完成此次注册，我们需要您验证邮件。',
      'instructions' => '请访问以下网址：'
    ) 
);