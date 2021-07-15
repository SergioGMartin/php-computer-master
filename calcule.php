<?php include 'header.php'; 

$prixAcs=0;
foreach($acs as $id => $product){  
    if(isset($_GET['a'.$id])){
        $prixAcs=$prixAcs+$product[2];
    };
}

$prix=$cpus[intval($_GET['cpu'])][1]+
        $rams[intval($_GET['ram'])][1]+
        $gpus[intval($_GET['gpu'])][1]+
        $oss[intval($_GET['os'])][1]+
        $prixAcs;

header("refresh:5;url=index.php");
?>

<h1>Le prix de votre ordinateur</h1>

<div class="alert alert-success" role="alert">
    <p>Le prix de votre ordinateur est <?php echo $prix ?></p>
</div>



