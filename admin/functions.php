<?php
class AdminConstruct{
	private $conn;

	public function __construct(){
		$dbhost ='localhost';
		$dbuser ='root';
		$dbpass ='';
		$dbname ='construct';
		$this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		if (!$this->conn) {
			die('Database Connection Faield!');
		}
 	}

 	public function Admin_Login($data){
 		$user_name = $data['username'];
 		$pass_word = $data['password'];
 		$sql = "SELECT * FROM admin_login WHERE username='$user_name' && password='$pass_word'";
 		if (mysqli_query($this->conn,$sql)) {
 			$admin_info = mysqli_query($this->conn,$sql);
 			if ($admin_info) {
			header('Location:home.php');
 			}
 		}
	}

	// About Section Query

	public function AboutDataInsert($data){
		$about_title 	= $data['about_title'];
		$about_desc 	= $data['about_desc'];
		$read_more 		= $data['read_more'];
		$about_img 		= $_FILES['about_img']['name'];
		$tmp_name 		= $_FILES['about_img']['tmp_name'];
		$sql = "INSERT INTO construct_about(the_title,the_content,about_image,read_more) VALUES('$about_title','$about_desc','$about_img','$read_more ')";
		if (mysqli_query($this->conn,$sql)) {
			move_uploaded_file($tmp_name,'uploadimage/'.$about_img);
			return "About info add Sucessfully";
		}
	}

	public function AboutDataShow(){
		$sql = "SELECT * FROM construct_about limit 1";
		if (mysqli_query($this->conn,$sql)) {
			$aboutreturn = mysqli_query($this->conn,$sql);
			return $aboutreturn;
		}
	}



	public function RecentProjectInsert($data){
		$recent_title = $data['recent_title'];
		$recent_date = date('Y-m-d');
		$recent_img = $_FILES['recent_img']['name'];
		$tmp_name =$_FILES['recent_img']['tmp_name'];

		$sql = "INSERT INTO recent_project(the_title,the_img,the_date) VALUES('$recent_title','$recent_img','$recent_date')";
		if (mysqli_query($this->conn,$sql)) {
			move_uploaded_file($tmp_name,'uploadimage/'.$recent_img);
			return "About info add Sucessfully";
		}
	}

		public function RecentProjectShow(){
			$sql = "SELECT * FROM recent_project";
			if (mysqli_query($this->conn,$sql)) {
				$aboutshow = mysqli_query($this->conn,$sql);
				return $aboutshow;
		}
	}


	// Start Service Section Query

	public function Service_Title_Insert($data){
		$service_title = $data['service_title'];
		$sql = "INSERT INTO service_title(the_title) VALUES('$service_title')";
		if (mysqli_query($this->conn,$sql)) {
			$service_title = mysqli_query($this->conn,$sql);
			return $service_title;
		}
	}

	public function Service_Title_Show(){
		$sql = "SELECT * FROM service_title limit 1";
		if (mysqli_query($this->conn,$sql)) {
			$sereviceshow = mysqli_query($this->conn,$sql);
			return $sereviceshow;
		}
	}

	// Start Service Section Post Query

	public function Service_Post_Insert($data){
		$service_title = $data['service_title'];
		$service_desc = $data['service_desc'];
		$service_img = $_FILES['service_img']['name'];
		$tmp_name = $_FILES['service_img']['tmp_name'];
		$sql = "INSERT INTO service_post(the_title,the_content,thumbnail) VALUES('$service_title','$service_desc','$service_img')";
		if (mysqli_query($this->conn,$sql)) {
			move_uploaded_file($tmp_name,'uploadimage/'.$service_img);
			return;

		}
	}

	public function Service_Post_Show(){
		$sql = "SELECT * FROM service_post limit 6";
		if (mysqli_query($this->conn,$sql)) {
			$service_show = mysqli_query($this->conn,$sql);
			return $service_show;
		}
	}


