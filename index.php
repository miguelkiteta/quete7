<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>

<?php
if (isset($_GET['lundi'])){
    $lundi = [
        'nord' => [30,32,35,36],
        'sud' => [28,22,25,46],
        'est' => [10,21,25,26],
        'ouest' => [15,22,45,26]
    ];
   
    foreach($lundi['nord'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($lundi['sud'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($lundi['est'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($lundi['ouest'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
}
?>
<?php 
if (isset($_GET['mardi'])){
    $mardi = [
        'nord' =>[11,11,14,12],
        'sud' => [20,23,22,22],
        'est' => [14,13,14,14],
        'ouest'=>[12,13,10,15]
    ];
    
    foreach($mardi['nord'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mardi['sud'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mardi['est'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mardi['ouest'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }

}
?>

<?php 
if (isset($_GET['mercredi'])){
    $mercredi = [
        'nord' =>[18,19,17,15],
        'sud' => [20,23,22,22],
        'est' => [14,13,14,14],
        'ouest'=>[12,13,10,15]
    ];
    
    foreach($mercredi['nord'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mercredi['sud'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mercredi['est'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($mercredi['ouest'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }

}
?>

<?php 
    if (isset($_GET['jeudi'])){
        $jeudi = [
            'nord' =>[50,62,52,70],
            'sud' => [20,23,22,22],
            'est' => [14,13,14,14],
            'ouest'=>[12,13,10,15]
        ];
        
        foreach($jeudi['nord'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($jeudi['sud'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($jeudi['est'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($jeudi['ouest'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
}
?>


<?php 
    if (isset($_GET['vandredi'])){
        $vandredi = [
            'nord' =>[14,14,14,15],
            'sud' => [19,18,18,19],
            'est' => [14,13,14,10],
            'ouest'=>[10,12,10,15]
        ];
 
        foreach($vandredi['nord'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($vandredi['sud'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($vandredi['est'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
        foreach($vandredi['ouest'] as $value){
            echo "<div class='valeur$value'> $value </div>";
        }
}
?>

<?php 
// // if (isset($_GET['vandredi'])){
// //     $vandredi = [
// //         'nord' =>[14,55,33,15],
// //         'sud' => [20,23,22,22],
// //         'est' => [14,13,14,14],
// //         'ouest'=>[12,13,10,15]
// //     ];
    
// //     foreach($vandredi['nord'] as $value){
// //         echo "<div class='valeur$value'> $value </div>";
// //     }
// //     foreach($vandredi['sud'] as $value){
// //         echo "<div class='valeur$value'> $value </div>";
// //     }
// //     foreach($vandredi['est'] as $value){
// //         echo "<div class='valeur$value'> $value </div>";
// //     }
// //     foreach($vandredi['ouest'] as $value){
// //         echo "<div class='valeur$value'> $value </div>";
// //     }
// }
?>

<?php 
if (isset($_GET['samedi'])){
    $samedi = [
        'nord' =>[14,12,14,14],
        'sud' => [28,17,17,17],
        'est' => [13,11,13,13],
        'ouest'=>[10,12,10,15]
    ];

    foreach($samedi['nord'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($samedi['sud'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($samedi['est'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($samedi['ouest'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
}
?>

<?php 
if (isset($_GET['dimanche'])){
    $dimanche = [
        'nord' =>[12,12,12,12],
        'sud' => [18,18,17,17],
        'est' => [14,14,14,15],
        'ouest'=>[10,14,10,14]
    ];
 
    foreach($dimanche['nord'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($dimanche['sud'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($dimanche['est'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
    foreach($dimanche['ouest'] as $value){
        echo "<div class='valeur$value'> $value </div>";
    }
}
?>

<?php include 'includes/footer.php'; ?>
</body>
</html>