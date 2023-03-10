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
            case '1': // api docs
                redirect("https://documenter.getpostman.com/view/8546369/2s93JowkfT");
                break;
            case '2': // original repo frontend
                redirect("https://github.com/ZihxS/thecloud-ci");
                break;
            case '3': // original repo backend
                redirect("https://github.com/ZihxS/thecloud-go");
                break;
            case '4': // public repo frontend
                redirect("https://github.com/WeAreAmazingTeam/tcd-frontend");
                break;
            case '5': // public repo backend
                redirect("https://github.com/WeAreAmazingTeam/tcd-backend");
                break;
            case '6': // proof using alibaba cloud polardb
                redirect("assets/img/proof/polardb.png");
                break;
            case '7': // proof using alibaba cloud simple application server
                redirect("assets/img/proof/sas.png");
                break;
            case '8': // proof using alibaba cloud dms
                redirect("assets/img/proof/dms.png");
                break;
            case '9': // proof using alibaba cloud domain
                redirect("assets/img/proof/domain.png");
                break;
            case '10': // proof using alibaba cloud direct mail
                redirect("assets/img/proof/dm.png");
                break;
            case '11': // midtrans payment simulator
                redirect("https://simulator.sandbox.midtrans.com/assets/index.html");
                break;
            default:
                echo "<script>
                    alert(`Link not found or broken! please contact to this whatsapp: +628974842870 for report this potential broken link.`);
                    window.location.href = `".site_url()."`;
                </script>";
                break;
        }
    }
}