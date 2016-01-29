<?php

return [
  'scope-descriptions' => [
    'statements-write' => '輸入任何定義',
    'statements-read-mine' => '閱讀“我”寫的定義，那就是說：如果用目前的token寫定義，那麼也會授權與LRS匹配的讀權限。',
    'statements-read' => '閱讀任何定義',
    'state' => '讀/寫 狀態數據，僅限於與目前token有關的活動或人員。',
    'define' => '定義/重定義 活動及人員。在存儲一個未授權的定義時，定義的id及原始定義將會被存儲用於審核，但不會更新任何活動或人員的內部訊息。',
    'profile' => '讀/寫 個人資料數據。 僅限於與目前token有關的活動或人員',
    'all-read' => '沒有閱讀限制',
    'all' => '沒有任何限制'
  ]
];
