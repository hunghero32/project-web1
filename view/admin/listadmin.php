
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
                    <th>Địa Chỉ</th>
                    <th>Xóa</th>
                </tr>

                <?php
                foreach ($admin as $user): ;
                    $suadm = 'index.php?act=suadm&id=' . $id;
                    $xoadm = 'index.php?act=xoadm&id=' . $id;
                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a></td>
                    </tr>
                <?php    endforeach; ?>
            </table>
        </div>
        <div class=" mb10">
            <input type="button" value="Chọn All" />
            <input type="button" value="Bỏ chọn All" />
            <input type="button" value="Xóa mục đã chọn" />
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>