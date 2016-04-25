<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['posts'] = $this->db->get('posts')->result();
		$this->load->view('index', $data);
	}

	public function show($id)
	{
		if($id != FALSE){
			$data['post'] = $this->post_model->read($id);
			if(isset($data['post'])){
				$this->load->view('show', $data);
			} else {
				echo "Your post's ID is not exist or wrong.";
			}
		} else {
			echo "Please add post's ID.";
		}
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function store()
	{
		$this->post_model->store($this->input->post());

		redirect(base_url('blog'));
	}

	public function edit($id)
	{
		if($id != FALSE){
			$data['post'] = $this->post_model->read($id);
			if(isset($data['post'])){
				$this->load->view('edit', $data);
			} else {
				echo "Your post's ID is not exist or wrong.";
			}
		} else {
			echo "Please add post's ID.";
		}
	}

	public function update()
	{
		$this->post_model->update($this->input->post());

		redirect(base_url('blog'));
	}

	public function delete($id)
	{
		$this->post_model->delete($id);

		redirect(base_url('blog'));
	}
}