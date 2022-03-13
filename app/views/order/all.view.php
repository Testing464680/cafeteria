<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table table-dark">
    <thead>
        <tr>
            <th>Order Date</th>
            <th> Name</th>
            <th>Room</th>
            <th>Ext</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>


    <?php foreach($orders as $order){
        
        ?>

        <tr>
            <td><?= $order->created_at;  ?></td>
            <td><?= $order->name;  ?></td>
            <td><?= $order->room;  ?></td>
            <td><?= $order->ext;  ?> </td>

            
       
        </tr>

        <?php } ?>
       
 
                  
    </tbody>
</table>
    
</body>
</html>


<?php

echo '<pre>';
print_r($this->data['orderdetails']);
echo '</pre>';

?>