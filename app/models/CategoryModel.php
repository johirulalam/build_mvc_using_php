<?php 

class CategoryModel extends Model{

	public function categoryList() {
		return $this->db->select("category");
		
	}
}

 ?>