<?php 

class CategoryModel extends Model{

	public function categoryList() {
		$sql = "select * from category";
		$query = $this->db->query($sql);
		$result = $query->fetchAll();
		return $result;
	}
}

 ?>