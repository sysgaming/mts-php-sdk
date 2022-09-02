<?php

namespace Sysgaming\MtsPhpSdk\Control\Impl;

use Sysgaming\MtsPhpSdk\Control\MtsController;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;
use \Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use Sysgaming\MtsPhpSdk\Exceptions\TicketRequiredException;

abstract class MtsControllerImpl implements MtsController
{
    /**
     * @var string
     */
    private $feederMtsEndpoint;

    /**
     * @param $feederMtsEndpoint
     */
    public function __construct($feederMtsEndpoint) {
        $this->feederMtsEndpoint = $feederMtsEndpoint;
    }

    /**
     * @param SendInfosMts $infosMts
     * @return MtsResponse
     * @throws TicketRequiredException
     */
    function sendInfosMts(SendInfosMts $infosMts) {
       if ( !$infosMts->getTicket() ) {
           throw new TicketRequiredException('Ticket is required');
       }

       $payload = $infosMts->getTicket()->toJson();

       $pathRequest = '/playcet_live2/mts/1';

       $request = $this->makeMtsRequest($this->feederMtsEndpoint . $pathRequest, $payload);

        return $this->doHttpPost($request);
    }

    /**
     * @param $path
     * @param $payload
     * @return MtsRequest
     */
    function makeMtsRequest($path, $payload) {
        return (new MtsRequest())
            ->setEndpoint($this->feederMtsEndpoint . $path)
            ->setContents($payload);
    }

}