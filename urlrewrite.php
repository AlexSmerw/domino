<?php

$arUrlRewrite = [

    [
        'CONDITION' => '#^/news/(.+)/(\?.*)?$#',
        'RULE' => 'CODE=$1',
        'PATH' => '/news/index.php'
    ],
    [
        'CONDITION' => '#^/shops_list/tag-(.+)/(\?.*)?$#',
        'RULE' => 'TYPE=$1',
        'PATH' => '/shops_list/index.php'
    ],
    [
        'CONDITION' => '#^/shops_list/(.+)/(\?.*)?$#',
        'RULE' => 'CODE=$1',
        'PATH' => '/shops_list/index.php'
    ],


];