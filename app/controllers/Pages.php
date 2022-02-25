<?php
    class Pages extends Controller{
        public function __construct()
        {
            
        }

        public function index()
        {
            // add a path to the index file and send some data along with it
            $data = [
                'title' => 'Home Page',
                'name' => 'Buddika'
            ];
            $this->view('index', $data);
        }
        public function about()
        {
            echo "About Page";
        }
    }
?>