	// Start Contact Section Post Query

	public function Home_Contact_Insert($data){
		$contact_title 	= $data['contact_title'];
		$contact_desc 	= $data['contact_desc'];
		$contact_btn	= $data['contact_btn'];
		$sql = "INSERT INTO  home_contact(the_title,the_content,contact_btn) VALUES('$contact_title','$contact_desc','$contact_btn')";
		if (mysqli_query($this->conn,$sql)) {
			return;
		}

	}

	public function Home_Contact_Show(){
		$sql = "SELECT * FROM home_contact limit 1";
		if (mysqli_query($this->conn,$sql)) {
			$contact_show = mysqli_query($this->conn,$sql);
			return $contact_show;
		}
	}

	public function CompletedCasesInsert($data){
		$com_title = $data['com_title']; 
		$com_desc = $data['com_desc']; 
		$see_more = $data['see_more']; 
		$sql = "INSERT INTO comple_cases(the_title,the_content,the_btn) VALUES('$com_title','$com_desc','$see_more')";
		if (mysqli_query($this->conn,$sql)) {
			header('Location:all_completed_cases.php');
			return;
		}
	}

	public function CompletedCasesShow(){
		$sql = "SELECT * FROM comple_cases limit 1";
		if (mysqli_query($this->conn,$sql)) {
			$completeshow = mysqli_query($this->conn,$sql);
			return $completeshow;
		}
	}


	// Start Complete Cases Info

	public function CompletedCasesInfo_Insert($data){
		$com_info_title = $data['com_info_title'];
		$com_info_desc = $data['com_info_desc'];
		$com_info_img = $_FILES['com_info_img']['name'];
		$tmp_name = $_FILES['com_info_img']['tmp_name'];
		$tag_ttile = $data['tag_ttile'];
		$sql = "INSERT INTO comple_cases_info(the_title,the_content,thumbnail,sub_tag) VALUES('$com_info_title','$com_info_desc','$com_info_img','$tag_ttile')";
		if (mysqli_query($this->conn,$sql)) {
			move_uploaded_file($tmp_name,'uploadimage/'.$com_info_img);
			header('Location:all_completed_cases_info.php');
			return;
		}
		
	}

	public function CompletedCasesInfo_Show(){
		$sql = "SELECT * FROM comple_cases_info limit 3";
		if (mysqli_query($this->conn,$sql)) {
			$completeshow = mysqli_query($this->conn,$sql);
			return $completeshow;
		}
	}

	// Start Team Title Quert

	public function Team_Title_Insert($data){
		$team_title = $data['team_title'];
		$sql = "INSERT INTO team(the_title) VALUES('$team_title')";
		if (mysqli_query($this->conn,$sql)) {
			return;
		}
	}

	public function Team_Title_Show(){
		$sql = "SELECT * FROM team limit 1";
		if (mysqli_query($this->conn,$sql)) {
			$temashow = mysqli_query($this->conn,$sql);
			return $temashow;
		}
	}

	// Start Team Info

	public function Team_Title_Info_Insert($data){
		$team_name 	= $data['team_name'];
		$team_desig = $data['team_desig'];
		$team_img 	= $_FILES['team_img']['name'];
		$tmp_name	= $_FILES['team_img']['tmp_name'];
		$sql = "INSERT INTO  teams_info(the_title,the_degnation,thumbnail) VALUES('$team_name','$team_desig','$team_img')";
		if (mysqli_query($this->conn,$sql)) {
			move_uploaded_file($tmp_name,'uploadimage/'.$team_img);
			header('Location:all_team_info.php');
			return;
		}
	}

	public function Team_Title_Info_Show(){
		$sql = "SELECT * FROM teams_info limit 4";
		if (mysqli_query($this->conn,$sql)) {
			$teaminfoshow = mysqli_query($this->conn,$sql);
			return $teaminfoshow;
		}
	}









}



