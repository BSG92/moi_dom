<?php
    class Price{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getConstructionWorksPrice()
        {
            $this->db->query("SELECT * FROM `prices_construction-finishing-works` ORDER BY `group_num` ASC ,`order_num`;");

            return $this->db->resultSet();

        }
        public function getElectricalWorksPrice()
        {
            $this->db->query("SELECT * FROM `prices_electrical-works`");

            return $this->db->resultSet();

        }

        public function getPlumbingWorksPrice()
        {
            $this->db->query("SELECT * FROM `prices_plumbing-works`");

            return $this->db->resultSet();

        }
    }
?>