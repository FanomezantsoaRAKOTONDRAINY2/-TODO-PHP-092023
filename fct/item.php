<?php

function displayItem( $item)
{
  
    $editItemId = get('editItem');
    
    if($editItemId==$item['id']){
        $html='<form action="editItem.php" method="POST">';
        $html.='<input type="hidden" name="editItem" value="'.$item['id'].'"';
        $html.='<div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="intitule" value="'.$item['intitule'].'">
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-info btn-flat">Modiffie</button>
                    </span>  
                </div>';
        $html.='</form>';
    }else{
     
        $html = '<li class="'.($item['checked']?'done':'').'">
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                    <a href="toggleItem.php?item='.$item['id'].'">';
        if($item['checked']){
            $html.= '<i class="far fa-check-square"></i>';
        }else{
            $html.= '<i class="far fa-square"></i>';
        }
                        
                    
                $html.='    </a></div>
                <!-- todo text -->
                <span class="text">'.
                $item['intitule'].'</span>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                <a href="index.php?editItem='.$item['id'].'">
                    <i class="far fa-edit"></i>
                </a>
                <a href="deleteItem.php?item='.$item['id'].'">
                   <i class="fas fa-trash-alt"></i>
                </a>
                </div>
            </li>'; 
       
    } 
     return $html;
}

