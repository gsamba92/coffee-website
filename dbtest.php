<?php
require 'vendor/autoload.php';
use Aws\Rds\RdsClient;
$client = RdsClient::factory(array(
'version' => 'latest',
'region'  => 'us-west-2'
));
$result = $client->describeDBInstances(array(
    'DBInstanceIdentifier' => 'itmo544-cloudvipul',
));
$endpoint = $result['DBInstances'][0]['Endpoint']['Address'];
print_r($endpoint);
echo "</br>";
echo "begin database";
$link = mysqli_connect($endpoint,"masterawsuser","masteruserpassword","coffee",3306) or die("Error " . mysqli_error($link));
?>