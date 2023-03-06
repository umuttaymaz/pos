<?php

require '../_payment_config.php';

$baseUrl = $bankTestsUrl.'/regular/';
//account bilgileri kendi account bilgilerinizle degistiriniz
/*$account = \Mews\Pos\Factory\AccountFactory::createGarantiPosAccount(
    'garanti',
    '7000679',
    'PROVAUT',
    '123qweASD/',
    '30691298',
    \Mews\Pos\Gateways\AbstractGateway::MODEL_NON_SECURE,
    '',
    'PROVRFN',
    '123qweASD/'
);*/

$account = \Mews\Pos\Factory\AccountFactory::createGarantiPosAccount(
    'garanti',
    '1295076',
    'PROVAUT',
    '2023Esgo$',
    '10215352',
    \Mews\Pos\Gateways\AbstractGateway::MODEL_NON_SECURE,
    '323032334573676f323032334573676f323032334573676f'
);

$pos = getGateway($account);

$templateTitle = 'Regular Payment';
