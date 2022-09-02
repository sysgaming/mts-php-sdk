<?php

namespace Sysgaming\MtsPhpSdk;

use Sysgaming\MtsPhpSdk\Dtos\Ticket\StakeDTO;
use Sysgaming\MtsPhpSdk\Dtos\Ticket\SenderDTO;
use Sysgaming\MtsPhpSdk\Dtos\Ticket\SelectionDTO;
use Sysgaming\MtsPhpSdk\Dtos\Ticket\EndConstumerDTO;
use Sysgaming\MtsPhpSdk\Dtos\Ticket\BetDTO;
use Sysgaming\MtsPhpSdk\Dtos\Ticket\TicketDTO;

class TicketHelper
{

    /**
     * @param $bet_amount
     * @param $codigo
     * @param $bets
     * @param $user_id
     * @return TicketDTO
     */
    public function handleTicket($bet_amount, $codigo, $bets, $user_id)
    {
        $ticket = new TicketDTO();

        $ticket->setTimestampUtc(date_create()->getTimestamp());
        $ticket->setBets($this->mapBets($bet_amount));
        $ticket->setTicketId($codigo);
        $ticket->setSelections($this->mapSelections($bets));
        $ticket->setSender($this->mapSender($user_id));
        $ticket->setOddChanged('higher');
        $ticket->setBetScope('LIVE');

        return $ticket;
    }

    /**
     * @param $bet_amount
     * @return array
     */
    private function mapBets($bet_amount)
    {
        $betsDTO = [];
        $bet = new BetDTO();

        $bet->setStake($this->mapStake($bet_amount));

        $betsDTO[] = $bet;

        return $betsDTO;
    }

    /**
     * @param $bet_amount
     * @return StakeDTO
     */
    private function mapStake($bet_amount)
    {
        $stake = new StakeDTO();

        $betAmount = round($bet_amount * 10000);
        $stake->setValue($betAmount);
        $stake->setType('total');

        return $stake;
    }

    /**
     * @param $bets
     * @return array
     */
    private function mapSelections($bets)
    {
        $selectionsDTO = [];

        for ($i = 0; $i < count($bets); $i++) {
            $selection = new SelectionDTO();

            $selection->setEventId($bets[$i]['match_id']);
            $selection->setId($bets[$i]['odd_id']);
            $selection->setOdds(round($bets[$i]['odd_price'] * 10000,0, PHP_ROUND_HALF_DOWN ));
            $selection->setSportId($bets[$i]['sport_id']);

            $selectionsDTO[] = $selection;
        }

        return $selectionsDTO;
    }

    /**
     * @param $user_id
     * @return SenderDTO
     */
    private function mapSender($user_id)
    {
        $sender = new SenderDTO();

        $sender->setCurrency('PYG');
        $sender->setChannel('Internet');
        $sender->setEndCustomer($this->mapEndCustomer($user_id));
        $sender->setLimitId(1);
        $sender->setTerminalId('1');

        return $sender;
    }

    /**
     * @param $user_id
     * @return EndConstumerDTO
     */
    private function mapEndCustomer($user_id)
    {
        $endCustomer = new EndConstumerDTO();

        $endCustomer->setIp('teste');
        $endCustomer->setLanguageId('ES');
        $endCustomer->setId($user_id);

        return $endCustomer;
    }
}