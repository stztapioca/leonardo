
<?php 
    ////////////////////////////////////
    //Simple DB Connection class.
    ////////////////////////////////////
    class dbconnect {
    //Variables.
    private $host;
    private $user;
    private $password;
    private $database;
    private $lnk;
    public $result;
    ////////////////////////////
    //Constructor.
    ////////////////////////////
    public function __construct($a, $b, $c, $d) {
    $this -> host = $a;
    $this -> user = $b;
    $this -> password = $c;
    $this -> database = $d;
    }
    ////////////////////////////
    //Public class functions.
    ////////////////////////////
    //Query
    public function func_query($qstring) {
    $this -> func_connect();
    mysql_query("SET NAMES 'utf8'");
    $this -> result = mysql_query($qstring);
    return $this -> result;
    mysql_close($this -> lnk);
    mysql_free_result($this -> result);
    }
    ////////////////////////////
    //Private class functions.
    ////////////////////////////
    //Connect.
    private function func_connect() {
    $this -> lnk = mysql_connect($this -> host, $this -> user, $this -> password, true) OR die('Could not connect to the database - Why: '.mysql_error());
    mysql_select_db($this -> database) OR die('Could not find database: '.mysql_error());
    }	
    ////////////////////////////
    //Destructor.
    ////////////////////////////
    public function __destruct() {
    unset ($this -> user, $this -> password);
    }
    }
    ////////////////////////////////////

?>