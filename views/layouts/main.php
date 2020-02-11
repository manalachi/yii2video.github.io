<?php

use \yii\bootstrap\NavBar;
use \yii\bootstrap\Nav;

$this->beginPage(); ?>
<html>
<head>
    <title>Video School</title>
        <?php $this->head();?>
</head>
<body>
    <?php $this->beginBody();?>
            <?php
                NavBar::begin([
                    'brandLabel' => 'ITVDN',
                    'brandUrl'   => 'Yii'::$app->homeUrl,
                    'options'    => [
                         'class' => 'navbar-default navbar-fixed-top'
                    ]
                ]);
                $items = [
                    ['label' => 'Join',  'url' => ['/user/join']],
                    ['label' => 'Login', 'url' => ['/user/login']]
                ];
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => $items
                    ]);                     
                    
                NavBar::end();
            ?>
        <div class="container" style="margin-top: 60px">
            <?= $content ?>
        </div>
    <?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>