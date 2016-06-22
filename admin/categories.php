<?php
class categories{
	var $id;
	var $name;
	var $parent;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}
		if ($id!=-1) {
			$query = "select * from categories where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$category = mysqli_fetch_assoc($result);
			$this->id = $id;
			$this->name = $category['name'];
			$this->parent = $category['parent'];
		}
	}

	function categories($parent) {
		if(!$parent)	#select cat
			$query = "select * from categories where parent is NULL";
		elseif  ($parent==-1)		#select all sub_cat
			$query = "select * from categories where parent is not NULL";
		else       #select sub_cat under specific cat
			$query = "select * from categories where parent=$parent";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function selectCategoriesById($parent,$id) {
		if(!$parent and !$id)	#select cat
			$query = "select id from categories where parent is NULL";
		elseif  ($parent==-1 and $id==-1)		#select all sub_cat
			$query = "select id from categories where parent is not NULL";
		else       #select sub_cat under specific cat
			$query = "select id from categories where parent=$parent and id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function searchByName($name){
			//echo "in query";
			$query = "select id from categories where name='$name'";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}

	function add_cat($parent){
		if(isset($parent))		#add sub_cat
			$query = "insert into users(name,password,email) values('$this->name','$this->parent')";
		else 	#add cat
			$query = "insert into users(name,password,email) values('$this->name')";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}
	function insertCat() {
			
			$query = "insert into categories(id,name) values('$this->id','$this->name')";
			$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
		
		}
	function insertSubCat() {
			echo "hayy";
			$query = "insert into categories(id,name,parent) values('$this->id','$this->name','$this->parent')";
			$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
		var_dump($query);
		}

	function delete() {
		$query = "delete from categories where id=$this->id";
		mysqli_query(self::$conn,$query);
	}
	


}
?>