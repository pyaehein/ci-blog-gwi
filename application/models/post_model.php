<?php
	class Post_Model extends CI_Model {

	public function read($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('posts')->row();
	}

	public function store($post)
	{
		$data = [
		   'title' => $post['title'],
		   'content' => $post['content']
		];
		$this->db->insert('posts', $data); 
	}

	public function update($post)
	{
		$data = [
		   'title' => $post['title'],
		   'content' => $post['content']
		];
		$this->db->where('id', $post['id']);
		$this->db->update('posts', $data); 
	}

	public function delete($id)
	{
		$this->db->delete('posts', array('id' => $id)); 
	}
}