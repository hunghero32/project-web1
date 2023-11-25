<?php
switch ($act) {
    case 'infoCv':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $cv = info_cv($id);
            extract($cv);
        }

        include 'view/cv/infoCv.php';
        break;

    case 'listCv':
        $level = isset($_POST['level']) ? $_POST['level'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
        $skill = isset($_POST['skill']) ? $_POST['skill'] : '';

        $list_cv = list_cv($level, $age, $major, $exp, $salary, $address, $skill);
        include 'view/cv/listCv.php';
        break;
    case 'manage_Cv':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $cv = info_cv($id);
        }

        include 'view/cv/manage_CV.php';
        break;
    case 'user_cv':
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            //                $idcv = $_POST['idcv'];
            $img = $_POST['img'];
            $image = $_FILES['img'];
            $cv = info_cv($id);
            // Check if a new image is uploaded
            if ($image['size'] > 0) {
                $img = $image['name'];
                $target_file = 'assets/img/' . $img;
                move_uploaded_file($image['tmp_name'], $target_file);
            }

            $exp = $_POST['exp'];
            $level = $_POST['level'];
            $salary = $_POST['salary'];
            $major = $_POST['major'];
            $type = $_POST['type'];
            $totalCV = $_POST['totalCV'];
            $desc = $_POST['description'];

            update_cv($id, $name, $img, $email, $phone, $address, $exp, $major, $desc);
        }

        include 'view/cv/updateCv.php';
        break;

    default:
        # code...
        break;
}
