<?php
include 'db.php';

// $query1 = "Select * from questions";
// $questions = mysqli_query($conn, $query1);
// $total = mysqli_num_rows($questions);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->


	<style>
		body{
		background:gray;
		}
		.container{
            border-radius:9px;
			border:2px solid black ;
			width: 50%;
			padding:20px;
            background-color:white;
		}
        input{
            margin:10px;
            padding:10px;
            font-size:18px;
        }
        input[type="button"]:hover{
            background-color:gray;
            color:white;
          
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
        input[type="button"]{
            margin-left:90%;
        }
	</style>
</head>
<body>
<?php
include 'db.php';
//sub enter
$sub="gk";
$_SESSION['sub']=$sub;
$query1 = "Select * from questions";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);





?>
<input type="button" onclick="location.href = 'form.html'" value="admin">
<br><br><br><br><br>
<center>

    </header>
    <main>
        
        <div class="container">
        <h1>Online Test <br>
        <strong>No of Questions :</strong> <?php echo $total  ?></h1><hr>
          
           
                
                <br>
            <form>
                <input type="text" name="stu" placeholder="Your name"><br>
                <input type="text" name="sub" placeholder="Subject"><br>
                <input type="text" name="role" placeholder="Your Roll no." id=""><br>
                <input type="submit" name="btn" value="Next">
    </form>
            <!-- <a href="que.php?n=1" class="start">Next</a> -->
            
        </div></center>
        <?php
        if(isset($_GET['btn'])){
        session_start();
        //echo"aa";
        $sub1=$_GET['sub'];
        $stu=$_GET['stu'];
        $role=$_GET['role'];
        $_SESSION['sub1']=$sub1;
        $_SESSION['stu']=$stu;
        $_SESSION['role']=$role;
        $new="SELECT * FROM questions where sub='$sub1'";
        $q=mysqli_query($conn,$new);
        $new = mysqli_fetch_assoc($q);
       header("location:que.php?n=1");
    }
    else{
        echo " ";
    }
    ?>
</body>
</html>