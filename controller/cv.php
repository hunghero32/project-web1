
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
            $intro = paragToLines($introPara); }
    
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
    // update thằng CV
                    $id = checkUpdate($_POST['cv_id']);
                    $gender = checkUpdate($_POST['cv_gender']);
                    $birth = checkUpdate($_POST['cv_birth']);
                    $salary = checkUpdate($_POST['cv_salary']);
                    $major = checkUpdate($_POST['cv_major']);
                    $introduce = checkUpdate($_POST['cv_introduce']);
    // update thằng giáo dục
                    $name = checkUpdate($_POST['degree_name']);
                    $school = checkUpdate($_POST['degree_school']);
                    $year = checkUpdate($_POST['degree_year']);
    //update thằng kinh nghiệm
                    $level = checkUpdate($_POST['experience_level']);
                    $job = checkUpdate($_POST['experience_job']);
                    $corp = checkUpdate($_POST['experience_corp']);
                    $start = checkUpdate($_POST['experience_start']);
                    $end = checkUpdate($_POST['experience_end']);
    // update thằng kỹ năng 
                    $progLang = checkUpdate($_POST['skill_progLang']);
                    $percent = checkUpdate($_POST['skill_percent']);
    
                updateAllInfo($cvData, $degreeData, $expData, $skillData);
            }
            include 'view/cv/updateCv.php';
            break;
    
        default:
            // Default case
            break;
    }