<section class="min-vh-100 bg-white p-3 rounded">
    <div class="container">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="?act=table&data=employee">Danh sách nhân sự</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=rank">Cấp bậc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=department">Phòng ban</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?act=table&data=team">Teams</a>
            </li>
        </ul>

        <?php
        include '../model/pdo.php';
        include '../model/employee.php';
        include '../model/rank.php';
        include '../model/department.php';
        include '../model/team.php';

        if (isset($_GET['data'])) {
            switch ($_GET['data']) {
                case 'employee':
                    $employees = getAllEmployees();
                    $ranks = getAllRanks();
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    include('employee.php');
                    break;
                case 'add_employee':
                    // echo 123;
                    // die;
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $employee_name = $_POST['employee_name'];
                        $employee_birthdate = $_POST['employee_birthdate'];
                        $start_date = $_POST['start_date'];
                        $employee_bio = $_POST['employee_bio'];
                        $job_title = $_POST['job_title'];
                        $department_id = $_POST['department_id'];
                        $team_id = $_POST['team_id'];
                        // addEmployee($employee_name, $employee_birthdate, $start_date, $employee_location, $employee_bio, $department_id, $team_id, $job_title);
                        include 'modals/addcontactinfomodal.php';
                        echo "<script>
                                var myModal = new bootstrap.Modal(document.getElementById('addcontactinfomodal'));
                                myModal.show();
                            </script>";
                    }
                    // echo '<meta http-equiv="refresh" content="0;url=?act=table&data=employee">';
                    break;
                case 'rank':
                    $ranks = getAllRanks();
                    include('rank.php');
                    break;
                case 'add_rank':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['name'];
                        $description = $_POST['description'];
                        addRank($name, $description);
                    }
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'edit_rank':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $id = $_GET['id'];
                        $name = $_POST['rank_name'];
                        $description = $_POST['rank_desc'];
                        updateRank($id, $name, $description);
                    }
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'delete_rank':
                    $id = $_GET['id'];
                    deleteRank($id);
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=rank">';
                    break;
                case 'department':
                    $departments = getAllDepartments();
                    $teams = getAllTeams();
                    $employees = getAllEmployees();
                    include('department.php');
                    break;
                case 'add_department':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['department_name'];
                        $manager_id = $_POST['manager_id'];
                        $description = $_POST['department_desc'];
                        echo $name . $manager_id . $description;
                        addDepartment($name, $manager_id, $description);
                    }
                    echo '<meta http-equiv="refresh" content="0;url=?act=table&data=department">';
                    break;
                case 'team':
                    $teams = getAllTeams();
                    $departments = getAllDepartments();
                    $employees = getAllEmployees();
                    // var_dump($teams);
                    include('team.php');
                    break;
                default:
                    include('employee.php');
                    break;
            }
        } else {
            include('employee.php');
        }
        ?>
    </div>
</section>
<script>
    const selectAllCheckboxes = document.querySelector('.select-all-checkboxes');
    const checkboxes = document.querySelectorAll('input[name="checkbox"]');
    selectAllCheckboxes.addEventListener('change', function() {
        if (this.checked) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            })
        } else {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            })
        }
    })
</script>