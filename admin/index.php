<?php
session_start();
include_once("../includes/config.php");
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Visitors Data</h1>
            <p class="lead">You can view all users data in this page.</p>
        </div>
    </div>
    <div class="container">

        <div class="table-container table-responsive">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Visitor IP</th>
                        <th scope="col">Page</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">HTTP User Agent</th>
                        <th scope="col">HTTP Referer</th>
                        <th scope="col">HTTP Accept</th>
                        <th scope="col">HTTP Accept Encoding</th>
                        <th scope="col">HTTP Accept Language</th>
                        <th scope="col">HTTP Sec Fetch Site</th>
                        <th scope="col">HTTP User Sec Fetch Mode</th>
                        <th scope="col">HTTP User Sec Fetch User</th>
                        <th scope="col">HTTP User Sec Fetch Dest</th>
                        <th scope="col">HTTP Sec CH UA</th>
                        <th scope="col">HTTP Sec CH UA Mobile</th>
                        <th scope="col">Device Screen Resolution</th>
                        <th scope="col">Button Clicked Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT * FROM visitors_data ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $visitor_ip = $row['vistor_ip'];
                            $page = $row['page'];
                            $timestamp = $row['timestamp'];
                            $http_user_agent = $row['http_user_agent'];
                            $http_referer = $row['http_referer'];
                            $http_accept = $row['http_accept'];
                            $http_accept_encoding = $row['http_accept_encoding'];
                            $http_accept_language = $row['http_accept_language'];
                            $http_sec_fetch_site = $row['http_sec_fetch_site'];
                            $http_sec_fetch_mode = $row['http_sec_fetch_mode'];
                            $http_sec_fetch_user = $row['http_sec_fetch_user'];
                            $http_sec_fetch_dest = $row['http_sec_fetch_dest'];
                            $http_sec_ch_ua = $row['http_sec_ch_ua'];
                            $http_sec_ch_ua_mobile = $row['http_sec_ch_ua_mobile'];
                            $device_screen_resolution = $row['device_screen_resolution'];
                            $button_clicked_count = $row['button_clicked_count'];

                            ?>

                    <tr>        
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $visitor_ip; ?></td>
                        <td><?php echo $page; ?></td>
                        <td><?php echo $timestamp; ?></td>
                        <td><?php echo $http_user_agent; ?></td>
                        <td><?php echo $http_referer; ?></td>
                        <td><?php echo $http_accept; ?></td>
                        <td><?php echo $http_accept_encoding; ?></td>
                        <td><?php echo $http_accept_language; ?></td>
                        <td><?php echo $http_sec_fetch_site; ?></td>
                        <td><?php echo $http_sec_fetch_mode; ?></td>
                        <td><?php echo $http_sec_fetch_user; ?></td>
                        <td><?php echo $http_sec_fetch_dest; ?></td>
                        <td><?php echo $http_sec_ch_ua; ?></td>
                        <td><?php echo $http_sec_ch_ua_mobile; ?></td>
                        <td><?php echo $device_screen_resolution; ?></td>
                        <td><?php echo $button_clicked_count; ?></td>
                    </tr>


                            <?php
                            $i++;
                        }


                    ?>
                  
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>