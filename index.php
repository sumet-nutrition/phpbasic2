<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // put your code here
        $car=['a'=>23,'b'=>34,'c'=>56];
            print_r($car);
            echo '<hr>';
            
            
            foreach ($car as $k=>$v) {
                    //echo $height['robert'];
            echo 'แสดงค่า :'.$k.' / '.$v.'<br>';
            echo '<hr>';
    
}
            $car2=['Liverpool','Man-U','Man-City'];
            print_r($car2);
            echo '<hr>';
            
               echo $car2[0].'<br>';
               
               //for($x=0;$x < $conut($car2);$x++){
               // echo $car2[$x].'<hr>';
            
            
        ?>
    </body>
</html>
