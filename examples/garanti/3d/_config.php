<?php

use Mews\Pos\Factory\AccountFactory;

require '../_payment_config.php';

$baseUrl = $bankTestsUrl.'/3d/';
//account bilgileri kendi account bilgilerinizle degistiriniz
$account = AccountFactory::createGarantiPosAccount(
    'garanti',
    '1295076',
    'PROVAUT',
    '2023Esgo$',
    '10215352',
    \Mews\Pos\Gateways\AbstractGateway::MODEL_3D_SECURE,
    '323032334573676f323032334573676f323032334573676f'
);

$pos = getGateway($account);

$transaction = \Mews\Pos\Gateways\AbstractGateway::TX_PAY;

$templateTitle = '3D Model Payment';
