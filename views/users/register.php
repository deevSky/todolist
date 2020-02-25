<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>

        <!--        If fields are empty ->  alert -->
        <?php if (isset($_SESSION['register_error'])) {
            echo "<div class='alert alert-danger' style='margin: 5px 20px'>" . $_SESSION['register_error'] . "</div>";
        } ?>

        <!--        Delete alert-->
        <script>
            setTimeout(function () {
                <?php  unset($_SESSION['register_error']); ?>
            }, 3000);
        </script>

        <div class='col-md-3'>
            <h2 class='w-25 m-auto pt-5'>Registration form</h2>
            <form method='post' class='w-25 m-auto pt-3'>
                <div class='form-group'>
                    <label for='usr'>User name</label>
                    <input type='text' name='username' class='form-control' id='usr'>
                </div>

                <div class='form-group'>
                    <label for='pwd'>Password</label>
                    <input type='password' name='password' class='form-control' id='pwd'>
                </div>

                <div class='form-group'>
                    <button type='submit' name='register' class='btn btn-default '>Sign in</button>
                    <a style='color: #333333' class='btn btn-default ml-2'
                       href='http://todolist.test/tasks/index'>Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>

