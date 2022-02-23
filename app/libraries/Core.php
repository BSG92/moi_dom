<?php
    // Core App class
    class Core {
        // if there are no other controllers in "controllers" dir, we are loading "Pages" as the default
        protected $currentController = 'Pages';
        // inside the "Page" controller load the "index" method
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct() {
            $url = $this->getUrl();

            // check inside "controllers" dir for the first value & ucwords will capitalize the first letter
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                // will set a new controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            // Require the controller
            require_once '../app/controllers/' . $this->currentController . '.php';
            // instantiate the currentController
            $this->currentController = new $this->currentController;

            // Check for the second part of the url and if exists, assign it to currentMethod
            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            // Get parameters
            $this->params = $url ? array_values(($url)) : [];

            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl() {
            if (isset($_GET['url'])) {
                // strip the ending slash
                $url = rtrim($_GET['url'], '/');
                // filter variables as a string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // break the url into an array
                $url = explode('/', $url);

                return $url;
            }
        }
    }
?>