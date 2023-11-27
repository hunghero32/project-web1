<?php 

    
    function recr_add( $idcorp,$job  ,$exp ,$level ,$salary ,$progLang ,$type ,
     $end ,$description  , $request
    )  {
        $sql = "INSERT INTO recr( idcorp, job, exp, level, salary,
         progLang, type, description, start, end, request) 
          VALUES (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP,?,?)";
        pdo_execute($sql, $idcorp,$job  ,$exp ,$level ,$salary ,$progLang ,$type ,
         $end ,$description ,  $request
        );
    }

    function recr_update($id ,$idcorp,$job,$exp ,$level ,$salary ,
    $progLang ,$type  ,$description    ,$end , $request
    )  {
        $sql = "UPDATE  recr  SET   idcorp =?, job =?
        , exp =?, level =?, salary =?, progLang =?, type =?,
         description =?, start = CURRENT_TIMESTAMP, end =?, request =? WHERE id = ?";
        pdo_execute($sql , $idcorp, $job , $exp , $level , 
        $salary , $progLang , $type  , $description  , $end , $request, $id
        );
    }

    function recr_delete($id)  {
        $sql = "DELETE FROM  recr  WHERE id = ?";
        pdo_execute($sql, $id);
    }

    function recr_select_all($kym ,$level , $typeRecr , $salary , $progLang  , $address , $exp) {
        $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser where 1 ";
        if($kym != ""){
            $sql .= " AND r.job LIKE '%" . $kym . "%'";
            $sql .= " OR r.exp LIKE '%" . $kym . "%'"; 
            $sql .= " OR u.name LIKE '%" . $kym . "%'"; 
            $sql .= " OR r.progLang LIKE '%" . $kym . "%'"; 
            $sql .= " OR u.address LIKE '%" . $kym . "%'"; 
           
        }
        $sql .= $level !== '' ? " AND r.level LIKE '%" . $level . "%' " : "";
        $sql .= $typeRecr !== '' ? " AND r.type LIKE '%" . $typeRecr . "%' " : "";
        $sql .= $exp !== '' ? " AND r.exp LIKE '%" . $exp . "%' " : "";
        $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
        $sql .= $salary !== '' ? " AND r.salary LIKE '%" . $salary . "%' " : "";
        $sql .= $progLang !== '' ? " AND r.progLang LIKE '%" . $progLang . "%' " : "";
        // $sql .= $date !== '' ? " AND TIMESTAMPDIFF(MONTH, MIN(r.start), MAX(r.end)) LIKE '%" . $date . "%' " : "";
        
    
        $sql .= " ORDER BY r.id DESC  ";
        $valu = pdo_query($sql );
        return  $valu;
    }
    function recr_select_by_employers($idcorp) {
        $sql = "SELECT r.* , c.introduce  ,u.address , u.name  FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser 
        
          WHERE r.idcorp = ?  LIMIT 0,3";
        return pdo_query($sql , $idcorp);
    }

    function recr_select_by_id($id) {

        $sql = "SELECT r.* , c.introduce ,c.benefits   ,u.address , u.name  FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp  INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser 
         WHERE r.id = ? ";
        return pdo_query_one($sql , $id);
    }

    function get_records() {
       
    
        // Truy vấn dữ liệu từ database
        
        $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser " ;
        
        $valu = pdo_query($sql );
        return  $valu;
    }

  
    // function search_address_recr($sortingType) {
    //     $sql = "SELECT r.* , c.introduce  ,u.address , u.name FROM recr r 
    //     INNER JOIN corp c ON c.id= r.idcorp 
    //     INNER JOIN user u ON u.id = c.iduser WHERE 1" ;
    //     if($sortingType == "h"){
    //         $sql .= " AND u.address = 'Hà Nội'  ";
    //     }
    //     else if($sortingType == "m"){
    //         $sql .= " AND u.address = 'Hà Nội'  ";
    //     }else if($sortingType == "d"){
    //         $sql .= " AND u.address = 'Đà Nẵng'  ";
    //     }
    //     $sql .= " AND ORDER BY r.id DESC LIMIT 0,6 ";
        
    //     $valu = pdo_query($sql );
    //     return  $valu;
    // }
    // function search_hn_recr() {
    //     $sql = "SELECT r.* , c.introduce  ,u.address , u.name FROM recr r 
    //     INNER JOIN corp c ON c.id= r.idcorp 
    //     INNER JOIN user u ON u.id = c.iduser WHERE 1 u.address = 'Hà Nội' ORDER BY r.id DESC LIMIT 0,6" ;
        
    //     $valu = pdo_query($sql );
    //     return  $valu;
    // }
    function get_Total_Records() {
        
        $sql = "SELECT COUNT(id) AS total FROM recr";
        
        $valu = pdo_query_one($sql);
        return $valu;
    }
    


?>