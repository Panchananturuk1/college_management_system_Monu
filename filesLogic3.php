<?php
$con = mysqli_connect('localhost', 'root', '', 'faculty');

//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['myfile']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from assignment';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'Faculty/Assignments/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['myfile']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO assignment(filename, created) VALUES('$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
 
 
?>

	
