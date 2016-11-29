<?php


class Users extends CI_Controller
{

    public function index()
    {
        $data['main_view'] = 'users/login_view';
        $this->load->view('layout/main', $data);
    }

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
        // Must validation the post data
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        // If there are any validation error store them in an array
        if($this->form_validation->run() == FALSE)
        {
            $data = array(
                'errors' => validation_errors()

            );

            // Set the flashdata with the informaiton from the array
            $this->session->set_flashdata($data);

            // Go home to view your errors
            redirect('home');
        }
        else
        {

            // Since the data is valid get some informaiton from the post data
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Check the post data against the data from the Database and get the user_id
            $user_id =  $this->user_model->login_user($username, $password);

            // If the user_id has something store it in an array
            if($user_id)
            {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                //  The data was verified by the database and should set the session
                $this->session->set_userdata($user_data);


                $this->session->set_flashdata('login_success', 'You are now logged in');

                $data['main_view'] = "members/member_home";

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
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout', 'You are logged out');
        //print_r($this->session->userdata());
        redirect('home/index');
    }

}





?>