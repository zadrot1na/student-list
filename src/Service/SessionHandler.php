<?php

//NOTICE:: The most nice done class, but it\s not finished yet, use the previous experience to do it

namespace App\Service;


use App\Repository\StudentRepository;

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
    public function open($pdo, $sessionId): bool
        {
        // TODO: Implement open() method.
        $this->dbGateway = $pdo;

        $query = $this->dbGateway->prepare("
        SELECT sessionEncoded
        FROM students
        WHERE sessionId = :sessionId
        ");

        $query->bindValue('sessionId', $sessionId);
        $query->execute();

        return session_decode($sessionId);
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