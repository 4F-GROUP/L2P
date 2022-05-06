<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-54-80-122-11.compute-1.amazonaws.com";
        const USERNAME = "zfytmnwltpwiek";
        const PASSWORD = "cbec7abaddb179bcdfad63fc3519dfefcb07793859b8074100cf81fa7ad2150e";
        const SCHEMA = "d5lfrhd756flg8";
        const PORT = 5432;

        private $conn;

        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    } 