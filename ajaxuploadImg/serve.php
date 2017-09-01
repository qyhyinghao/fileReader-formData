<?php  

    // echo '<pre>';
    //   var_dump($_POST);
    // echo '</pre>';
    // echo '<pre>';
    //   var_dump($_FILES);
    // echo '</pre>';
    //die;
    $name = isset($_POST['name'])? $_POST['name'] : '';  
    $gender = isset($_POST['gender'])? $_POST['gender'] : '';  
    
    $filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));  
    
    $response = array();  
    //echo $filename;
    if(move_uploaded_file($_FILES['photo']['tmp_name'], './upload/'.$filename)){  
        $response['isSuccess'] = true;  
        $response['name'] = $name;  
        $response['gender'] = $gender;  
        $response['photo'] = $filename;  
    }else{  
        $response['isSuccess'] = false;  
    }  
    // echo '<pre>';
    //   var_dump($response);
    // echo '</pre>';
    //die;
    echo json_encode($response);  
?>  