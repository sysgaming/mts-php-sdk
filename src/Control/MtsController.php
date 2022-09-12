<?php

namespace Sysgaming\MtsPhpSdk\Control;

use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;
use Sysgaming\MtsPhpSdk\Exceptions\MtsException;

interface MtsController {
    /**
     * Signature header name (if needed)
     */
    const SIGNATURE_HEADER_NAME = 'X-Mts-Signature';
    const MTS_RESPONSE_STATUS_ACCEPTED = 'accepted';

    /**
     * @param MtsRequest $request
     * @return MtsResponse
     */
    function doHttpPost(MtsRequest $request);

    /**
     * @param SendInfosMts $infosMts
     * @return MtsResponse
     * @throws MtsException
     */
    function sendInfosMts(SendInfosMts $infosMts);

}