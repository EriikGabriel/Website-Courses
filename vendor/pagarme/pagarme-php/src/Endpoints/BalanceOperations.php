<?php

namespace PagarMe\Endpoints;

use PagarMe\Client;
use PagarMe\Routes;
use PagarMe\Endpoints\Endpoint;

class BalanceOperations extends Endpoint
{
    /**
     * @param array|null $payload
     *
     * @return \ArrayObject
     */
    public function getList(array $payload = null)
    {
        return $this->client->request(
            self::GET,
            Routes::balanceOperations()->base(),
            ['query' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function get(array $payload)
    {
        return $this->client->request(
            self::GET,
            Routes::balanceOperations()->details($payload['id'])
        );
    }
}
