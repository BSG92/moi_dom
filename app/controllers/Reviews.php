<?php

    class Review extends Controller{
        public function __construct()
        {
            $this->reviewModel = $this->model('Review'); // loads Review.php inside models directory
        }
    }

?>