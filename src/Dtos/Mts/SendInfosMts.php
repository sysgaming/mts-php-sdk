<?php

namespace Sysgaming\MtsPhpSdk\Dtos\Mts;

use Sysgaming\MtsPhpSdk\Dtos\Ticket\TicketDTO;

class SendInfosMts
{
    /**
     * @var TicketDTO
     */
    private $ticket;

    /**
     * @return TicketDTO
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * @param $ticket
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }
}