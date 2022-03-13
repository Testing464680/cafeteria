<?php

namespace CAFETERIA\CONTROLLERS;
use CAFETERIA\MODELS\OrderModel;
use CAFETERIA\MODELS\OrderdetailsModel;

class OrderController extends AbstractController
{
    function allAction()
    {
    
        $this->data['orders']=OrderModel::getAll();
        
        $arr=array();

        foreach($this->data['orders'] as $row)
        {
        
          array_push($arr,OrderDetailsModel::getBykey($row->id));
          
        }


        $this->data['orderdetails']=$arr;
        
        $this->_view();

    }


}



?>