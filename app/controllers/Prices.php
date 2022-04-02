<?php

    class Prices extends Controller{
        public function __construct()
        {
        }
        
        // General Construction works
        public function index()
        {
            $this->pricesConstructionWorksModel = $this->model('PricesConstructionWorks');
            $pricesConstructionWorks = $this->pricesConstructionWorksModel->getConstructionWorks();

            $data = [
                'pricesConstructionWorks' => $pricesConstructionWorks
            ];

            $this->view("prices_construction-works", $data);
        }

        public function repair()
        {
            // URL /pages/prices/

            // $this->pricesConstructionWorksModel = $this->model('PricesConstructionWorks');
            // $pricesConstructionWorks = $this->pricesConstructionWorksModel->getConstructionWorks();

            // $data = [
            //     'pricesConstructionWorks' => $pricesConstructionWorks
            // ];

            // $this->view('prices_construction-works', $data);

            echo "Cost of Repairs";
        }
    }

?>