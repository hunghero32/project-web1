<?php 
  require_once 'pdo.php';
    
    function recr_add( $idcorp,$title ,$img ,$exp ,$level ,$salary ,$major ,$type ,
    $totalCV ,$description ,$view  
    )  {
        $sql = "INSERT INTO  recr ( idcorp ,  title ,  img ,  exp ,  level ,
          salary ,  major ,  type ,  totalCV ,  description ,  date ,  view  ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?)";
        pdo_execute( $sql , $idcorp,$title , 
        $img ,$exp ,$level ,$salary ,
            $major ,$type ,$totalCV ,
            $description ,$view 
        );
    }

    function recr_update($id ,$idcorp,$title ,$img ,$exp ,$level ,$salary ,
    $major ,$type ,$totalCV ,$description ,$view  
    )  {
        $sql = "UPDATE  recr  SET  id = ?, idcorp = ?, title = ?, img = ?, exp = ?, level = ?, salary = ?, major = ?, type = ?, totalCV = ?, description = ?, date = ?, view = ? WHERE id = ? ";
        pdo_execute($sql , $id , $idcorp, $title , $img , $exp , $level , 
        $salary , $major , $type , $totalCV , $description , $view 
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
        $sql = "SELECT r.*  , c.description AS c_description ,c.major ,u.address FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp INNER JOIN user u ON u.id = c.iduser   WHERE r.idcorp = ?  LIMIT 0,3";
        return pdo_query($sql , $idcorp);
    }

    function recr_select_by_id($id) {
        $sql = "SELECT r.*  , c.description AS c_description ,c.major ,u.address FROM  recr r 
        INNER JOIN corp c ON c.id= r.idcorp  INNER JOIN user u ON u.id = c.iduser  WHERE r.id = ? ";
        return pdo_query_one($sql , $id);
    }
//lấy bài đăng
    // function get_records($start, $limit) {
       
    
    //     // Truy vấn dữ liệu từ database
    //     $sql = "SELECT * FROM recr ORDER BY id DESC LIMIT ?, ? ";
    //     $valu = pdo_query($sql , $start, $limit);
    //     return  $valu;
    // }
    function get_records() {
       
    
        // Truy vấn dữ liệu từ database
        $sql = "SELECT r.* ,c.major, u.address, COUNT(r.type) as sl_type FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser GROUP by  r.type ORDER BY r.id DESC  ";
        $valu = pdo_query($sql );
        return  $valu;
    }
    function total_address_recr() {
       
    
        // Truy vấn dữ liệu từ database
        $sql = "SELECT  u.address , COUNT(u.address) as sl_address  FROM recr r INNER JOIN corp c ON c.id= r.idcorp 
        INNER JOIN user u ON u.id = c.iduser GROUP by u.address ";
        $valu = pdo_query($sql );
        return  $valu;
    }
    //lấy số bài đăng
    function get_Total_Records() {
        // Truy vấn tổng số bản ghi
        $sql = "SELECT COUNT(id) AS total FROM recr";
        
        $valu = pdo_query_one($sql);
        return $valu;
    }


?>