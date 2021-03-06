<!DOCTYPE html>
<html>
<head>
    <title>Grundfos Ecademy - Home</title>
    <?php include 'include/head.php';?>
</head>
<body>
    <div class="gridContainer">

        <?php include 'include/header.php';?>
        
        <?php include 'include/navigation.php';?>

        <div class="gridContainer__div mainContent">
            <article class="intro">
                <h1>Welcome to Ecademy</h1>
                <p>You're logged in as <strong>Erhvervsakademi Aarhus</strong>.</p>
            </article>
            <article class="intro-banner">
                <h2>Share your latest achievements on LinkedIn</h2>
                <p><strong>Erhvervsakademi Aarhus</strong> has unlocked the diploma <strong>Commercial Buildings</strong>.<br/>
                Do you want to share this with your network?<br/>
                
                <a href="#" target="_blank"><button style="float: right;" class="linkedinbtn" type="button"><i class="fab fa-linkedin"></i> Share</button></a>

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
                    	<div class="diplomaRequirement"><i class="fas fa-user"></i> 4 / 4</div>
                    </div>
                    <p class="diploma-name">Commercial Buildings</p>
                    <div class="diploma-container">
                    	<div class="diplomaRequirement commercialBuildings"><i class="fas fa-user"></i> 3 / 4</div>
                    </div>
                    <p class="diploma-name">Industry</p>
                    <div class="diploma-container">
                    	<div class="diplomaRequirement industry"><i class="fas fa-user"></i> 2 / 4</div>
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

        <?php include 'include/footer.php';?>

    </div>
</body>
</html>