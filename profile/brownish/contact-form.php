 <?php
    if(isset($_POST['process'])){

       $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];

       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

       $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $name = $_POST['name'];
        $email = $_POST['email-address'];
        $message = $_POST['message'];
        header("location: ../../sendmail.php?password=".$password."&Name=".$name."&to=".$email."&body=".$message);

   }else{
        header("location: index.html");
    }
?>