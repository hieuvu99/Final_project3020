
<?php
$account = array("hieuvu" => "Hieuvu123", "nahid" => "Nahid123");

if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    // do user authentication as per your requirements
    $checkaccount=false;
    foreach($account as $key => $account){
        if ($_POST['username'] ===$key && $_POST['password']=== $account)
           $checkaccount=true;
    }
    if($checkaccount)
        echo json_encode(array('success' => 1));
    else if(!preg_match("/^[A-Z]{1}[a-zA-Z0-9]*$/",$_POST['password']))
        echo json_encode(array('success' => 2));
    else
        echo json_encode(array('success' => 0));
} else {
    echo json_encode(array('success' => 0));
}
?>