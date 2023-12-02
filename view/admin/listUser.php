<div class="row">
    <div class=" frmtitle">
        <h1>DANH SÁCH NGƯỜI ỨNG TUYỂN</h1>
    </div>
    <div class=" frmcontent ">
        <form action="index.php?act=dsbl" method="POST">
            <div class=" mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID NGƯỜI ỨNG TUYỂN</th>
                        <th>TÊN NGƯỜI ỨNG TUYỂN</th>
                        <th></th>
                        <th>ĐỊA CHỈ</th>
                        <th>SDT</th>
                        <th>EMAIL</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listBinhLuan as $binhluan) {
                            extract($binhluan);
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$username.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$role.'</td>
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
