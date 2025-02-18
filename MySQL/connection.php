

<?php
class Connection
{
    public $conn = '';
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'ravi') or die("Connection Failed");
        echo "<script>
        alert('Database Connection Success');
        </script>";
        echo "<h1>Welcome To MySQL</h1>";
    }
}
$obj = new Connection();
?>