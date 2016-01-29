<?php

return array(
  'errors' => array(
    'nesting' => '一个子声明不能包含嵌套的声明。',
    'score' => array(
      'scaled' => '结果: 分数: 缩放必须在1 和 -1之间。',
      'max' => '结果: 分数: 最大值必须大于最小值。',
      'min' => '结果: 分数: 最小值必须小于最大值。',
      'raw' => '结果: 分数: 原始值必须在最大值和最小值之间。'
    ),
    'timestamp' => '时间戳需要符合ISO 8601格式。',
    'version' => '该声明有无效的版本。',
    'actor' => array(
      'one' => '一个声明只能设置一个功能标识。',
      'valid' => '一个声明必须有一个有效的功能标识。'
    ),
    'allowed' => '在:section中，`:value`是不被允许的`:key`。',
    'required' => '`:key`是一个必须的兼，并且在:section中不存在',
    'property' => '在:section中，`:key`是不被允许的属性。',
    'langMap' => '在:section中，`:key`是无效的语言地图。',
    'lang' => '在:section中，`:key`是无效的语言地图。',
    'base64' => '在:section中，`:key`是不符合base64的无效字符串。',
    'incorrect' => '声明不存在或格式不正确。',
    'null' => '在:section中，`:key`含有不允许的null。',
    'object' => array(
      'interactionType' => '对象: 定义: 相互作用类型是无效的。',
      'invalidProperty' => '对象: 定义: 它是一个无效的属性。',
      'definition' => '对象: 定义: 他要是有键id和描述的数组。',
      'extensions' => '对象: 定义: 扩展需要对象。'
    ),
    'group' => array(
      'groups' => '组里不能含有组。',
      'limit' => '组里只能含有:limit成员。'
    ),
    'type' => '在:section中，`:key`是无效的:type。',
    'numeric' => ':section中，`:key`不是数字。',
    'format' => ':section中，`:key`是不正确的格式。',
    'account' => '`account`必须有`name`和`homePage`。'
  )
);
