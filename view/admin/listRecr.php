<div class="row">
    <div class=" frmtitle">
        <h1>DANH SÁCH BÀI TUYỂN</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai">
            <table>
            <tr>
                        <th>ID</th>
                        <th>Doanh Nghiệp</th>
                        <th>JOB</th>
                        <th>Salary</th>
                        <th>Bắt Đầu</th>
                        <th>Kết Thúc</th>
                        <th>Xem Chi Tiết</th>
                        <th>Xóa</th>
                    </tr>

                <?php
                    foreach($listrecr as $recr) :
                ?>
                    <tr>
                        <td><?= $recr['id'] ?></td>
                        <td><?= $recr['name'] ?></td>
                        <td><?= $recr['job'] ?></td>
                        <td><?= $recr['salary'] ?></td>
                        <td><?= $recr['start'] ?></td>
                        <td><?= $recr['end'] ?></td>
                        <td><a href="index.php?act=info_recr&id=<?= $recr['id'] ?>"><input type="button" value="Chi Tiết"></a></td>
                        <td><a href="index.php?act=delete&id=<?= $recr['id'] ?>"><input type="button" value="Xóa"></a></td>
                    </tr>
                <?php     endforeach; ?>
            </table>
        </div>
    </div>
</div>
