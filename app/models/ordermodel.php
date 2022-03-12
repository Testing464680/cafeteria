<?php

namespace CAFETERIA\MODELS;

class OrderModel extends Model 
{
    protected static $tableName='orderUsers';
    protected static $primaryKey='id';
    protected static $tableSchema=
        [
         'created_at'      =>self::DATA_TYPE_STR,
            'name'      =>self::DATA_TYPE_STR,
            'room'      =>self::DATA_TYPE_INT,
            'ext'      =>self::DATA_TYPE_INT,
            'status'      =>self::DATA_TYPE_BOOL

        ];

}

?>