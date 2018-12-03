<?php 
    class Soft{
        //------database property------//
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'meal';
        protected $connect;
        //------data-property-login------//
        protected $userid;
        protected $username;
        protected $password;
        protected $picture;
        protected $personaldata;
        //------admin data-property-login------//
        protected $adminid;
        protected $adminuser;
        protected $adminpass;
        //------userdetails property------//
        protected $name;
        protected $phn;
        protected $edu;
        protected $addr;
        //------user admin role update property------//
        protected $key;
        protected $role;
        protected $id;
        //------admin bazar info insert property------//
        protected $bname;
        protected $bdate;
        protected $btotal;
        //------admin submit info insert start property------//
        protected $sname;
        protected $stotal;
        //------admin daily info property------//
        protected $dname;
        //------operation property------//
        protected $sql;
        protected $result;
        //------magic method construct------//
        public function __construct(){
            if(!isset($this->connect)){
                $this->connect = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if($this->connect == TRUE){
                    //echo "database connected";
                }
                else{
                    echo "database connect error";
                }
            }
            return $this->connect;
        }
        //------magic method destruct------//
        public function __destruct(){
            $this->connect->close();
        }
        //------manager login start-------//       
        //------login-insert------//
        public function Login_Insert($u,$p,$pic){
            $this->username = $u;
            $this->password = $p;
            $this->picture = $pic;
            //sql operation
            $this->sql = "INSERT INTO login(username,password,picture) VALUES('$this->username','$this->password','$this->picture')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "data insert error";
            }
        }
        //------login-retrive/select------//
        public function Login_Select($uname){
            $this->username = $uname;
            $this->sql = "SELECT * FROM login WHERE username = '$this->username'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "data selection failed";
            }
        }
        //------login-Session_start------//
        public function Session_Start($uid){
            $this->userid = $uid;
            $_SESSION['admin'] = $this->userid;
        }
        //------login-session_index------//
        public function Index(){
            if($_SESSION['admin']>0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
        //------login-viewdata------//
        public function Login_View(){
            $this->sql = "SELECT * FROM login";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "login data view error";
            }
        }
        //------login-personal data view------//
        public function Personal_Data($pdata){
            $this->personaldata = $pdata;
            $this->sql = "SELECT * FROM login WHERE id = '$this->personaldata'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "personal data show error";
            }
        }
        //------manager login end-------//
        //------admin login start-------//
        //------data retrive-select------//
        public function Admin_Retrive($adu){
            $this->adminuser = $adu;
            $this->sql = "SELECT * FROM admin WHERE username = '$this->adminuser'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "admin data retrive error";
            }
        }
        //------admin session start------//
        public function Admin_Session($id){
            $this->adminid = $id;
            $_SESSION['boss'] = $this->adminid;
        }
        //------admin Index------//
        public function Admin_Index(){
            if($_SESSION['boss']>0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
        //------admin login end-------//
        //------user detail insert------//
        public function User_Detail($a,$b,$c,$d){
            $this->name = $a;
            $this->phn = $b;
            $this->edu = $c;
            $this->addr = $d;
            //operation
            $this->sql = "INSERT INTO userdetail(name,mobile,education,address) VALUES('$this->name','$this->phn','$this->edu','$this->addr')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                //echo "data inserted";
            }
            else{
                echo "data insert error";
            }
        }
        //------user detail insert end------//
        //------user detail view start------// 
        public function View(){
            $this->sql = "SELECT * FROM userdetail";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "view error";
            }
        }
        //------user detail view end------// 
        //------user admin role update------//
        public function Admin_Search($s){
            $this->key = $s;
            $this->sql = "SELECT * FROM userdetail WHERE id = '$this->key'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "search failed";
            }
        }
        public function Update($role,$id){
            $this->role = $role;
            $this->id = $id;
            $this->sql = "UPDATE userdetail SET role = '$this->role' WHERE id='$this->id'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "update failed";
            }
        }
        //------user admin role update end------//
        //------admin bazar info insert start------//
        public function bazarinput($a,$b,$c){
            $this->bname = $a;
            $this->bdate = $b;
            $this->btotal = $c;
            //operation
            $this->sql = "INSERT INTO bazar(date,name,total) VALUES('$this->bdate','$this->bname','$this->btotal')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                //echo "data inserted";
            }
            else{
                echo "data insert error";
            }
        }
        //------admin bazar info insert end------//
        //------admin bazar view start------//
        public function Bazar_View(){
            $this->sql = "SELECT * FROM bazar";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "view error";
            }
        }
        //------admin bazar view end------//
        //------admin submit info insert start------//
        public function Submitinput($a,$c){
            $this->sname = $a;
            $this->stotal = $c;
            //operation
            $this->sql = "INSERT INTO submit(name,total) VALUES('$this->sname','$this->stotal')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                //echo "data inserted";
            }
            else{
                echo "data insert error";
            }
        }
        //------admin bazar info insert end------//
        //------admin bazar view start------//
        public function Submit_View(){
            $this->sql = "SELECT * FROM submit";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "view error";
            }
        }
        //------admin bazar view end------//


        //IMPORTANT IMPORTANT

         //------admin jan insert start------//
         public function Jan($a){
            $this->dname = $a;
            //operation
            $this->sql = "INSERT INTO jan(name) VALUES('$this->dname')";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                //echo "data inserted";
            }
            else{
                echo "data insert error";
            }
        }
        //------admin jan insert end------//
        //------admin jan View start------//
        public function Jan_View(){
            $this->sql = "SELECT * FROM jan";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "jan view error";
            }
        }
        //------admin jan View end------//

        //------admin jan View start------//
        
        public function up_Jan_View(){
    
            $this->id = $id;
            $this->sql = "SELECT * FROM jan WHERE id = '$this->id' ";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "jan view error";
            }
        }
        //------admin jan View end------//

         //------user meal update------//
         public function Meal_Search($s){
            $this->key = $s;
            $this->sql = "SELECT * FROM jan WHERE id = '$this->key'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "search failed";
            }
        }
        public function Update_Meal($role,$id){
            $this->role = $role;
            $this->id = $id;
            $this->sql = "UPDATE jan SET meal = '$this->role' WHERE id='$this->id'";
            $this->result = $this->connect->query($this->sql);
            if($this->result == TRUE){
                return $this->result;
            }
            else{
                echo "update failed";
            }
        }
        //------user meal update end------//

    }
   
?>