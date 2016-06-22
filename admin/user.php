<?php
	class User{
		var $id;
		var $name;
		var $email;
		var $password;
		var $credit;
		var $address;
		var $birthdate;
		var $job;
		var $interests;

		private static $conn = Null;
		
		public function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}

		if($id!=-1) {
			$query = "select * from user where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->email = $user['email'];
			$this->password = $user['password'];
			$this->credit= $user['credit'];
			$this->address= $user['address'];
			$this->birthdate= $user['birthdate'];
			$this->job= $user['job'];
			$this->interests= $user['interests'];
			}
		}

		function insert() {
		$query = "insert into user(name,email,password,credit,address,bithdate,job,interests) values('$this->name','$this->email','$this->password','$this->credit','$this->address','$this->birthdate','$this->job','$this->interests')";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
		}

		function update() {
			$query = "update user set name='$this->name',email='$this->email',password='$this->password',credit='$this->credit',address='$this->address',birthdate='$this->birthdate',job='$this->job',interests='$this->interests' where id=$this->id";
			mysqli_query(self::$conn,$query);
		}

		function delete() {
			$query = "delete from user where id=$this->id";
			mysqli_query(self::$conn,$query);
		}

		function updateCredit(){
			$query = "update user set credit='$this->credit' where id=$this->id";
			mysqli_query(self::$conn,$query);
		}

		function selectAllUsers(){
			$query ="select * from user where name != 'admin'";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}

		function IfExist($email){
			$query = "select * from user where email='$email' limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->id = $user['id'];
			$this->password = $user['password'];
		}
	}
?>