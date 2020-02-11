<?php
return [
   'id' => 'video',
   'basePath' => realpath(__DIR__ . '/../'),
   'bootstrap' => [
      'debug'
   ],
   'components' => [
      'urlManager' => [
         'enablePrettyUrl' => true,
         'showScriptName' => false
         ],
         'request' => [
            'cookieValidationKey' => 'My Secret $'
         ]
      ],
      'modules' => [
         'debug' => 'yii\debug\Module'
      ]
];

