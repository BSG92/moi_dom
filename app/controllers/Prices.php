<?php

    class Prices extends Controller{
        public function __construct()
        {
            $this->pricesModel = $this->model('Price');
        }
        
        // General Construction works
        public function index()
        {
            $pricesConstructionWorks = $this->pricesModel->getConstructionWorksPrice();

            $data = [
                'pricesConstructionWorks' => $pricesConstructionWorks
            ];

            $this->view("prices_construction-works", $data);
        }

        public function electrical()
        {
            // URL /prices/electrical

            $pricesElectricalWorks = $this->pricesModel->getElectricalWorksPrice();

            $data = [
                'pricesElectricalWorks' => $pricesElectricalWorks
            ];

            $this->view('prices_electrical-works', $data);
        }
    }

?>