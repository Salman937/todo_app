<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
 {
 	

    public function index()
	{
		$save['data'] = $this->work_model->DBSelect('todo');
		$this->load->view('todo',$save);
	}

	public function insert()

	{
		if ($this->input->post('add'))
		 {
			$save = array('data' => $this->input->post('data')  );

			$query = $this->work_model->insert('todo',$save);

			if ($query) 
			{
				$this->index();
			}
		}
	}
	public function delete()
	{
		$get = array('id' => $this->uri->segment(3));
		$query = $this->work_model->DBdelete('todo',$get);

		if ($query) 
		{
			$this->index();
		}
	}
	
	public function edit()

	{
		$get = array('id' => $this->uri->segment(3));
		$query ['edit'] = $this->work_model->DBSelectSingleRow('todo',$get);
		$this->load->view('update',$query);
	}

	public function update()
	{
		if ($this->input->post('add'))
		 {
			$where = array('id' => $this->input->post('ID'));

			$data = array('data' => $this->input->post('data')  
			);
			$query = $this->work_model->DBupdate('todo',$data,$where);

			if ($query) 
			{
				$this->index();
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */