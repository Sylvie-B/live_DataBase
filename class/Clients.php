<?php


class Clients
{
    private PDO $database;

    public function __construct(PDO $database) {
        $this->database = $database;
    }

    public function getClients() {
        // todo aller chercher utilisateur en base de données
    }
}