<?php

return [
  'scope-descriptions' => [
    'statements-write' => '写声明',
    'statements-read-mine' => '"我"写的阅读声明，需要和当前token写声明时，LRS分配的一致。',
    'statements-read' => '读声明',
    'state' => '读/写状态数据，仅限于与当前token有关的活动和参与者。',
    'define' => '定义/重新定义的活动和参与者。如果存储未认证的声明时，ID将被保存，LRS可能会保存原始声明，但不应该更新任何参与者或活动的内部表现形式。',
    'profile' => '读/写状态数据，仅限于与当前token有关的活动和参与者。',
    'all-read' => '读取权限的限制',
    'all' => '无限制访问'
  ]
];
