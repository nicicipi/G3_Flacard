<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flacard</title>
    <link rel="stylesheet" type="text/css" href="styleLayout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section>
        <div class="home-create">
        <h1><a class="home-menu" href="index.php">Home</a></h1>
        <h1><a class="create-menu" href="#">Create</a></h1>
        </div>
        <div class="width-find">
        <input class="find-bar" type="text" placeholder="Find...">
        </div>
        <p></p>
    
        <div class="card">
            <div class="margin-card">
                <div class="vid-info">
                    <p class="title">Lesson 2: Biology</p>
                    <button class="star"><span class="material-symbols-outlined">star</span></button>
                </div>
                <div class="idk">
                <div class="profile">
                    <img class="profile-pic" src="profile.jpeg">
                </div>
                <div class="column2">
                <p class="author">Nicole Clemente</p>
                <p class="stats">3.4k views &#183; a week ago</p>
                </div>
            </div>
        </div>
        </div>

        <div class="card">
            <div class="margin-card">
                <div class="vid-info">
                    <p class="title">Lesson 8: Ruby</p>
                    <button class="star"><span class="material-symbols-outlined">star</span></button>
                </div>
                <div class="idk">
                <div class="profile">
                    <img class="profile-pic" src="profile.jpeg">
                </div>
                <div class="column2">
                <p class="author">Nicole Clemente</p>
                <p class="stats">2 views &#183; 2 months ago</p>
                </div>
            </div>
        </div>
        </div>

</section>

    <script type="text/javascript">
        var lastScrollTop=0;
            navbar=document.getElementById("navbar");
        window.addEventListener("scroll", function(){
            var scrollTop=window.pageYOffset || document.documentElement.scrollTop;
            if(scrollTop>lastScrollTop){
                navbar.style.top="-80px";
            }else{
                navbar.style.top="0";
            }
            lastScrollTop=scrollTop;
        })


    </script>

</body>

</html>
