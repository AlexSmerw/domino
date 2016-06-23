<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();



    switch ($this->GetTemplateName()) {
        case 'ajax':
            if ($_REQUEST['time'] >= MIN_TIME) {
                try {
                    $form = new \Domino\Forms\Feedback($_REQUEST, IBLOCK_FORM_FEEDBACK);
                    $form->process();
                    $arResult['ERROR'] = 0;
                } catch (Exception $ex) {
                    $arResult['ERROR'] = 1;
                }
            }
            $this->IncludeComponentTemplate();

            break;
        default:
            try {
                if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
                    $this->SetResultCacheKeys();
                    $this->IncludeComponentTemplate();
                }
            } catch (Exception $e) {
                dv($e->getMessage());
            }

            break;
}