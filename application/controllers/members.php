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

        // TODO: Needt to fix this because i have to include the config_open_state.php from the examples for it to work

        $apiKey = "4a8beb6a33b845edb52173f9f5764b62";
        $adapter    = new FurryBear\Http\Adapter\Curl();
        $provider   = new FurryBear\Provider\Source\SunlightOpenStates($adapter, $apiKey);
        $output     = new FurryBear\Output\Strategy\JsonToArray();

        $fb = new FurryBear\FurryBear();
        $fb->registerProvider($provider)->registerOutput($output);

        $params = array('state' => 'dc', 'chamber' => 'upper');
        $legislator = $fb->legislators->get($params);
        foreach($legislator as $leg)
        {
            $firstname = $leg['last_name'];
            print($firstname);
            //var_dump($leg['last_name']);
        }

    }
}