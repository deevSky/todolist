<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>

        <h2 style='margin-left: 15px'>Edit task</h2>

        <div class='col-md-6'>
            <form method='POST' class='w-50  ml-5' action='http://todolist.test/tasks/<?php echo $viewData[0] ?>/update'>
                <div class='form-group'>
                    <label for='formGroupExampleInput'>Title:</label>
                    <input type='text' name='title' value='<?php print_r($viewData[1]) ?>' class='form-control'
                           id='formGroupExampleInput'>
                </div>

                <div class='form-group'>
                    <label for='formGroupExampleInput2'>Email:</label>
                    <input type='text' name='email' value='<?php print_r($viewData[2]) ?>' class='form-control'
                           id='formGroupExampleInput2'>
                </div>

                <div class='form-group'>
                    <label for='formGroupExampleInput'>Text:</label>
                    <input type='text' name='text' value='<?php print_r($viewData[3]) ?>' class='form-control'
                           id='formGroupExampleInput'>
                </div>

                <button class='btn btn-default btn-sm' type='submit' name='update'>Edit</button>
                <a class='btn btn-default btn-sm' href='http://todolist.test/tasks/index' role='button'>Back</a>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>

