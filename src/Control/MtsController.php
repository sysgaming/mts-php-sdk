<?php

namespace Sysgaming\MtsPhpSdk\Control;

use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsRequest;
use Sysgaming\MtsPhpSdk\Dtos\Mts\MtsResponse;
use Sysgaming\MtsPhpSdk\Dtos\Mts\SendInfosMts;

interface MtsController {
    const SIGNATURE_HEADER_NAME = 'X-Mts-Signature';

    /**
     * @param MtsRequest $request
     * @return MtsResponse
     */
    function doHttpPost(MtsRequest $request);

    /**
     * @param SendInfosMts $infosMts
     * @return MtsResponse
     */
    function sendInfosMts(SendInfosMts $infosMts);

    /**
     * @param $path
     * @param $payload
     * @return MtsRequest
     */
    function makeMtsRequest($path, $payload);
}