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
                    <span>My Performance</span></a>
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
                        <small>Student</small>

                    </div>
                </div>

        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Contests</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>3</h1>
                        <span>Attempted</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>total</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
            <br>
            <br>
            
            <section class="rating-graphs rating-data-section">
                <h1 style="color:blue;">CodeChef</h1><hr>
                <br>
                
                <ul class="tabs mt20" data-tab role="tablist">
                  <li class="tab-title active" role="presentation"><a href="#cumulative" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">CodeChef</a></li>
                  <li class="tab-title" role="presentation"><a href="#long-challenge" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2"><h3>Long Challenge</h3></a></li>
                  <li class="tab-title" role="presentation"><a href="#cook-off" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-3"><h3>Cook Off</h3></a></li>
                  <li class="tab-title" role="presentation"><a href="#lunch-time" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-4"><h3>Lunch Time</h3></a></li>
                </ul><!--.tabs-->
        
                <div class="tabs-content">
                  <section role="tabpanel" aria-hidden="false" class="content active" id="cumulative">
                    <div class='rank-stats'><div class='left' style='background-color: #1E7D22'><div class='rating-container'><a href='https://www.codechef.com/ratings/all' class='rating'>1460 (<span class='rating-difference'>+97</span>)</a><small>Rating</small></div></div><div class='left'><div class='contest-name'><a href='https://www.codechef.com/START6C'>CodeChef Starters 6 Division 3 (Rated)</a><span class='time'>(2021-07-24 17:00:00)</span></div><div><small>Global Rank:</small>&nbsp;&nbsp;&nbsp;<strong class='global-rank'>2151</strong></div><div style = 'display: none'><small>Plagiarised in:</small>&nbsp;&nbsp;&nbsp;<strong class='cheated-contest'></strong></div></div></div>                <div id="cumulative-graph" class="ml-10"></div>
                  </section><!--#cumulative-->
        
                  <section role="tabpanel" aria-hidden="true" class="content" id="long-challenge">
                    <div class='rank-stats'><div class='left' style='background-color: #666666'><div class='rating-container'><a href='https://www.codechef.com/ratings/long-challenge' class='rating'>1397 (<span class='rating-difference'>-52</span>)</a><small>Rating</small></div></div><div class='left'><div class='contest-name'><a href='https://www.codechef.com/JUNE21C'>June Challenge 2021 Division 3 (Rated)</a><span class='time'>(2021-06-14 15:00:00)</span></div><div><small>Global Rank:</small>&nbsp;&nbsp;&nbsp;<strong class='global-rank'>19865</strong></div><div style = 'display: none'><small>Plagiarised in:</small>&nbsp;&nbsp;&nbsp;<strong class='cheated-contest'></strong></div></div></div>                <div id="long-challenge-graph" class="ml-10"></div>
                  </section>
        
                  <section role="tabpanel" aria-hidden="true" class="content" id="cook-off">
                    <div class='rank-stats'><div class='left' style='background-color: #1E7D22'><div class='rating-container'><a href='https://www.codechef.com/ratings/cook-off' class='rating'>1420 (<span class='rating-difference'>-64</span>)</a><small>Rating</small></div></div><div class='left'><div class='contest-name'><a href='https://www.codechef.com/COOK130C'>June Cook-Off 2021 Division 3</a><span class='time'>(2021-06-21 00:15:04)</span></div><div><small>Global Rank:</small>&nbsp;&nbsp;&nbsp;<strong class='global-rank'>7630</strong></div><div style = 'display: none'><small>Plagiarised in:</small>&nbsp;&nbsp;&nbsp;<strong class='cheated-contest'></strong></div></div></div>                <div id="cook-off-graph" class="ml-10"></div>
                  </section>
        
                  <section role="tabpanel" aria-hidden="true" class="content" id="lunch-time">
                    <div class='rank-stats'><div class='left' style='background-color: #1E7D22'><div class='rating-container'><a href='https://www.codechef.com/ratings/lunch-time-all' class='rating'>1434 (<span class='rating-difference'>+6</span>)</a><small>Rating</small></div></div><div class='left'><div class='contest-name'><a href='https://www.codechef.com/LTIME95C'>April Lunchtime 2021 Division 3</a><span class='time'>(2021-04-30 22:30:04)</span></div><div><small>Global Rank:</small>&nbsp;&nbsp;&nbsp;<strong class='global-rank'>6693</strong></div><div style = 'display: none'><small>Plagiarised in:</small>&nbsp;&nbsp;&nbsp;<strong class='cheated-contest'></strong></div></div></div>                <div id="lunch-time-graph" class="ml-10"></div>
                  </section>
                </div><!--.tabs-content-->
              
            
            
            <div>
                <br>
                <br><h1 style="color:blue;">codeforces</h2><hr>
                <br>
                <?php
                
                include('simple_html_dom.php');
                $html1 = file_get_html('http://codeforces.com/profile/ruchidanepalli');
                echo $html1->find('div.info',0)->innertext;
                 ?>
            </div>
            <br>
            <section>
            <div>
                <br>
                <br><h1 style="color:blue;">Top_Performancers</h2><hr>
                <br>
                <?php
                

                $html = file_get_html('http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=student_db&table=admin-student&pos=0');
                echo $html->find('div.table-responsive-md',0)->innertext;
                ?>
            </div>
                    </section>  
            

        </main>
    </div>
    

</body>
</html>