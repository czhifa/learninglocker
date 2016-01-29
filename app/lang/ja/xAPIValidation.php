<?php

return array(
  'errors' => array(
    'nesting' => 'サブ声明は、ネストされた声明を含めることはできない。',
    'score' => array(
      'scaled' => '結果: スコア: スケールは1と-1の間でなければならない。',
      'max' => '結果: スコア: maxはminより大きくなければならない。',
      'min' => '結果: スコア: minがmaxよりも小さくなければならない。',
      'raw' => '結果: スコア: 生は、maxとminの間でなければならない。'
    ),
    'timestamp' => 'タイムスタンプはISO8601形式が必要。',
    'version' => '声明は無効なバージョン。',
    'actor' => array(
      'one' => '声明は一つだけのアクター機能識別子を設定できる。',
      'valid' => '声明は、有効なアクター機能識別子が必要。'
    ),
    'allowed' => ':sectionで`:value`は許可されない`:key`',
    'required' => '`:key`は必要なキー、そして、:sectionで存在しない',
    'property' => ':sectionで`:key`は許可されないプロパティ',
    'langMap' => ':sectionで`:key`有効な言語マップではない',
    'lang' => ':sectionで`:key`は有効な言語ではない',
    'base64' => ':sectionで`:key`BASE64内容に有効な文字列ではない',
    'incorrect' => '声明は存在しない、または正しい形式ではない',
    'null' => ':sectionで`:key`は許可されないNULLを含む',
    'object' => array(
      'interactionType' => 'オブジェクト: 定義: インタラクションの種類が有効ではない。',
      'invalidProperty' => 'オブジェクト: 定義: 無効なプロパティを含む',
      'definition' => 'オブジェクト: 定義: キーIDと説明を持つ配列が必要',
      'extensions' => 'オブジェクト: 定義: 拡張機能はオブジェクトが必要'
    ),
    'group' => array(
      'groups' => 'グループは、グループを含めない',
      'limit' => 'グループは :limitメンバーだけを含める'
    ),
    'type' => ':sectionで`:key`は無効な:type',
    'numeric' => ':sectionで`:key`は数値ではない',
    'format' => ':sectionで`:key`正しい形式ではない',
    'account' => '`account`は`name`と`homePage`を含むでなければならない.'
  )
);
