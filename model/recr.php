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

    function recr_select_all() {
        $sql = "SELECT * FROM  recr  ";
        return pdo_query($sql , []);
    }
    function recr_select_by_employers($idcorp) {
        $sql = "SELECT r.* , c.introduce  , c.type AS c_type ,c.major ,u.address FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser 
        
          WHERE r.idcorp = ?  LIMIT 0,3";
        return pdo_query($sql , $idcorp);
    }

    function recr_select_by_id($id) {
        $sql = "SELECT r.* , c.introduce ,c.benefits  , c.type AS c_type ,c.major ,u.address FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp  INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser 
         WHERE r.id = ? ";
        return pdo_query_one($sql , $id);
    }

    function get_records($kym) {
       
    
        // Truy vấn dữ liệu từ database
        $sql = "SELECT r.* , c.introduce ,c.major, u.address FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser INNER JOIN gallery g ON u.id = g.iduser WHERE 1" ;
        if($kym != ""){
            $sql .= " AND (r.job LIKE '%" . $kym . "%' OR c.major LIKE '%" . $kym . "%')"; 
        }
        $sql .= " ORDER BY r.id DESC  LIMIT 0 , 5";
        $valu = pdo_query($sql );
        return  $valu;
    }
    $sql = "select b.*, s.sp_img from bienthesanpham b inner join sanpham s on b.sp_id = s.sp_id where 1 order by btsp_id desc limit 0,10";
    function total_type_recr() {
        $sql = "SELECT  r.type , COUNT(r.type) as sl_type  FROM recr r  GROUP by r.type ";
        $valu = pdo_query($sql );
        return  $valu;
    }
    function total_address_recr() {
        $sql = "SELECT  u.address , COUNT(u.address) as sl_address  FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser GROUP by u.address ";
        $valu = pdo_query($sql );
        return  $valu;
    }
    
    function get_Total_Records() {
        
        $sql = "SELECT COUNT(id) AS total FROM recr";
        
        $valu = pdo_query_one($sql);
        return $valu;
    }
    


?>