<?php

require __DIR__ . '/vendor/autoload.php';

use Sysgaming\MtsPhpSdk\Control\Impl\MtsControllerImpl;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\TicketHelper;
use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\GuzzleException;
use \Sysgaming\MtsPhpSdk\Exceptions\MtsException;
use \Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;

class MtsSDK extends MtsControllerImpl {

    function doHttpPost(MtsRequest $request)
    {
        $client = new Client();
        $endpoint = $request->getEndpoint();
        $contents = $request->getContents();
        $signature = $request->getSignature();
        $headers = array(
            self::SIGNATURE_HEADER_NAME => $signature,
            'Content-Type' => 'application/json',
        );
        try {
            $response = $client->post($endpoint, ['body' => $contents, 'headers' => $headers]);
            $statusCode = $response->getStatusCode();
        } catch (GuzzleException $ex) {
            return (new MtsException($ex->getMessage()));
        }
        $contents = $response->getBody()->getContents();
        return (new MtsResponse())
            ->setContents($contents)
            ->setStatusCode($statusCode);
    }
}

$mtsSDK = new MtsSDK('http://192.168.15.55:8090/playcet_live2/mts/1');
$request = new MtsRequest();

$ticketHelper = new TicketHelper();

$ticket = $ticketHelper->handleTicket(10, "123123123", array(array("sport_id" => 12, "match_id" => 1, "odd_id" => 3, "odd_price" => 100)), "1");

echo $ticket->getTimestampUtc();

//$request->setEndpoint('http://192.168.15.55:8090/playcet_live2/mts/1');
$request->setContents($ticket->toJson());
$request->setSignature('teste');

$response = $mtsSDK->doHttpPost($request);
echo $response->getContents();
