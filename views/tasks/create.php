<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>

        <!--        //Alert if fields of create are empty-->
        <?php if (isset($_SESSION['create_error'])) {
            echo "<div class='alert alert-danger' style='margin: 5px 20px'>" . $_SESSION['create_error'] . "</div>";
        } ?>

        <script>
            setTimeout(function () {
                <?php  unset($_SESSION['create_error']); ?>
            }, 3000);
        </script>

        <div class='col-md-6'>
            <h2 class='w-50 m-auto pt-5 task'>Create new task </h2>
            <form method='post' action='http://todolist.test/tasks/save'>
                <div class='form-group'>
                    <label>Title:</label>
                    <input type='text' class='form-control mt-2' name='title'
                           placeholder='Title'>
                </div>

                <div class='form-group'>
                    <label>Email:</label>
                    <input type='email' class='form-control mt-2' name='email'
                           placeholder='Email'>
                </div>

                <div class='form-group'>
                    <label>Text:</label>
                    <textarea class='form-control' rows='5' name='text'></textarea>
                </div>

                <div class='form-group'>
                    <button type='submit' class='btn btn-default' name='add'>Add</button>
                    <a class='btn btn-default ml-2' style='color: #333333'
                       href='http://todolist.test/tasks/index'>Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>


