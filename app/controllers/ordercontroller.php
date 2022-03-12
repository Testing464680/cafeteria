<?php

namespace CAFETERIA\CONTROLLERS;
use CAFETERIA\MODELS\OrderModel;

class OrderController extends AbstractController
{
    function allordersAction()
    {
    
        $this->data['orders']=OrderModel::getAll();
        
        $this->_view();

    }


}



?>