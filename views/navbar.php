<nav class='navbar navbar-inverse' style='border-radius: unset; margin-bottom: 0'>
    <div class='container-fluid'>
        <div class='navbar-header'>
            <a class='navbar-brand' href='http://todolist.test/'>To Do List</a>
        </div>

        <ul class='nav navbar-nav'>
            <li>
                <a href='http://todolist.test/tasks/index'>tasks</a>
            </li>
        </ul>

        <ul class='nav navbar-nav navbar-right'>
            <li style='margin-top: 16px; color: #9D9D8D'>
                <?php if (isset($_SESSION['auth'])) { ?>
                <span>
                    <?php echo ucfirst((new User())->authUser()['name']) . ' :' ?>
                </span>
            </li>
            <li>
                <form action='http://todolist.test/users/logout' method='POST'>
                    <button class='btn' type='submit' style='margin-top: 10px; background: #222222; '>
                        <span class='glyphicon glyphicon-log-in' style='color: #9D9D8D'></span>
                        <span style='margin-top: 15px; color: #9D9D8D'> Logout </span>
                    </button>
                </form>
            </li>

            <?php } else { ?>
                <li>
                    <a href='http://todolist.test/users/register'>
                        <span class='glyphicon glyphicon-log-in'></span>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href='http://todolist.test/users/login'>
                        <span class='glyphicon glyphicon-user'></span>
                        Login
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>