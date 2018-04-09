<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecademy - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="scss/style.css" />
<link href="css/fontawesome-all.min.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="gridContainer">

        <header class="gridContainer__div grundfosHeader">
            <p>Test</p>
        </header>

        <div class="gridContainer__div leftNavMenu">
            <a href="index.php" class="leftNavMenu__a"><i class="fas fa-home"></i> Home</a>
            <a href="users.php" class="leftNavMenu__a"><i class="fas fa-user"></i> Users</a>
            <a href="rewards.php" class="leftNavMenu__a"><i class="fas fa-gift"></i> Rewards</a>
            <a href="diplomas.php" class="leftNavMenu__a"><i class="fas fa-clipboard-check"></i> Diplomas</a>
        </div>

        <div class="gridContainer__div mainContent">
            <article class="intro">
                <h1>Welcome to Ecademy</h1>
                <p>You're logged in as <strong>Erhvervsakademi Aarhus</strong>.</p>
            </article>
            <article class="intro-banner">
                <h2>Share your latest achievements on LinkedIn</h2>
                <p><strong>Erhvervsakademi Aarhus</strong> has unlocked the diploma <strong>Commercial Buildings</strong>.<br/>
                Do you want to share this with your network?<br/>
                
                <a href="http://www.linkedin.com"><img src="img/linkedin-share.png" alt="Share on LinkedIn" class="linkedIn"></a>
                </p>
            </article>
            <section class="stats">
                <article class="stats__overview">
                    <h3>Overview</h3>
                    <ul>
                        <li><i class="fas fa-gift"></i> <span class="highlighted-data">12.501</span> Points</li>
                        <li><i class="fas fa-user"></i> <span class="highlighted-data">4</span>  Employees</li>
                        <li><i class="fas fa-clipboard-check"></i> <span class="highlighted-data">7</span> Unlocked Diplomas<br/></li>
                    </ul>
                </article>
                <article class="stats__diplomaProgress">
                    <h3>Diploma Progress</h3>
                    <p class="diploma-name">Municipal Wastewater</p>
                    <div class="diploma-container">
                    	<div class="diplomaRequirement municipalWastewater"><i class="fas fa-user"></i> 2 / 4</div>
                    </div>
                    <p class="diploma-name">Commercial Buildings</p>
                    <div class="diploma-container">
                    	<div class="diplomaRequirement commercialBuildings"><i class="fas fa-user"></i> 3 / 4</div>
                    </div>
                    <p class="diploma-name">Industry</p>
                    <div class="diploma-container">
                    	<div class="diplomaRequirement"><i class="fas fa-user"></i> 4 / 4</div>
                    </div>
                </article>
            </section>
            <section class="activityFeed">
                <h3>Recent Activity</h3>
                <ul>
                    <li><i class="fas fa-user"></i> <strong>Lukas Brøndel</strong> finished the task <strong>Life Cycle Costs</strong>.<br/><small>April 4, 2018</small></li>
                    <li><i class="fas fa-clipboard-check"></i> <strong>Erhvervsakademi Aarhus</strong> has unlocked the diploma <strong>Industry</strong>.<br/><small>April 1, 2018</small></li>
                    <li><i class="fas fa-user"></i> <strong>Alexander Brasgaard</strong> has been added to <strong>Erhvervsakademi Aarhus</strong>.<br/><small>March 27, 2018</small></li>
                </ul>
            </section>
        </div>

        <footer class="gridContainer__div grundfosFooter">
            <p>Test</p>
        </footer>

    </div>
</body>
</html>