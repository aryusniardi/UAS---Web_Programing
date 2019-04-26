<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pages extends CI_Controller {

        function __construct() {
            parent :: __construct();
        }
        
        public function view($page = 'Welcome') {
            if (!file_exists(APPPATH. 'Views/Pages/' . $page . '.php')) {
                show_404();
            }

            $this->load->view('Pages/'. $page);
        }

        public function register() {
            $this->load->view('Pages/Register');
        }
    }
?>