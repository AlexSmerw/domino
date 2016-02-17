<?php
foreach ($arResult['SEARCH'] as $key => $item) {
    $result['items'][] = array(
        'title' => $item['TITLE'],
    );
    if ($key >= 9) break;
}
echo json_encode($result);