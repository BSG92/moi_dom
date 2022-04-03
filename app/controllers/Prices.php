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
                'heading' => "Строительно–отделочные работы",
                'prices' => $pricesConstructionWorks
            ];

            $this->view("prices_construction-works", $data);
        }

        public function electrical()
        {
            // URL /prices/electrical

            $pricesElectricalWorks = $this->pricesModel->getElectricalWorksPrice();

            $data = [
                'heading' => "Электромонтажные работы",
                'prices' => $pricesElectricalWorks
            ];

            $this->view('prices_electrical-works', $data);
        }
    }

?>