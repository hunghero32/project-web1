<?php

switch ($act) {
    case 'admin':
        # code...
        include('view/admin/admin.php');
        break;
        case 'infoCorp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $corp = info_Corp($id);
                extract($corp);
    
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
    
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
    
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
    
                // Lấy các bài tuyển dụng
                $idcorp = $corp['id'];
                $ownRecrs = loadRecr($idcorp);
    
                // Các nhà tuyển dụng cùng địa điểm
                $location = $corp['address'];
                $sameLocat = sameLocation($idcorp, $location);
            }
    
            include 'view/corp/infoCorp.php';
            break;
    
        case 'manageCorp':
            $idcorp = $_SESSION['username']['id'];
            $corp = manageInfo($idcorp);
            extract($corp);
    
            // Xử lí các thumbnail
            $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
            $gallery = gallery($arr);
    
            // Xử lí đoạn văn thành dòng
            $introPara = explode("\n", $introduce);
            $intro = paragToLines($introPara);
    
            $benePara = explode("\n", $benefits);
            $bene = paragToLines($benePara);
    
            include 'view/corp/manage.php';
            break;
    
        case 'updateInfoCorp':
            $idcorp = $_SESSION['username']['id'];
            $corp = manageInfo($idcorp);
            extract($corp);
            // var_dump($corp);
    
            // Xử lí các thumbnail
            $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
            $gallery = gallery($arr);
    
            // Xử lí đoạn văn thành dòng
            $introPara = explode("\n", $introduce);
            $intro = paragToLines($introPara);
    
            $benePara = explode("\n", $benefits);
            $bene = paragToLines($benePara);
    
            if (isset($_POST['updateInfoCorp'])) {
                $same = '';
                $overSizeAvatar = 0;
                $overSizeThumb = 0;
    
                $id = checkUpdate($_POST['id']);
                $nameCorp = checkUpdate($_POST['name']);
                $emailCorp = checkUpdate($_POST['email']);
                $phoneCorp = checkUpdate($_POST['phone']);
                $addressCorp = checkUpdate($_POST['address']);
    
                $active = checkUpdate($_POST['activeYear']);
                $introd = checkUpdate($_POST['introduce']);
                $workday = checkUpdate($_POST['workingday']);
                $sizeCorp = checkUpdate($_POST['size']);
                $linkCorp = checkUpdate($_POST['link']);
                $beneCorp = checkUpdate($_POST['benefits']);
    
                $updateExist = updateExistAccount($iduser);
                foreach ($updateExist as $key) {
                    $phoneCorp === $key['phone'] || $emailCorp === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                    $nameCorp === $key['name'] ? $same = '[ Tên nhà tuyển dụng đã tòn tại ! ]' : '';
                }
    
                if ($same == '') {
                    if (isset($_SESSION['same'])) { 
                        unset($_SESSION['same']);
                    }
                    $arrThumb = ['', $thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5];
    
                    for ($i = 1; $i <= 5; $i++) {
                        if (isset($_FILES['thumb' . $i]) && ($_FILES['thumb' . $i]['size'] <= 3000000)) {
                            $file = $_FILES['thumb' . $i];
                            // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                            $file_name = str_replace(' ', '', $file['name']);
                            $target_file = $img_path . $file_name;
                            move_uploaded_file($file['tmp_name'], $target_file);
                        } else {
                            $overSizeThumb = 1;
                            $file_name = isset($_POST['thumb' . $i]) && $arrThumb[$i] !== '' ? $_POST['thumb' . $i] : '';
                        }
                        $file_name !== '' ? updateImage($id, 'thumbnail' . $i, $file_name) : '';
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
    
                    $file_avatar_name !== '' ? updateImage($id, 'avatar', $file_avatar_name) : '';
                    $file_avatar_name !== '' ? $_SESSION['username']['avatar'] = $file_avatar_name : '';
    
                    $avatar !== '' && $_POST['avatar'] == '' ? removeImage($id, 'avatar') : '';
                    $avatar !== '' && $_POST['avatar'] == '' ? $_SESSION['username']['avatar'] = '' : '';
                    $thumbnail1 !== '' && $_POST['thumb1'] == '' ? removeImage($id, 'thumbnail1') : '';
                    $thumbnail2 !== '' && $_POST['thumb2'] == '' ? removeImage($id, 'thumbnail2') : '';
                    $thumbnail3 !== '' && $_POST['thumb3'] == '' ? removeImage($id, 'thumbnail3') : '';
                    $thumbnail4 !== '' && $_POST['thumb4'] == '' ? removeImage($id, 'thumbnail4') : '';
                    $thumbnail5 !== '' && $_POST['thumb5'] == '' ? removeImage($id, 'thumbnail5') : '';
    
                    updateUser($id, $nameCorp, $emailCorp, $phoneCorp, $addressCorp);
                    updateCorp($id, $active, $introd, $sizeCorp, $workday, $linkCorp, $beneCorp);
                } else {
                    echo "<script>alert('$same')</script>";
                }
    
                echo $overSizeAvatar == 1 ? "<script>alert('[ Ảnh đại diện vượt quá kích thước cho phép - 1 MB]')</script>" : '';
                echo $overSizeThumb == 1 ? "<script>alert('[ Ảnh giới thiệu vượt quá kích thước cho phép - 3 MB]')</script>" : '';
                $_SESSION['same'] = $overSizeAvatar > 0 ? '1' : '';
                $_SESSION['same'] = $overSizeThumb > 0 ? '1' : '';
                $_SESSION['same'] = $same !== '' ? '1' : '';
                $overSizeAvatar == 0 && $overSizeThumb == 0 && $same == '' ? $_SESSION['updated'] = 1 : '';
            }
            include 'view/corp/manage.php';
            break;
    
        case 'listCorp':
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
    
            $list_corp = list_Corp($name, $address);
            include 'view/corp/listCorp.php';
            break;
            case 'infoCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $corp = info_Corp($id);
            extract($corp);

            // Xử lí các thumbnail
            $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
            $gallery = gallery($arr);

            // Xử lí đoạn văn thành dòng
            $introPara = explode("\n", $introduce);
            $intro = paragToLines($introPara);

            $benePara = explode("\n", $benefits);
            $bene = paragToLines($benePara);

            // Lấy các bài tuyển dụng
            $idcorp = $corp['id'];
            $ownRecrs = loadRecr($idcorp);

            // Các nhà tuyển dụng cùng địa điểm
            $location = $corp['address'];
            $sameLocat = sameLocation($idcorp, $location);
        }

        include 'view/corp/infoCorp.php';
        break;

    case 'manageCorp':
        $idcorp = $_SESSION['username']['id'];
        $corp = manageInfo($idcorp);
        extract($corp);

        // Xử lí các thumbnail
        $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
        $gallery = gallery($arr);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);

        $benePara = explode("\n", $benefits);
        $bene = paragToLines($benePara);

        include 'view/corp/manage.php';
        break;

    case 'updateInfoCorp':
        $idcorp = $_SESSION['username']['id'];
        $corp = manageInfo($idcorp);
        extract($corp);
        // var_dump($corp);

        // Xử lí các thumbnail
        $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
        $gallery = gallery($arr);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);

        $benePara = explode("\n", $benefits);
        $bene = paragToLines($benePara);

        if (isset($_POST['updateInfoCorp'])) {
            $same = '';
            $overSizeAvatar = 0;
            $overSizeThumb = 0;

            $id = checkUpdate($_POST['id']);
            $nameCorp = checkUpdate($_POST['name']);
            $emailCorp = checkUpdate($_POST['email']);
            $phoneCorp = checkUpdate($_POST['phone']);
            $addressCorp = checkUpdate($_POST['address']);

            $active = checkUpdate($_POST['activeYear']);
            $introd = checkUpdate($_POST['introduce']);
            $workday = checkUpdate($_POST['workingday']);
            $sizeCorp = checkUpdate($_POST['size']);
            $linkCorp = checkUpdate($_POST['link']);
            $beneCorp = checkUpdate($_POST['benefits']);

            $updateExist = updateExistAccount($iduser);
            foreach ($updateExist as $key) {
                $phoneCorp === $key['phone'] || $emailCorp === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                $nameCorp === $key['name'] ? $same = '[ Tên nhà tuyển dụng đã tòn tại ! ]' : '';
            }

            if ($same == '') {
                if (isset($_SESSION['same'])) { 
                    unset($_SESSION['same']);
                }
                $arrThumb = ['', $thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5];

                for ($i = 1; $i <= 5; $i++) {
                    if (isset($_FILES['thumb' . $i]) && ($_FILES['thumb' . $i]['size'] <= 3000000)) {
                        $file = $_FILES['thumb' . $i];
                        // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                        $file_name = str_replace(' ', '', $file['name']);
                        $target_file = $img_path . $file_name;
                        move_uploaded_file($file['tmp_name'], $target_file);
                    } else {
                        $overSizeThumb = 1;
                        $file_name = isset($_POST['thumb' . $i]) && $arrThumb[$i] !== '' ? $_POST['thumb' . $i] : '';
                    }
                    $file_name !== '' ? updateImage($id, 'thumbnail' . $i, $file_name) : '';
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

                $file_avatar_name !== '' ? updateImage($id, 'avatar', $file_avatar_name) : '';
                $file_avatar_name !== '' ? $_SESSION['username']['avatar'] = $file_avatar_name : '';

                $avatar !== '' && $_POST['avatar'] == '' ? removeImage($id, 'avatar') : '';
                $avatar !== '' && $_POST['avatar'] == '' ? $_SESSION['username']['avatar'] = '' : '';
                $thumbnail1 !== '' && $_POST['thumb1'] == '' ? removeImage($id, 'thumbnail1') : '';
                $thumbnail2 !== '' && $_POST['thumb2'] == '' ? removeImage($id, 'thumbnail2') : '';
                $thumbnail3 !== '' && $_POST['thumb3'] == '' ? removeImage($id, 'thumbnail3') : '';
                $thumbnail4 !== '' && $_POST['thumb4'] == '' ? removeImage($id, 'thumbnail4') : '';
                $thumbnail5 !== '' && $_POST['thumb5'] == '' ? removeImage($id, 'thumbnail5') : '';

                updateUser($id, $nameCorp, $emailCorp, $phoneCorp, $addressCorp);
                updateCorp($id, $active, $introd, $sizeCorp, $workday, $linkCorp, $beneCorp);
            } else {
                echo "<script>alert('$same')</script>";
            }

            echo $overSizeAvatar == 1 ? "<script>alert('[ Ảnh đại diện vượt quá kích thước cho phép - 1 MB]')</script>" : '';
            echo $overSizeThumb == 1 ? "<script>alert('[ Ảnh giới thiệu vượt quá kích thước cho phép - 3 MB]')</script>" : '';
            $_SESSION['same'] = $overSizeAvatar > 0 ? '1' : '';
            $_SESSION['same'] = $overSizeThumb > 0 ? '1' : '';
            $_SESSION['same'] = $same !== '' ? '1' : '';
            $overSizeAvatar == 0 && $overSizeThumb == 0 && $same == '' ? $_SESSION['updated'] = 1 : '';
        }
        include 'view/corp/manage.php';
        break;

    case 'listCorp':
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';

        $list_corp = list_Corp($name, $address);
        include 'view/corp/listCorp.php';
        break;
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
            $progLang = isset($_POST['skill']) ? $_POST['skill'] : '';
    
            $list_cv = list_cv($level, $age, $major, $exp, $salary, $address, $progLang);
            include 'view/cv/listCv.php';
            break;
    
        case 'manage_Cv':
    
            if (isset($_POST['submit'])) {
    
    
                //     $cvData = [
                //         'id' => $_POST['cv_id'],                
                //         'gender' => $_POST['cv_gender'],
                //         'birth' => $_POST['cv_birth'],
                //         'salary' => $_POST['cv_salary'],
                //         'major' => $_POST['cv_major'],
                //         'introduce' => $_POST['cv_introduce']
                //     ];
    
                //     $degreeData = [
                //         'id' => $_POST['degree_id'],
                //         'name' => $_POST['degree_name'],
                //         'school' => $_POST['degree_school'], 
                //         'year' => $_POST['degree_year']
                //     ];
    
                //     $expData = [
                //         'id' => $_POST['experience_id'],
                //         'level' => $_POST['experience_level'],
                //         'job' => $_POST['experience_job'],
                //         'corp' => $_POST['experience_corp'],
                //         'start' => $_POST['experience_start'],
                //         'end' => $_POST['experience_end']
                //     ];
                //     $skillData = [
                //         'id' => $_POST['skill_id'],
                //         'progLang' => $_POST['skill_progLang'],
                //         'percent' => $_POST['skill_percent']
                //     ];
                //     // Update all information
    
                //     updateAllInfo($cvData, $degreeData, $expData, $skillData); 
    
                // }
                $idcv = $_SESSION['username']['id'];
                $cvInfo = manageCv($id);
                extract($cvInfo);
    
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
    
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            }
    
            include 'view/cv/manage_Cv.php';
            break;
    
    
    
        case 'updateCv':
            $idcorp = $_SESSION['username']['id'];
            $corp = manageCv($id);
            extract($corp);
            // var_dump($corp);
    
            // Xử lí các thumbnail
            $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
            $gallery = gallery($arr);
    
            // Xử lí đoạn văn thành dòng
            $introPara = explode("\n", $introduce);
            $intro = paragToLines($introPara);
    
            $benePara = explode("\n", $benefits);
            $bene = paragToLines($benePara);
    
    
            if (isset($_POST['updateCv'])) {
                $id = checkUpdate($_POST['id']);
                // update thằng CV
                $cvData = [
    
                    $gender = checkUpdate($_POST['cv_gender']),
                    $birth = checkUpdate($_POST['cv_birth']),
                    $salary = checkUpdate($_POST['cv_salary']),
                    $major = checkUpdate($_POST['cv_major']),
                    $introduce = checkUpdate($_POST['cv_introduce']),
                ];
                // update thằng giáo dục
                $degreeData = [
                    $name = checkUpdate($_POST['degree_name']),
                    $school = checkUpdate($_POST['degree_school']),
                    $year = checkUpdate($_POST['degree_year']),
                ];
                //update thằng kinh nghiệm
                $expData = [
                    $level = checkUpdate($_POST['experience_level']),
                    $job = checkUpdate($_POST['experience_job']),
                    $corp = checkUpdate($_POST['experience_corp']),
                    $start = checkUpdate($_POST['experience_start']),
                    $end = checkUpdate($_POST['experience_end']),
                ];
                // update thằng kỹ năng 
                $skillData = [
                    $progLang = checkUpdate($_POST['skill_progLang']),
                    $percent = checkUpdate($_POST['skill_percent']),
                ];
                updateAllInfo($cvData, $degreeData, $expData, $skillData);
            }
            include 'view/cv/updateCv.php';
            break;
            case 'listRecr':
                $level = isset($_POST['level']) ? $_POST['level'] : '';
                $kym = isset($_POST['key']) ? $_POST['key'] : '';
                $typeRecr = isset($_POST['typeRecr']) ? $_POST['typeRecr'] : '';
                $major = isset($_POST['major']) ? $_POST['major'] : '';
                $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
                $address = isset($_POST['address']) ? $_POST['address'] : '';
                $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
                $progLang = isset($_POST['progLang']) ? $_POST['progLang'] : '';
                $date = isset($_POST['date']) ? $_POST['date'] : '';
                $perPage = 5;
                $val_racr = recr_select_all($kym, $level, $typeRecr, $salary, $progLang, $address, $exp);
        
                include 'view/recr/listRecr.php';
                break;
            //info của phần công ty
            case 'infoRecr':
                if (isset($_GET['id'])) {
                    $id_recr = $_GET['id'];
                    $val_recr = recr_select_by_id($id_recr);
                    extract($val_recr);
                    
                }
                $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
                $corp = manageInfo($idcorp);
                extract($corp);
                $idcorp = $_SESSION['username']['id'];
                    $corp = manageInfo($idcorp);
                    extract($corp);
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
            
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
                include 'view/corp/manage.php';
                break;
        
            //info của phần ứng cử viên 
            case 'info_recr':
                if (isset($_GET['id'])) {
                    $id_recr = $_GET['id'];
                    $val_recr = recr_select_by_id($id_recr);
                    extract($val_recr);
                    $val_c = recr_select_by_employers($idcorp);
                }
                
                include 'view/recr/infoRecr.php';
                break;
        
            case 'post_recr':
                if (isset($_SESSION['username'])) {
                    // echo "hihi";
                    extract($_SESSION['username']);
                    $val_corp = info_Corp_recr($id);
                    $idcorp =  $val_corp['id'];
                    // var_dump( $idcorp);
        
                    if (isset($_POST['add_recr'])) {
                        $job = $_POST['job'];
                        $request = $_POST['request'];
                        $type = $_POST['type'];
                        $progLang = $_POST['progLang'];
                        $salary = $_POST['salary'];
                        $exp = $_POST['exp'];
                        $level = $_POST['level'];
                        $request = $_POST['request'];
                        $description = $_POST['description'];
                        $end = $_POST['end'];
                        recr_add( $idcorp, $job, $exp, $level, $salary, $progLang, $type, $description, $end, $request
                        );
                        $thongbao = "<script> alert('Bạn đã thêm thành công !');
                    location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
                    echo $thongbao;
                    }
                }
                $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
                $corp = manageInfo($idcorp);
                extract($corp);
                $idcorp = $_SESSION['username']['id'];
                    $corp = manageInfo($idcorp);
                    extract($corp);
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
            
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
                include 'view/corp/manage.php';
                break;
            case 'manage_recr':
                $end = isset($_POST['end']) ? $_POST['end'] : '';
                $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
                $id = isset($_SESSION['username']) ? $_SESSION['username']['id'] : '';
                $valu_racr = search_address_recr($kym , $end , $id);
                $thongbao = "<script> location.href = 'index.php?act=manage_recr#v-pills-messages';</script>";
                    echo $thongbao;
                $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
                $corp = manageInfo($idcorp);
                extract($corp);
                $idcorp = $_SESSION['username']['id'];
                    $corp = manageInfo($idcorp);
                    extract($corp);
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
            
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
                include 'view/corp/manage.php';
                break;
            case 'edit_recr':
                
                if (isset($_GET['idEdit'])) {
                    $id = $_GET['idEdit'];
                    $value_id = recr_select_by_id($id);
                    
                }
                $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
                $corp = manageInfo($idcorp);
                extract($corp);
                $idcorp = $_SESSION['username']['id'];
                    $corp = manageInfo($idcorp);
                    extract($corp);
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
            
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
                include 'view/corp/manage.php';
                break;
            case 'up_recr':
        
                if (isset($_POST['submit'])) {
                    $job = $_POST['job'];
                    $idcorp = $_POST['idcorp'];
                    $id = $_POST['id'];
                    $request = $_POST['request'];
                    $type = $_POST['type'];
                    $progLang = $_POST['progLang'];
                    $salary = $_POST['salary'];
                    $exp = $_POST['exp'];
                    $level = $_POST['level'];
                    $request = $_POST['request'];
                    $description = $_POST['description'];
                    $end = $_POST['end'];
        
                    recr_update(
                        $id,
                        $idcorp,
                        $job,
                        $exp,
                        $level,
                        $salary,
                        $progLang,
                        $type,
                        $description,
                        $end,
                        $request
                    );
        
                    // include "view/corp/manage.php";
                    // include 'view/recr/editRecr.php';
                    $thongbao = "<script> alert('Bạn đã sửa thành công !');
                    location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
                    echo $thongbao;
                   
                }
                $perPage = 10;
        
                $valu_racr = get_records();
                $total_recr = get_Total_Records();
        
                include 'view/corp/manage.php';
                break;
        
            case 'delete_recr':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    recr_delete($id);
                    $thongbao = "<script> alert('Bạn đã XÓA thành công !');
                    location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
                    echo $thongbao;
                }
                
                $perPage = 10;
        
                
                $total_recr = get_Total_Records();
                $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
                $corp = manageInfo($idcorp);
                extract($corp);
                $idcorp = $_SESSION['username']['id'];
                    $corp = manageInfo($idcorp);
                    extract($corp);
                // Xử lí các thumbnail
                $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
                $gallery = gallery($arr);
            
                // Xử lí đoạn văn thành dòng
                $introPara = explode("\n", $introduce);
                $intro = paragToLines($introPara);
            
                $benePara = explode("\n", $benefits);
                $bene = paragToLines($benePara);
                include 'view/corp/manage.php';
                break;
                case 'signin':
                    if (isset($_POST['signin'])) {
                        $user = login($_POST['username'], $_POST['pass']);
                        // var_dump($user);
                        if (is_array($user)) {
                            $_SESSION['username'] = $user;
                            header('Location: index.php');
                            // echo "<script>alert('Login successful!');</script>";
                        } else {
                            echo "<script>alert('Sai mật khẩu hoặc tên tài khoản !');</script>";
                            include "view/user/signin.php";
                        }
                    }
                    include 'view/user/signin.php';
                    break;
            
                case 'signup':
            
                    if (isset($_POST['signup'])) {
            
                        $same = '';
                        $username = $_POST['username'];
                        $pass = $_POST['pass'];
                        $repass = $_POST['repass'];
                        $phone = $_POST['phone'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $role = $_POST['role'];
            
                        $exist = existAccount();
                        foreach ($exist as $key) {
                            $username === $key['username'] ? $same = '[ Tài khoản người dùng đã tòn tại ! ]' : '' ;
                            $phone === $key['phone'] || $email === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                            $name === $key['name'] ? $same = '[ Tên người dùng đã tòn tại ! ]' : '' ;
                        }
            
                        $pass !== $repass ? $same = '[ Mật khẩu không khớp ! ]' : ''; 
            
                        echo $same !== '' ? "<script>alert('$same');</script>" : '';
                        $same == '' ? header('Location: index.php?act=signin') : '';
                        $same == '' ? $_SESSION['signuped'] = 1 : '';
                        $same == '' ? add_user($username, $pass, $name, $email, $phone, $role) : '';
                    }
            
                    include "view/user/signup.php";
                    break;
                // case 'editinfo':
                //     if (isset($_POST['edit'])) {
            
                //         $name = $_POST['name'];
                //         $pass = $_POST['pass'];
                //         $phone = $_POST['phone'];
                //         $email = $_POST['email'];
                //         $address = $_POST['adress'];
                //         $role = $_POST['role'];
                //         $target_file = 'assets/uploads/' . $img;
                //         move_uploaded_file($image['tmp_name'], $target_file);
                //     }
                //     include 'view/user/editinfo.php';
                //     break;
                case 'forgotpass':
                    include 'view/user/forgotPass.php';
                    break;
                case 'signout':
                    unset($_SESSION['username']);
                    header('Location: index.php');
                    break;
                case 'contact':
                    include 'view/contact.php';
                    break;
            
                case 'about':
                    include 'view/about.php';
                    break;
            
                case 'privacy':
                    include 'view/privacy.php';
                    break;
    
    default:
        # code...
        break;
}