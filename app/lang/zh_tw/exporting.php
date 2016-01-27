<?php

/*
|----------------------------------------------------------------------------
| Translations for reporting
|----------------------------------------------------------------------------
*/

return [
  'title' => 'Exports',
  'info' => 'Export 訊息',
  'select' => [
    'report' => '選擇一個報告',
    'fields' => '選擇字段'
  ],
  'fields' => [
    'name' => '名稱',
    'description' => '描述',
    'created' => '已創建'
  ],
  'actions' => [
    'saved' => '該出口已存儲。',
    'save' => '存儲',
    'download' => '下載',
    'add' => [
      'field' => '新增字段',
      'export' => '新增出口'
    ],
    'edit' => '編輯',
    'delete' => '刪除'
  ],
  'new' => [
    'name' => '新增出口',
    'description' => '新的出口'
  ],
  'errors' => [
    'noReport' => '必須有報告',
    'noFields' => '必須至少有一個字段。',
    'mustSave' => '在下載之前，必須先存儲新增的出口。',
    'notFound' => '沒有找到id 是`:exportId`的出口',
    'reportExistence' => '該報告不存在',
    'delete' => '不能刪除報告。',
    'undefinedKey' => '`:key`沒有定義。'
  ],
  'placeholders' => [
    'statementField' => '聲明字段名稱',
    'userField' => '你的字段名稱',
    'name' => '為該出口命名',
    'description' => '為該出口添加描述'
  ],
  'unknown' => '未知'
];