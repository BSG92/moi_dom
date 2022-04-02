<?php
    class PricesConstructionWorks{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getConstructionWorks()
        {
            $this->db->query("SELECT * FROM `prices_construction-finishing-works`");

            return $this->db->resultSet();

        }
    }
?>