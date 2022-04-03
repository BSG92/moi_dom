<?php
    class Price{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getConstructionWorksPrice()
        {
            $this->db->query("SELECT * FROM `prices_construction-finishing-works`");

            return $this->db->resultSet();

        }
        public function getElectricalWorksPrice()
        {
            $this->db->query("SELECT * FROM `prices_electrical-works`");

            return $this->db->resultSet();

        }
    }
?>