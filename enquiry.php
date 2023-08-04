<?php
    include("connect.php");
    if(isset($_POST["submit"])){

    $nameofstd = $_POST['name_1'];
    $number = $_POST['name_2'];
    $emailaddress_1 = $_POST['name_3'];
    $branch_1 = $_POST['Branch'];
    $queries_12 = $_POST['name_9'];
    
    // echo $nameofstd;
    // if($yournewpass!=$yourconfirmpass){
    //     echo '<script>
    //             alert("Sorry!Your Paasword Did Not Match!");
    //             window.location = "../registrationform.html";
    //          </script>';
    // }
    // else{
    
        $query = "INSERT INTO `studentform`(`student_name`, `contact_number`, `student_email _id`, `course`, `student_queries`) VALUES ('$nameofstd', $number,'$emailaddress_1','$branch_1','$queries_12')";
    $insert = mysqli_query($connect, $query);

    if($insert == true)
        {
            echo '<script>
                    alert("You Have Successfullly Registered!");
                </script>';
        }
    else
        {
            echo '<script>
                    alert("Not Registered");
                </script>';
        }
    }
?>











