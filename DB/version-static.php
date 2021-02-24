<?php

class DB {
    private string $server = 'localhost';
    private string $db = 'live';
    private string $user = 'root';
    private string $pwd = '';
    private static ?PDO $dbInstance = null;

    /**
     * DB2 constructor.
     */
    public function __construct() {
        try {
            self::$dbInstance = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->pwd);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public static function getinstance(): ?PDO {
        if(is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * on empêche d'autre devellopeurs de cloner l'objet
     * pour s'assurer qu'on a une seule instance de la connexion db.
     */
    public function __clone() {}
}
