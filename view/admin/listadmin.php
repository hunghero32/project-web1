
<div class="row">
    <div class=" frmtitle">
        <h1>DANH SÁCH Quản Trị Viên</h1>
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
                    <th>Xóa</th>
                </tr>

                <?php
                foreach ($listadmin as $user): ;?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><a href="index.php?act=delete&id=<?= $user['id'] ?>"><input type="button" value="Xóa"></a></td>
                    </tr>
                <?php    endforeach; ?>
            </table>
        </div>
        <div class=" mb10" >
            <a href="index.php?act=signupAdmin"><input type="button" value="Thêm Admin" /></a>
        </div>
    </div>
</div>