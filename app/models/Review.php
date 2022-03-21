<?php
    class Review{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getLatestReviews()
        {
            $this->db->query("SELECT * FROM reviews ORDER BY date DESC LIMIT 10");

            return $this->db->resultSet();;
        }
    }
?>