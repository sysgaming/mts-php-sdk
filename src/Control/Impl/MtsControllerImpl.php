<?php

namespace Sysgaming\MtsPhpSdk\Control\Impl;

use Sysgaming\MtsPhpSdk\Control\MtsController;
use Sysgaming\MtsPhpSdk\Dtos\Mts\CancelTicketMts;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsCancelResponse;
use Sysgaming\MtsPhpSdk\Exceptions\MtsGenericException;
use Sysgaming\MtsPhpSdk\Exceptions\MtsServerException;
use Sysgaming\MtsPhpSdk\Exceptions\ReasonRequiredException;
use Sysgaming\MtsPhpSdk\Exceptions\TicketRequiredException;
use Sysgaming\MtsPhpSdk\Exceptions\UnknownMtsCancelException;
use Sysgaming\MtsPhpSdk\Exceptions\UnknownMtsException;

abstract class MtsControllerImpl implements MtsController
{
    /**
     * @var string
     */
    private $feederMtsEndpoint;

    /**
     * MtsControllerImpl constructor.
     * @param $feederMtsEndpoint
     */
    public function __construct($feederMtsEndpoint) {
        $this->feederMtsEndpoint = $feederMtsEndpoint;
    }

    /**
     * Send infos to MTS server
     * @param SendInfosMts $infosMts
     * @return MtsResponse
     * @throws MtsGenericException
     */
    function sendInfosMts(SendInfosMts $infosMts)
    {
       if ( !$infosMts->getTicket() ) {
           throw new TicketRequiredException('Ticket is required');
       }

       $payload = $infosMts->getTicket()->toJson();

       $request = (new MtsRequest())
           ->setEndpoint($this->feederMtsEndpoint)
           ->setContents($payload);

       $mtsResponse = $this->doHttpPost($request);

       $this->verifyIfMtsResponseRejected($mtsResponse);

       return $mtsResponse;
    }

    /**
     * @param MtsResponse $mtsResponse
     * @throws MtsServerException
     */
    private function verifyIfMtsResponseRejected($mtsResponse) {

        if( $mtsResponse->getStatus() == self::MTS_RESPONSE_STATUS_ACCEPTED )
            return;

        //TODO: map all possible errors
        throw new UnknownMtsException($mtsResponse);

    }

    /**
     * @param CancelTicketMts $cancelTicketMts
     * @return MtsCancelResponse
     * @throws UnknownMtsCancelException
     * @throws TicketRequiredException
     * @throws ReasonRequiredException
     */
    function cancelTicketMTs(CancelTicketMts $cancelTicketMts)
    {
        if ( !$cancelTicketMts->getTicketId() ) {
            throw new TicketRequiredException('Ticket is required');
        }

        if ( !$cancelTicketMts->getTicketCancellationReason() ) {
            throw new ReasonRequiredException('Reason is required');
        }

        $payload = $cancelTicketMts->toJson();

        $request = (new MtsRequest())
            ->setEndpoint($this->feederMtsEndpoint . '/cancel')
            ->setContents($payload);

        $mtsResponse = $this->doHttpPostCancel($request);

        $this->verifyMtsCancelResponse($mtsResponse);

        return $mtsResponse;
    }

    /**
     * @param MtsCancelResponse $mtsResponse
     * @throws UnknownMtsCancelException
     */
    private function verifyMtsCancelResponse($mtsResponse)
    {
        if( $mtsResponse->getStatus() == self::MTS_CANCEL_RESPONSE_STATUS_CANCELLED ) {
            return;
        }

        //TODO: map all possible errors
        throw new UnknownMtsCancelException($mtsResponse);
    }

}