<?php

/*
|----------------------------------------------------------------------------
| Translations for reporting
|----------------------------------------------------------------------------
*/

return [
  'title' => '出口',
  'info' => '出口信息',
  'select' => [
    'report' => '选择一个报告',
    'fields' => '选择字段'
  ],
  'fields' => [
    'name' => '名',
    'description' => '描述',
    'created' => '已创建'
  ],
  'actions' => [
    'saved' => '出口已保存。',
    'save' => '保存',
    'download' => '下载',
    'add' => [
      'field' => '添加字段',
      'export' => '添加出口'
    ],
    'edit' => '编辑',
    'delete' => '删除'
  ],
  'new' => [
    'name' => '新的出口',
    'description' => '一个新的出口。'
  ],
  'errors' => [
    'noReport' => '必须有一个出口。',
    'noFields' => '必须有至少一个字段。',
    'mustSave' => '您可以下载它的结果之前，必须保存这个新出口。',
    'notFound' => '找不到id为 `:exportId`的出口。',
    'reportExistence' => '报告不存在',
    'delete' => '无法删除报告。',
    'undefinedKey' => '`:key`未定义。'
  ],
  'placeholders' => [
    'statementField' => '声明字段名',
    'userField' => '你的字段名',
    'name' => '命名此出口',
    'description' => '描述此出口'
  ],
  'unknown' => '未知'
];