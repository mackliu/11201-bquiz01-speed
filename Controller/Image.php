<?php
include_once "DB.php";

class Image extends DB{

    function __construct()
    {
        parent::__construct('image');
    }

    function backend(){
        $view=['header'=>'校園映像資料管理',
        'table'=>$this->table,
        'rows'=>$this->all(),
        'addbtn'=>'新增校園映像圖片',
        'modal'=>"./view/modal/image.php",
        'updateModal'=>"./view/modal/updateImage.php",
        'updateBtn'=>"更換圖片"
        ];
     return $this->view('./view/backend/image.php',$view);
    }    
}
