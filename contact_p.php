 <?php
include_once ('config.php');
    if(isset($_POST['submit_contact']))
    {   
        $name1 = $_POST['name'];
        $email1 = $_POST['email'];
        $subject1 = $_POST['subject'];
        $message1 = $_POST['message'];
        $q = "INSERT INTO contact_us(name,email,subject,message) VALUES('$name1','$email1','$subject1','$message1')";
        $data = mysqli_query($conn,$q);
        if($data > 0)
        {
            header("Location:index.php");
        }
        else
        {
            echo "error";
        }
    }
?>
   