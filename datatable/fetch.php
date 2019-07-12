<?php

$databaseHost = 'localhost';
$databaseName = 'u439914868_sdb';
$databaseUsername = 'u439914868_suser';
$databasePassword = 'ZAQ!xsw2db';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)
        or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'studentid',
    1   =>  'profile_photo',
    2   =>  'name',
);  //create column like table in database

$sql ="SELECT * FROM students";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM students WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (studentid Like '".$request['search']['value']."%'";
    $sql.=" OR name Like '".$request['search']['value']."%' ";
    $sql.=" OR profile_photo Like '".$request['search']['value']."%' ";
    $sql.=" )";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($res=mysqli_fetch_array($query)){
    $subdata=array();$actionbuttons='';
    $subdata[]=$res['studentid']; //id
    $subdata[]='<img class="img img-th" src="../../account-assets/img/profile/'.$res['profile_photo'].'" style="width: 34px; height: 34px; border-radius: 50%;">'; //Photo
    $subdata[]=$res['name']; //Name

    $actionbuttons.= '<a href="view-student.php?regno='.$res['studentid'].'&class='.$res['class'].'"> <button type="button" rel="tooltip" title="View Student Profile" class="btn btn-success btn-simple btn-xs">';
    $actionbuttons.= '<i class="material-icons">perm_identity</i>';
    $actionbuttons.= '</button></a>';


    if ($_SESSION['usertype']=='admin') {
      $actionbuttons.=  '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <button type="button" rel="tooltip" title="Edit Student Data" class="btn btn-warning btn-simple btn-xs">';
      $actionbuttons.=  '<i class="material-icons">create</i>';
      $actionbuttons.=  '</button></a>';

      $actionbuttons.=  '<ul class="dropdown-menu">';
      $actionbuttons.=  '<li> <a href="edit-student.php?regno='.$res['studentid'].'&edit=profile"> Edit Profile </a> </li>';
      $actionbuttons.=  '<li> <a href="edit-student.php?regno='.$res['studentid'].'&edit=subjects"> Edit Subjects </a> </li>';
      $actionbuttons.=  '<li> <a href="edit-student.php?regno='.$res['studentid'].'&edit=disc"> Edit Disc/Slrship </a> </li>';
      $actionbuttons.=  '</ul>';
    }

    $actionbuttons.=  '<a href="view-payment.php?id='.$res['studentid'].'"> <button type="button" rel="tooltip" title="View Payment Data" class="btn btn-primary btn-simple btn-xs">';
    $actionbuttons.=  '<i class="material-icons">payment</i>';
    $actionbuttons.=  '</button></a>';
    $actionbuttons.=  '<a href="password-reset.php?id='.$res['studentid'].'"> <button type="button" rel="tooltip" title="Change Password" class="btn btn-warning btn-simple btn-xs" onclick="confirm(';
    $actionbuttons.=  "'Change Password Confirmation'";
    $actionbuttons.=  ');">';
    $actionbuttons.=  '<i class="material-icons">phonelink_lock</i>';
    $actionbuttons.=  '</button></a>';
    $actionbuttons.=  '<a href="cancel-enrollment.php?id='.$res['studentid'].'"> <button type="button" rel="tooltip" title="Cancel Enrollment" class="btn btn-danger btn-simple btn-xs" onclick="confirm(';
    $actionbuttons.=  "'Confirm Cancelling Enrollment'";
    $actionbuttons.=  ');">';
    $actionbuttons.=  '<i class="material-icons">cancel</i>';
    $actionbuttons.=  '</button></a>';

    $subdata[]=$actionbuttons;
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
