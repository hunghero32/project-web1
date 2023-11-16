<?php 
  require_once 'pdo.php';
    
    function recr_add( $idcorp,$title ,$img ,$exp ,$level ,$salary ,$major ,$type ,
    $totalCV ,$description ,$view ,$status 
    )  {
        $sql = "INSERT INTO  recr ( idcorp ,  title ,  img ,  exp ,  level ,
          salary ,  major ,  type ,  totalCV ,  description ,  date ,  view  ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ? ?, ?, ?, ?, ?)";
        pdo_execute( $sql , $idcorp,$title , 
        $img ,$exp ,$level ,$salary ,
            $major ,$type ,$totalCV ,
            $description ,$view 
        );
    }

    function recr_update($id ,$idcorp,$title ,$img ,$exp ,$level ,$salary ,
    $major ,$type ,$totalCV ,$description ,$view ,$status 
    )  {
        $sql = "UPDATE  recr  SET  id = ?, idcorp = ?, title = ?, img = ?, exp = ?, level = ?, salary = ?, major = ?, type = ?, totalCV = ?, description = ?, date = ?, view = ?, status = ? WHERE id = ? ";
        pdo_execute($sql , $id , $idcorp, $title , $img , $exp , $level , 
        $salary , $major , $type , $totalCV , $description , $view , $status 
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
        $sql = "SELECT * FROM  recr  WHERE idcorp = ? ";
        return pdo_query($sql , [$idcorp]);
    }

    function recr_select_by_id($id) {
        $sql = "SELECT * FROM  recr r INNER JOIN corp c ON c.id= r.idcorp  WHERE id = ? ";
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
        $sql = "SELECT r.* , u.address FROM recr r INNER JOIN corp c ON c.id= r.idcorp INNER JOIN user u ON u.id = c.idcorp  ORDER BY r.id DESC LIMIT 0, 10 ";
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