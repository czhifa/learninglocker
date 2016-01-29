<?php

return array(
  'errors' => array(
    'nesting' => '在子定義中不能嵌套定義。',
    'score' => array(
      'scaled' => '結果: 範圍: 範圍必須在 1 和 -1 之間。',
      'max' => '結果: 範圍: max 必須大於 min。',
      'min' => '結果: 範圍: min 必須小於 max。',
      'raw' => '結果: 範圍: raw 必須在 max 和 min 之間。'
    ),
    'timestamp' => '時間戳需要符合ISO8601格式。',
    'version' => '該定義有個無效的版本。',
    'actor' => array(
      'one' => '一個定義只能設定一個人員的行動標示。',
      'valid' => '一個定義必須有一個有效的人員行動標示。'
    ),
    'allowed' => '在:section中，`:value`不允許為`:key`',
    'required' => '在:section中，`:key` 是必須的，并不顯示出來。',
    'property' => '在:section中，`:key` 不是已認可的屬性。',
    'langMap' => '在:section中，`:key` 不是有效的語言地圖。',
    'lang' => '在:section中，`:key` 不是有效的語言。',
    'base64' => '在:section中，`:key` 不是基於base64的有效字串。',
    'incorrect' => '該定義不存在，或者格式不正確。',
    'null' => '在:section中，`:key`的值不允許為NULL。',
    'object' => array(
      'interactionType' => '對象: 定義: 作用類型無效。',
      'invalidProperty' => '對象: 定義: 有一個無效的屬性。',
      'definition' => '對象: 定義: 應該是一個帶有id和描述的陣列。',
      'extensions' => '對象: 定義: 演示應該是一個對象。'
    ),
    'group' => array(
      'groups' => '一個群組中不能包含群組。',
      'limit' => '一個群組只能有 :limit 個成員。'
    ),
    'type' => '在:section中，`:key` 不是有效的類型 :type ',
    'numeric' => '在:section中，`:key` 不是數字。',
    'format' => '在:section中，`:key` 格式不正確。',
    'account' => '一個`賬號`必須有一個名字 `name` 和一個 `首頁`。'
  )
);
