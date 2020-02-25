<?php include __DIR__ . '/../header.php'; ?>

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
                <h2>Title:  <?php print_r(ucfirst($viewData[1])) ?> </h2>
                <h4>Email: <?php print_r($viewData[2]) ?></h4>
                <hr class='my-4'>
                <h3 class='display-6'><?php print_r(ucfirst($viewData[3])) ?></h3>
                <a class='btn btn-default' href='http://todolist.test/tasks/index' role='button'>Back</a>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>

