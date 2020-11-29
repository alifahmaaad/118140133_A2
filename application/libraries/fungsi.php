<?php
class fungsi
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $this->ci->load->model('auth_model');
        $user_id = $this->ci->session->userdata('id');
        $user_data['data'] = $this->ci->auth_model->get($user_id)->row();
        return $user_data;
    }
}
