<?php

require_once '/Users/tommarler/PhpstormProjects/codeigniter/vendor/lobostome/furry-bear/examples/config/config_open_states.php';


class Members extends CI_Controller
{

    public function index()
    {
        $data['main_view'] = 'members/member_home';
        $this->load->view('layout/main', $data);
    }

    public function search()
    {
//<?php



//        try {

            $apiKey = "4a8beb6a33b845edb52173f9f5764b62";
            $adapter    = new FurryBear\Http\Adapter\Curl();
            $provider   = new FurryBear\Provider\Source\SunlightOpenStates($adapter, $apiKey);
            $output     = new FurryBear\Output\Strategy\JsonToArray();

            $fb = new FurryBear\FurryBear();
            $fb->registerProvider($provider)->registerOutput($output);

            var_dump($fb->legislator_detail->id('DCL000012')->get());

//        } catch (\Exception $e) {
//            echo $e->getMessage();
//        }
    }
}