<?php
    class Pages extends Controller{
        public function __construct()
        {
            $this->reviewModel = $this->model('Review'); // loads Review.php inside models directory
        }

        public function index()
        {
            $reviews = $this->reviewModel->getLatestReviews();
            // add a path to the index file and send some data along with it
            $data = [
                'title' => 'Home Page',
                'reviews' => $reviews
            ];
            $this->view('index', $data); // loads the index.php file inside the 'views' directory
        }
    
    }
?>