<div class="row">
    <div class=" frmtitle">
        <h1>DANH SÁCH BÀI TUYỂN</h1>
    </div>
    <div class=" frmcontent ">
        <form action="index.php?act=listRecr" method="POST">
            <div class=" mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>User</th>
                        <th>Sản Phẩm</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listBinhLuan as $binhluan) {
                            extract($binhluan);
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$idcorp.'</td>
                                    <td>'.$job.'</td>
                                    <td>'.$exp.'</td>
                                    <td>'.$level.'</td>
                                    <td>'.$salary.'</td>
                                    <td>'.$progLang.'</td>
                                    <td>'.$type.'</td>
                                    <td>'.$description.'</td>
                                    <td>'.$start.'</td>
                                    <td>'.$end.'</td>
                                    <td>'.$request.'</td>
                                    // <td><a href="index.php?act=xoabl&id='.$id.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                    ?>


                </table>
            </div>
            <!-- <div class=" mb10 ">
                <input  type="button" value="CHỌN TẤT CẢ">
                <input  type="button" value="BỎ CHỌN TẤT CẢ">
            </div> -->
        </form>
    </div>
</div>




</div>
