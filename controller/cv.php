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
        $level = $_POST['level'] ?? '';
        $age = $_POST['age'] ?? '';
        $major = $_POST['major'] ?? '';
        $exp = $_POST['exp'] ?? '';
        $address = $_POST['address'] ?? '';
        $salary = $_POST['salary'] ?? '';
        $progLang = $_POST['progLang'] ?? '';

        $list_cv = list_cv($level, $age, $major, $exp, $salary, $address, $progLang);
        include 'view/cv/listCv.php';
        break;

        case 'manage_Cv':
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $cvData = [
                        $gender => $_POST['cv_gender'],
                        $birth => $_POST['cv_birth'],
                        $salary => $_POST['cv_salary'],
                        $major => $_POST['cv_major'],
                        $introduce => $_POST['cv_introduce']
                    ];
        
                    $degreeData = [
                        $name => $_POST['degree_name'],
                        $school => $_POST['degree_school'],
                        $year => $_POST['degree_year']
                    ];
        
                    $expData = [
                        $level => $_POST['experience_level'],
                        $job => $_POST['experience_job'],
                        $corp => $_POST['experience_corp'],
                        $start => $_POST['experience_start'],
                        $end => $_POST['experience_end']
                    ];
        
                    $skillData = [
                        $progLang => $_POST['skill_progLang'],
                        $percent => $_POST['skill_percent']
                    ];
        
                    updateAllInfo($cvData, $degreeData, $expData, $skillData);
                }
                include 'view/cv/manage_Cv.php'; // Create a new view file for adding CV
                break;

    // case 'updateAllInfo':
    //     if (isset($_GET['idcv']) && ($_GET['idcv'] > 0)) {
    //         $idcv = $_GET['idcv'];
    //     }
    //     if (isset($_POST['submit'])) {
    //         $id = $_POST['id'];

    //         $cvData = [
    //             'id' => $_POST['cv_id'],
    //             'gender' => $_POST['cv_gender'],
    //             'birth' => $_POST['cv_birth'],
    //             'salary' => $_POST['cv_salary'],
    //             'major' => $_POST['cv_major'],
    //             'introduce' => $_POST['cv_introduce']
    //         ];

    //         $degreeData = [
    //             'id' => $_POST['degree_id'],
    //             'name' => $_POST['degree_name'],
    //             'school' => $_POST['degree_school'],
    //             'year' => $_POST['degree_year']
    //         ];

    //         $expData = [
    //             'id' => $_POST['experience_id'],
    //             'level' => $_POST['experience_level'],
    //             'job' => $_POST['experience_job'],
    //             'corp' => $_POST['experience_corp'],
    //             'start' => $_POST['experience_start'],
    //             'end' => $_POST['experience_end']
    //         ];

    //         $skillData = [
    //             'id' => $_POST['skill_id'],
    //             'progLang' => $_POST['skill_progLang'],
    //             'percent' => $_POST['skill_percent']
    //         ];

    //         updateAllInfo($cvData, $degreeData, $expData, $skillData);
    //     }
    //     include 'view/cv/updateCv.php';
    //     break;

    default:
        // Default case
        break;
}
?>
