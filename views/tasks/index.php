<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>

        <?php if (isset($_SESSION['success'])) { ?>
            <div class='alert alert-success' style='margin: 5px 20px'>
                <?php echo $_SESSION['success'] ?>
            </div>
        <?php } ?>

        <script>
            setTimeout(function () {
                <?php  unset($_SESSION['success']); ?>
            }, 3000);
        </script>

        <div class='col-md-6'>
            <h2 style='margin: 10px 0 0 10px'>Tasks</h2>
        </div>
        <div class='col-md-6'>
            <a class='btn btn-default btn-sm' type='button' style='float:right; margin: 16px'
               href='http://todolist.test/tasks/create'>Create new task</a>
        </div>
    </div>

    <nav class='navbar-collapse collapse'>
        <table id='table_id' class='display'>
            <thead>
            <tr>
                <th>Tilte</th>
                <th>Email</th>
                <th>Created by admin</th>
                <th>Edited by admin</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($viewData as $task) {
            ?>
            <tr>
                <td> <?php print_r($task['1']); ?></td>
                <td> <?php echo($task['2']); ?></td>
                <td>
                    <?php
                    if ($task['4'] == 4) {
                        echo "<span class='glyphicon glyphicon-ok' style='width: 20px;'></span>";
                    }
                    ?>
                </td>

                <td>
                    <?php if($task['5'] == 1){
                        echo "<span class='glyphicon glyphicon-ok' style='width: 20px;'></span>";
                    }  ?>
                </td>

                <td>
                    <?php if (isset($_SESSION['auth']) && (new User())->isAdmin()){ ?>
                    <a class='btn btn-default btn-sm'
                       href=" http://todolist.test/tasks/<?php echo $task['0']; ?>/edit" >
                       Edit
                    </a> <?php } elseif(!isset($_SESSION['auth'])) { ?>
                        <a class='btn btn-default btn-sm'
                           href='http://todolist.test/users/login' >
                            Edit
                        </a>
                    <?php } else { ?>
                        <a class='btn btn-default btn-sm'
                           href='http://todolist.test/tasks/index' >
                            Edit
                        </a>
                    <?php } ?>

                    <a class='btn btn-default btn-sm'
                       href='http://todolist.test/tasks/<?php echo $task['0'] ?>/show'
                       style='color: black;'>
                        Show
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </nav>
</div>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });

        $('#table_id').DataTable({
            'lengthMenu': [3, 5, 10, 20]
        });
    </script>

<?php include __DIR__ . '/../footer.php'; ?>