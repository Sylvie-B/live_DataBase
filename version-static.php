<?php

class DbStatic {
    private string $server;
    private string $db;
    private string $user;
    private string $pwd;

    private static PDO $dbLink;

    /**
     * DbStatic constructor
     */
    public function __construct() {
        try {
            self::$dbLink = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user,$this->pwd);
            self::$dbLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception){
            echo $exception->getMessage();
        }
    }

    /**
     * @return PDO
     */
    public static function getLink(): ?PDO {
        if(is_null(self::$dbLink)) {
            new self();
        }
        return self::$dbLink;
    }
}
