<?php

require __DIR__ . '/vendor/autoload.php';

use Sysgaming\MtsPhpSdk\Control\Impl\MtsControllerImpl;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;
use Sysgaming\MtsPhpSdk\TicketHelper;
use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\GuzzleException;
use \Sysgaming\MtsPhpSdk\Exceptions\MtsException;
use \Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use \Sysgaming\MtsPhpSdk\Exceptions\TicketRequiredException;

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
            echo "Endpoint: $endpoint \n";
            echo "Contents: $contents \n";

            $response = $client->post($endpoint, ['body' => $contents, 'headers' => $headers]);

            echo "response: " . $response->getStatusCode() . "\n";

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

$mtsSDK = new MtsSDK('http://192.168.15.55:8090');

$ticketHelper = new TicketHelper();
$ticket = $ticketHelper->handleTicket(10, "123123123", array(array("sport_id" => 12, "match_id" => 1, "odd_id" => 3, "odd_price" => 100)), "1");
$sendInfosMts = (new SendInfosMts())->setTicket($ticket);

try {
    $response = $mtsSDK->sendInfosMts($sendInfosMts);
    echo $response->getContents() . "\n";;
} catch (TicketRequiredException $e) {
    echo $e->getMessage() . "\n";;
}


