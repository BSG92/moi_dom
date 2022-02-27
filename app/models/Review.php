<?php
    class Review{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getReviews()
        {
            $this->db->query("SELECT * FROM reviews");

            return $this->db->resultSet();;
        }
    }
?>