<?php
require_once(__DIR__ . '/vendor/autoload.php');

Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'ot3D2fei70etB3qXhgbwZhPP');
Swagger\Client\Configuration::getDefaultConfiguration()->setHost('https://cosmo-charon-staging.herokuapp.com/v1');

$api_instance = new Swagger\Client\Api\LeadsApi();

$lead_data = [
    'first_name' => 'Test',
    'last_name' => 'Test',
    'phones' => '+5493512345678',
    'emails' => 'testsirena001@test.com',
];

$lead = new \Swagger\Client\Model\VehicleLead();

try {
    $result = $api_instance->newVehicleLead($lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newVehicleLead: ', $e->getMessage(), PHP_EOL;
}