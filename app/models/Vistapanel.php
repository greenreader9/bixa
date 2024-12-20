<?php
class Vistapanel extends CI_Model {
    private $api;
    
    function __construct() {
        parent::__construct();
        require_once APPPATH . 'vendor/vistapanel/api-client.php';
        $this->api = new VistapanelApi();
        $this->api->setCpanelUrl("https://cpanel.byethost.com"); // Set your cpanel URL
    }

    public function get_softaculous_link($username, $password) {
        try {
            // Login to cpanel first
            $login_result = $this->api->login($username, $password);
            
            if($login_result) {
                // Get Softaculous link 
                $softaculous_url = $this->api->getSoftaculousLink();
                
                // Logout to clear session
                $this->api->logout();
                
                return $softaculous_url;
            }
            
            return false;
        } catch(Exception $e) {
            log_message('error', 'Vistapanel API Error: ' . $e->getMessage());
            return false;
        }
    }
}