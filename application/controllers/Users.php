<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends AUTH_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');
	}

	public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$data['users'] = $this->M_users->select_all();

		$data['page'] = "Users";
		$data['judul'] = "Data Users";
		$data['deskripsi'] = "Manage Data Users";

		$data['modal_tambah_users'] = show_my_modal('modals/modal_tambah_users','tambah-users', $data);

		$this->template->views('users/home',$data);
	}

	public function tampil()
	{
		$data['dataUsers'] = $this->M_users->select_all();
		$this->load->view('users/list_data', $data, FALSE);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[12]');

		$data = $this->input->post();
		if($this->form_validation->run() == TRUE)
		{
			$result = $this->M_users->insert($data);

			if($result > 0)
			{
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Users Berhasil Ditambah','10px');
			}
			else
			{
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data users gagal disimpan','10px');
			}
			}
			else
			{
				$out['status'] ='form';
				$out['msg'] = show_err_msg(validation_errors());
			}
			echo json_encode($out);
	}


	



}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */