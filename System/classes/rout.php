<?php 

    class Rout
    {

        public $controller = "controllers";
        public $method = "index";
        public $params = [];

        public function __construct()
        {
            $url = $this->url();
            if(!empty($url))
            {
                if(file_exists("../application/controllers/" . $url[0] . ".php"))
                {
                    echo "controller found";
                }
                else
                {
                    echo "controller not found";
                }
            }
        }

        public function url()
        {
            if(isset($_GET['url']))
            {
                $url = $_GET['url'];
                $url = rtrim($url);
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }
    }

?> 