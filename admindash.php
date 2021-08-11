<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span>Team-33</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>Overall Performance</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>Codechef</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>codeforces</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>Hackerrank</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>Hackerearth</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            
                <h2>
                    <label for="">
                    <span class="las la-bars"></span>    
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here">
                </div>
                <div class="user-wrapper">
                    <img src="user.png" alt="user" width="30px" height="30px">
                    <div>
                        <h4>Ruchi</h4>
                        <small>Admin</small>

                    </div>
                </div>

        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Total students</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>1</h1>
                        <span>Active Students</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>1</h1>
                        <span>Recent Active Students</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
            <br>
            <br>
            
            
            <div>
                <br>
                <br><h1 style="color:blue;">Student_Performance</h2><hr>
                <br>
            <?php
                include('simple_html_dom.php');

                $html = file_get_html('http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=student_db&table=admin-student&pos=0');
                echo $html->find('div.table-responsive-md',0)->innertext;




                ?>
            </div>
            
            
        </main>
    </div>
    

</body>
</html>