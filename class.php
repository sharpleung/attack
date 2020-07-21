    <?php
      error_reporting(0);
       session_save_path('session');
      ini_set('session.serialize_handler','php');
      session_start();
        class XianZhi{
        public $name = 'panda';
        function __wakeup(){
          $this->name="session.php";
        }
        function __destruct(){
         	echo file_get_contents($this->name);
        }
      }
     ?>