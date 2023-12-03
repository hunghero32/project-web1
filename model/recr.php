<?php 

    function applyJob($idRecr , $idCV , $status) {
        $sql = "INSERT INTO  info ( idrec ,  idcv ,  status ) VALUES (?,?,?)";
        pdo_execute($sql,$idRecr , $idCV , $status);
    }

    function recr_add( $idcorp,$job  ,$exp ,$level ,$salary ,$progLang ,$type ,
     $description  ,$end , $request
    )  {
        $sql = "INSERT INTO recr( idcorp, job, exp, level, salary,
         progLang, type, description, start, end, request) 
          VALUES (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP,?,?)";
        pdo_execute($sql, $idcorp,$job  ,$exp ,$level ,$salary ,$progLang ,$type ,
         $description ,$end ,  $request
        );
    }

    function recr_update($id ,$idcorp,$job,$exp ,$level ,$salary ,
    $progLang ,$type  ,$description  ,$end , $request
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
        $sql = "SELECT r.* , c.introduce , u.address , u.name , g.avatar FROM recr r LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser where 1 ";
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
        LEFT JOIN corp c ON c.id= r.idcorp LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
        
          WHERE r.idcorp = ?  LIMIT 0,3";
        return pdo_query($sql , $idcorp);
    }
    function info_Corp_recr($id)
{
    $sql = "SELECT u.name, u.email, u.phone, u.address, c.*
             FROM user u
            LEFT JOIN corp c ON u.id = c.iduser
            WHERE u.role = 3 AND u.id = ?";
    return pdo_query_one($sql, $id);
}

    function recr_select_by_id($id) {

        $sql = "SELECT r.* , c.introduce ,c.benefits   ,u.address , u.name , u.phone , u.email ,  g.avatar FROM  recr r 
        LEFT JOIN corp c ON c.id= r.idcorp  LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
        
         WHERE r.id = ? ";
        return pdo_query_one($sql , $id);
    }
    function infoCv($id)  {
        $sql = "SELECT * FROM cv WHERE iduser = ?";
        return pdo_query_one($sql , $id);
    }
    function recr_select_by_similar($job , $id) {

        $sql = "SELECT r.* , c.introduce ,c.benefits   ,u.address , u.name , g.avatar FROM  recr r 
        LEFT JOIN corp c ON c.id= r.idcorp  LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
         WHERE r.job = ? AND r.id != ? ";
        return pdo_query($sql , $job , $id);
    }

    function get_records() {
   
        $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r 
        LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser 
        LEFT JOIN gallery g ON u.id = g.iduser where 1  ORDER BY r.id DESC LIMIT 0,8" ;
        
        $valu = pdo_query($sql );
        return  $valu;
    }

  
    function search_address_recr($kym , $end , $id) {
        $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r 
        LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser 
        LEFT JOIN gallery g ON u.id = g.iduser where 1 AND u.id = ? ";
        if($kym != ""){
            $sql .= " AND r.job LIKE '%" . $kym . "%'";
            $sql .= " OR r.exp LIKE '%" . $kym . "%'"; 
            $sql .= " OR r.salary LIKE '%" . $kym . "%'"; 
            $sql .= " OR r.type LIKE '%" . $kym . "%'"; 
            $sql .= " OR r.progLang LIKE '%" . $kym . "%'"; 
            $sql .= " OR r.level LIKE '%" . $kym . "%'"; 
           
        }
        $sql .= $end !== '' ? " AND r.end LIKE '%" . $end . "%' " : "";
        $sql.= " ORDER BY r.id DESC LIMIT 0,8" ;

        $valu = pdo_query($sql , $id);
        return  $valu;
    }
    
    function get_Total_Records() {
        
        $sql = "SELECT COUNT(id) AS total FROM recr";
        
        $valu = pdo_query_one($sql);
        return $valu;
    }
    function info() {
        $sql = "SELECT * FROM info ";
        $valu = pdo_query($sql );
        return  $valu;

    }
    function list_apply_cv() {
        $sql = "SELECT cv.*, u.name as namecv , r.job , g.avatar as avatarCv FROM cv  LEFT JOIN info i ON cv.id= i.idcv 
         LEFT JOIN recr r ON r.id= i.idrec LEFT JOIN user u ON u.id = cv.iduser
         LEFT JOIN gallery g ON u.id = g.iduser 
        WHERE  i.idcv IS NOT NULL";
        $valu = pdo_query($sql );
        return  $valu;
    }

?>