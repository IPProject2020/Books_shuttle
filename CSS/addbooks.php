<?php
require_once('pdo.php');

//$link = mysqli_connect("localhost","Aachal","zapId","ipminiproj");

$bookname=$category=$pdate=$sprice=$bcondn=$contactno=$descr=$img_dir=$status='';

$newname='';
if (isset($_POST['submit'])){
    
    $username = test_input($_POST['username']);
    $bookname = test_input($_POST['bookname']);
    $category = test_input($_POST['category']);
    $sprice = test_input($_POST['price']);
    $bcondn = test_input($_POST['bcondn']);
    $contactno = test_input($_POST['contactno']);
    $descr = test_input($_POST['description']);
        
            $target= 'bookImageUploads/';
            $file_name= $_FILES['bookimage']['name'];
            $file_type= $_FILES['bookimage']['type'];
            $file_size= $_FILES['bookimage']['size'];
            $tmp_name = $_FILES['bookimage']['tmp_name']; //to store in server tmp_name(temporarily store the value in server)

            $allowed = array('jpg' => 'image/jpg','jpeg' => 'image/jpeg','png' => 'image/png');


            if(!in_array($file_type, $allowed)){

                $file_error="Please select jpg/jpeg/png file";
            }
            
            $maxsize =1*1024*1024;
            if ($file_size > $maxsize) {
                $file_error ="File is greater than 1MB";
            }

            if (in_array($file_type,$allowed) && ($file_size < $maxsize) && $_FILES['bookimage']['error']==0) {


                $newname = rand().$file_name;
                $target= $target.$newname;
                $image = $target;
                    move_uploaded_file($tmp_name,$target);

            }
            else{
                 $file_error="Error Occured";
             }
    
            $sql = "INSERT INTO ipminiproj.sellbooks(`username`,`bookname`, `category`, `sellingprice`, `bookcondition`, `contactno`, `description`, `img_dir`) VALUES ('$username','$bookname','$category','$sprice','$bcondn','$contactno','$descr','$image')";

        $stmnt = $pdo->prepare($sql);

        $stmnt->execute(array(
          $username, $bookname, $category, $sprice, $bcondn, $contactno, $descr, $image
        ));
        header("Location: home.php?uploadsuccess");}
    
//            $sql = "INSERT INTO ipminiproj.sellbooks(`bookname`, `category`, `sellingprice`, `bookcondition`, `contactno`, `description`, `img_dir`) VALUES ('$bookname','$category','$sprice','$bcondn','$contactno','$descr','$image')";
//
//            if(mysqli_query($link,$sql)){
//
//                 $status = '<div class="alert alert-success">Successfully added book</div>';
//                header("Location: home.php");
//             }
//         }
//            else
//                {   
//                 $status = '<div class="alert alert-success">Error Occured Adding Books</div>';
//            }

function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
 }
    
 ?>
