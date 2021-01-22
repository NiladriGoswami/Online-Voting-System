<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$cand=$_SESSION['candidate_id'];
$fname1=$_SESSION['f_name'];

$vote=$_REQUEST['vote'];

$vsql="UPDATE tbs_candidate SET candidate_votes=candidate_votes+1 WHERE candidate_name='$vote'";
mysqli_query($db,$vsql);


?> 