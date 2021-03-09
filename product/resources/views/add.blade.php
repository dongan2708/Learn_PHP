<?php
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop Store</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    {{--    CSS-Javascript--}}
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        {{--            Navbar Contents--}}
    </nav>
</div>
@yield('content');
</body>
</html>
