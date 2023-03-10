<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Short_Link extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
	}

    public function index($param)
    {
        switch ($param) {
            case 'value':
                break;
            default:
                echo "<script>
                    alert(`Link not found or broken!, please contact to this whatsapp: +628974842870 for report this potential broken link.`);
                    window.location.href = `".site_url()."`;
                </script>";
                break;
        }
    }
}