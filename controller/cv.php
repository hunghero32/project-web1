
<?php
switch ($act) {
    case 'withdrawCv':
        $idinfo = isset($_GET['id']) ? $_GET['id'] : '';
        $idrec = isset($_GET['idrec']) ? $_GET['idrec'] : '';
        $recruimentInfo = recruimentInfo($idinfo);
        $attachFile = $recruimentInfo['attach'];
        deleteFile($attach_path . $attachFile);
        removeRecInfo($idinfo);
        $_SESSION['withdrawCv'] = $idrec;
        break;

    case 'infoCv':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $cv = info_cv($id);
        }
        extract($cv);

        if (isset($cv['id'])) {
            $idcv = $cv['id'];

            $expCv = getExpCv($idcv);
            $skillCv = getSkillCv($idcv);
            $degree = getDegreeCv($idcv);
        }

        if (isset($_GET['idinfo']) && $_GET['idinfo'] > 0) {
            $recrInfoId = $_GET['idinfo'];
            $recruimentInfo = recruimentInfo($recrInfoId);
            $attachFile = $recruimentInfo['attach'];
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
        $progLang = isset($_POST['skill']) ? $_POST['skill'] : '';

        $list_cv = list_cv($level, $age, $major, $exp, $salary, $address, $progLang);
        include 'view/cv/listCv.php';
        break;

    case 'manage_Cv':
        $iduser = $_SESSION['username']['id'];
        $cvInfo = manageCv($iduser);
        $idcv = $cvInfo['idcv'];
        $introduce = $cvInfo['introduce'];
        extract($cvInfo);
        $thongbao = "<script> location.href = 'index.php?act=manage_Cv#v-pills-messages';</script>";
        echo $thongbao;

        if (isset($_GET['sameCv']) && $_GET['sameCv'] === 1) {
            $_SESSION['sameCv'] = $_GET['sameCv'];
        } 
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $list_apply_recr = list_apply_recr($idcv ,$kym , $status) ;
        $expCv = getExpCv($idcv);
        $skillCv = getSkillCv($idcv);
        $degree = getDegreeCv($idcv);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);
        include 'view/cv/manage_Cv.php';
        break;

    case 'updateCv':
        $iduser = $_SESSION['username']['id'];
        $cvInfo = manageCv($iduser);
        $idcv = $cvInfo['idcv'];
        $introduce = $cvInfo['introduce'];
        extract($cvInfo);

        $expCv = getExpCv($idcv);
        $skillCv = getSkillCv($idcv);
        $degree = getDegreeCv($idcv);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);

        if (isset($_POST['updateInfoCv'])) {
            $sameCv = '';
            $overSizeAvatar = 0;

            $idcv = checkUpdate($_POST['id']);
            $name = checkUpdate($_POST['name']);
            $email = checkUpdate($_POST['email']);
            $phone = checkUpdate($_POST['phone']);
            $address = checkUpdate($_POST['address']);

            $gender = checkUpdate($_POST['gender']);
            $birth = checkUpdate($_POST['birth']);
            $major = checkUpdate($_POST['major']);
            $salary = checkUpdate($_POST['salary']);
            $introduce = checkUpdate($_POST['introduce']);

            $updateExist = updateExistAccount($iduser);
            foreach ($updateExist as $key) {
                $phone === $key['phone'] || $email === $key['email'] ? $sameCv = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                $name === $key['name'] ? $sameCv = '[ Tên đã tòn tại ! ]' : '';
            }

            $idExp = ['', '', '', '', '', ''];
            $jobExp = ['', '', '', '', '', ''];
            $corpExp = ['', '', '', '', '', ''];
            $levelExp = ['', '', '', '', '', ''];
            $startExp = ['', '', '', '', '', ''];
            $endExp = ['', '', '', '', '', ''];

            $idDeg =  ['', '', '', '', '', ''];
            $nameDeg =  ['', '', '', '', '', ''];
            $schoolDeg =  ['', '', '', '', '', ''];
            $yearDeg =  ['', '', '', '', '', ''];

            $idSkill =  ['', '', '', '', '', ''];
            $progLangSkill =  ['', '', '', '', '', ''];
            $percentSkill =  ['', '', '', '', '', ''];

            for ($i = 1; $i <= 5; $i++) {
                $idExp[$i] = checkUpdate($_POST['idExp' . $i]);
                $jobExp[$i] = checkUpdate($_POST['job' . $i]);
                $corpExp[$i] = checkUpdate($_POST['corp' . $i]);
                $levelExp[$i] = checkUpdate($_POST['level' . $i]);
                $startExp[$i] = checkUpdate($_POST['start' . $i]);
                $endExp[$i] = checkUpdate($_POST['end' . $i]);

                $idDeg[$i] = checkUpdate($_POST['idDeg' . $i]);
                $nameDeg[$i] = checkUpdate($_POST['nameDeg' . $i]);
                $schoolDeg[$i] = checkUpdate($_POST['schoolDeg' . $i]);
                $yearDeg[$i] = checkUpdate($_POST['yearDeg' . $i]);

                $idSkill[$i] = checkUpdate($_POST['idSkill' . $i]);
                $progLangSkill[$i] = checkUpdate($_POST['progLangSkill' . $i]);
                $percentSkill[$i] = checkUpdate($_POST['percentSkill' . $i]);
            }

            if ($sameCv == '') {
                if (isset($_SESSION['sameCv'])) {
                    unset($_SESSION['sameCv']);
                }

                if (isset($_FILES['avatar']) && ($_FILES['avatar']['size'] <= 1000000)) {
                    $file = $_FILES['avatar'];
                    // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                    $file_avatar_name = str_replace(' ', '', $file['name']);
                    $target_file = $img_path . $file_avatar_name;
                    move_uploaded_file($file['tmp_name'], $target_file);
                } else {
                    $overSizeAvatar = 1;
                    $file_avatar_name = isset($_POST['avatar']) && $avatar !== '' ? $_POST['avatar'] : '';
                }

                $file_avatar_name !== '' ? updateImage($iduser, 'avatar', $file_avatar_name) : '';
                $file_avatar_name !== '' ? $_SESSION['username']['avatar'] = $file_avatar_name : '';

                $avatar !== '' && $_POST['avatar'] == '' ? removeImage($iduser, 'avatar') : '';
                $avatar !== '' && $_POST['avatar'] == '' ? $_SESSION['username']['avatar'] = '' : '';

                updateInfoUser($id, $name, $email, $phone, $address);
                updateCv($idcv, $gender, $birth, $salary, $major, $introduce);

                for ($i = 1; $i <= 5; $i++) {
                    update_expcv($idExp[$i], $levelExp[$i], $jobExp[$i], $corpExp[$i], $startExp[$i], $endExp[$i]);
                    update_degree($idDeg[$i], $nameDeg[$i], $schoolDeg[$i], $yearDeg[$i]);
                    update_skill($idSkill[$i], $progLangSkill[$i], $percentSkill[$i]);
                }
            } else {
                echo "<script>alert('$sameCv')</script>";
            }

            echo $overSizeAvatar == 1 ? "<script>alert('[ Ảnh đại diện vượt quá kích thước cho phép - 1 MB]')</script>" : '';
            $_SESSION['sameCv'] = $overSizeAvatar > 0 ? '1' : '';
            $_SESSION['sameCv'] = $sameCv !== '' ? '1' : '';
            $overSizeAvatar == 0 && $sameCv == '' ? $_SESSION['updatedCv'] = 'true' : '';
        }
        include 'view/cv/manage_Cv.php';

        break;

    default:
        // Default case
        break;
}
