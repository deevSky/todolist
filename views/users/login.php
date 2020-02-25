<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>

        <?php if (isset($_SESSION['login_error'])) {
            echo "<div class='alert alert-danger'  style='margin: 5px 20px'>"
                . $_SESSION['login_error'] .
                "</div>";
        } ?>

        <script>
            setTimeout(function () {
                <?php  unset($_SESSION['login_error']); ?>
            }, 3000);
        </script>

        <div class='col-md-3'>
            <h2 class='w-25 m-auto pt-5'>Login form</h2>
            <form method='POST' class='w-25 m-auto pt-3' action='http://todolist.test/users/checkLogin'>
                <div class='form-group'>
                    <label for='user_name' class='col-form-label'>User name</label>
                    <input type='text' class='form-control' name='user_name' id='user_name'>
                </div>

                <div class='form-group'>
                    <label for='password' class='col-form-label'>Password</label>
                    <input type='password' class='form-control' name='password' id='password'>
                </div>

                <div class='form-group'>
                    <button type='submit' name='login' class='btn btn-default'>Login</button>
                    <a class='btn btn-default ml-2' style='color: #333333'
                       href='http://todolist.test/tasks/index'>Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>

