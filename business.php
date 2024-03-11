<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tasks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 1000px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="<?php echo 'task.php'; ?>">Task</a></li>
                    <li><a href="<?php echo 'timer.php'; ?>">Pomodoro</a></li>
                    <li><a href="#">Work Plan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Logo</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?php echo 'home.php'; ?>">Dashboard</a></li>
                    <li><a href="<?php echo 'task.php'; ?>">Tasks</a></li>
                    <li><a href="<?php echo 'timer.php'; ?>">Pomodoro</a></li>
                    <li class="active"><a href="<?php echo 'workplan.php'; ?>">Work Plan</a></li>
                </ul><br>
            </div>
            <br>
            /* Code content Here */
            <!-- Code content Here -->
        </div>
    </div>
</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>© <?php echo date("Y"); ?> Bakhombisile Dlamini Task Tracker. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</html>