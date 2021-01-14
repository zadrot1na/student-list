<?php


namespace App\Service;


class SessionHandler implements \SessionHandlerInterface
{
    private $dbGateway;

    /**
     * @inheritDoc
     */
    public function close()
    {
        // TODO: Implement close() method.
    }

    /**
     * @inheritDoc
     */
    public function destroy($session_id)
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @inheritDoc
     */
    public function gc($maxlifetime)
    {
        // TODO: Implement gc() method.
    }

    /**
     * @inheritDoc
     */
    public function open($dbGateway, $name)
    {
        $this->dbGateway = $dbGateway;


        // TODO: Implement open() method.
    }

    /**
     * @inheritDoc
     */
    public function read($session_id)
    {
        // TODO: Implement read() method.
    }

    /**
     * @inheritDoc
     */
    public function write($session_id, $session_data)
    {
        serialize();
        // TODO: Implement write() method.
    }
}