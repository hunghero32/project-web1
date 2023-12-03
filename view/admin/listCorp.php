<div class="row">
    <div class=" frmtitle">
        <h1>DANH SÁCH DOANH NGHIỆP</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Tên </th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Xem Chi Tiết</th>
                    <th>Xóa</th>
                </tr>

                <?php
                foreach ($listcorp as $user) :;
                    $delete = 'index.php?act=delete&id=' . $id;

                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><a href="index.php?act=infoCorp&id=<?= $user['id'] ?>"><input type="button" value="Chi Tiết"></a></td>
                        <td><a href="<?php $delete ?> "><input type="button" value="Xóa"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>