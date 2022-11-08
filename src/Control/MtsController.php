<?php

namespace Sysgaming\MtsPhpSdk\Control;

use Sysgaming\MtsPhpSdk\Dtos\Mts\CancelTicketMts;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsCancelResponse;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;
use Sysgaming\MtsPhpSdk\Exceptions\MtsGenericException;
use Sysgaming\MtsPhpSdk\Exceptions\ReasonRequiredException;
use Sysgaming\MtsPhpSdk\Exceptions\TicketRequiredException;
use Sysgaming\MtsPhpSdk\Exceptions\UnknownMtsCancelException;

interface MtsController {
    /**
     * Signature header name (if needed)
     */
    const SIGNATURE_HEADER_NAME = 'X-Mts-Signature';
    const MTS_RESPONSE_STATUS_ACCEPTED = 'accepted';
    const MTS_CANCEL_RESPONSE_STATUS_ACCEPTED = 'accepted';

    /**
     * @param MtsRequest $request
     * @return MtsResponse
     */
    function doHttpPost(MtsRequest $request);

    /**
     * @param MtsRequest $request
     * @return MtsCancelResponse
     */
    function doHttpPostCancel(MtsRequest $request);

    /**
     * @param SendInfosMts $infosMts
     * @return MtsResponse
     * @throws MtsGenericException
     */
    function sendInfosMts(SendInfosMts $infosMts);

    /**
     * @param CancelTicketMts $cancelTicketMts
     * @return MtsCancelResponse
     * @throws UnknownMtsCancelException
     * @throws TicketRequiredException
     * @throws ReasonRequiredException
     */
    function cancelTicketMTs(CancelTicketMts $cancelTicketMts);

}