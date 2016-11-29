<?php


class Users extends CI_Controller
{

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');

        if($this->form_validation->run() == FALSE)
        {
            $data['main_view'] = 'users/register_view';
            $this->load->view('layout/main', $data);
        }
        else
        {
            if($this->user_model->create_user())
            {
                redirect('home/index');

            }

            else
            {

            }
        }

    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');


        if($this->form_validation->run() == FALSE)
        {
            $data = array(
                'errors' => validation_errors()

            );

            $this->session->set_flashdata($data);
            redirect('home');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id =  $this->user_model->login_user($username, $password);

            if($user_id)
            {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are now logged in');

                $data['main_view'] = "member_home";

                $this->load->view('layout/main', $data);
            }
            else{

                $this->session->set_flashdata('login_failed', 'You are not logged in');
                redirect('home/index');
            }
        }

    }

    public function logout()
    {
        session_destroy();
        redirect('home/index');
    }


//    public function show()
//    {
//        //$this->load->model('user_model');
//        $result = $this->user_model->get_users();
//        foreach($result as $object)
//        {
//            echo $object->id;
//            echo $object->username;
//        }
//
//    }
}





?>