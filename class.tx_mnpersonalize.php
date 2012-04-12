<?php

class tx_mnpersonalize {

    function contentProcess(&$params, &$obj) {
        $params['pObj']->content = str_replace('TYPO3', 'XXX', $params['pObj']->content);
    }
}


?>