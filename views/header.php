<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script type='text/javascript' charset='utf8'
            src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js'></script>
    <link rel='stylesheet' type='text/css'
          href='https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0,dt-1.10.11,cr-1.3.1,r-2.0.2/datatables.min.css'>
    <script type='text/javascript'
            src='https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0,dt-1.10.11,cr-1.3.1,r-2.0.2/datatables.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../main.css' type='text/css'>
    <title>ToDoList</title>

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0;
            margin-left: 0;
            display: inline;
            border: 0;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            border: 0;
        }

        .pagination > li > a, .pagination > li > span {
            background-color: #ffffff
        }

        .pagination > li.active > a, .pagination > li.active > span {
            background-color: #343434
        }
    </style>
</head>
<body style='background: #ededdc'>

<?php include __DIR__ . '/navbar.php'; ?>

<div style='height: 100vh'>
