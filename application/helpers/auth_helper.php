<?php
function cekuser()
{
    $ci = get_instance();
    $role_id = $ci->session->userdata('role_id');
    $menu = $ci->uri->segment(1);
    if (!$ci->session->userdata('email')) {
        redirect('login');
    }
    if ($role_id == 2) {
        switch ($menu) {
            case 'admin':
                redirect('manager');
                break;
            default:
                # code...
                break;
        }
    } else if ($role_id == 2) {
        switch ($menu) {
            case 'manager':
                redirect('blocked');
                break;
            default:
                # code...
                break;
        }
    }
}
