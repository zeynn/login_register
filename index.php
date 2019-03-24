<?php
// main function. php yi dahil et

include('functions/main_functions.php');

// header.php ye dahil et
include('inc/header.php');


$mesaj_no = (isset($_GET['mesaj'])) ? $_GET['mesaj'] : 0;

if(!isset($_GET['main'])){
    //eğer main set edildiye inc içindeki main içindeki main.php yi çağır
	include('inc/main/main.php');


} else {
    //main.php yi dahil et.
	include('inc/main/'.$_GET['main'].'.php');
}
// footer.php yi dahil et.
include('inc/footer.php');

?>