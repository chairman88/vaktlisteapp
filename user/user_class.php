<?php
class USER {
    private $db;
    private $errors = [];

    function __construct($DB_con) {
      $this->db = $DB_con;
    }

    

    public function login($uname, $upass) {
       try {
          $stmt = $this->db->prepare("SELECT * FROM person WHERE brukernavn=:uname LIMIT 1");
          $stmt->execute(array(':uname' => $uname));
          $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0) {
             if($upass == $userRow['passord']) {
                $_SESSION['user_session'] = $userRow['brukernavn'];
                $_SESSION['user_type'] = $userRow['type'];
                $_SESSION['user_id'] = $userRow['personid'];
                 if($userRow['type'] === 'admin'){
                header('Location:../admin/brukere.php');
                 }
                 if($userRow['type'] === 'assistent'){
                header('Location:../assistent/vakter.php');
                 }
                 if($userRow['type'] === 'bruker'){
                header('Location:../bruker/vakter.php');
                 }
                return true;
             } else {
                $this->errors[] = "Wrong username or password.<br>";
                return false;
             }
         } else {
             $this->errors[] = "Wrong username or password.<br>";
         }
       }
       catch(PDOException $e) {
           return false;
       }
   }

    public function is_loggedin() {
        if(isset($_SESSION['user_session'])) {
            return true;
        } else {
            return false;
        }
    }
    
    public function is_admin() {
        if(isset($_SESSION['user_type']) & $_SESSION['user_type'] === 'admin') {
            return true;
        } else {
            return false;
        }
    }
    
    public function is_assistent() {
        if(isset($_SESSION['user_type']) & $_SESSION['user_type'] === 'assistent') {
            return true;
        } else {
            return false;
        }
    }
    
    public function is_bruker() {
        if(isset($_SESSION['user_type']) & $_SESSION['user_type'] === 'bruker') {
            return true;
        } else {
            return false;
        }
    }

   public function logout() {
        session_destroy();
        unset($_SESSION['user_session']);
       header('Location:../index.php');
        return true;
   }

   public function check_unique_name($uname) {
       try {
          $stmt = $DB_con->prepare("SELECT brukernavn FROM person WHERE brukernavn=:uname");
          $stmt->execute(array(':uname' => $uname));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          if($row['brukernavn'] == $uname) {
             $this->errors[] = "Sorry, the username is already taken!<br>";
             return false;
          }

          return true;
      }
      catch(PDOException $e) {
        return false;
      }
   }

   public function get_errors() {
       return $this->errors;
   }

}

?>
