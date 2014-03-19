<?php
/**
 * ebre_escool library
 *
 * Common functions
 *
 * @package    	ebre_escool library
 * @author     	Sergi Tur <sergitur@ebretic.com>
 * @version    	1.0
 * @link		http://www.acacha.com/index.php/ebre-escool
 */

class ebre_escool  {
	
	
	function __construct()
    {
        $this->ci =& get_instance();
        
        // Load the language file
        $this->ci->lang->load('ebre_escool_ldap','catalan');
        $this->ci->load->helper('language');
        
        log_message('debug', lang('ebre_escool_model_ldap_initialization'));

        // Load the configuration
        $this->ci->load->config('auth_ldap');
        
        $this->_init();
    }
    
    /
}
