<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">E-Learning</a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="pic-1.jpg" class="image" alt="">
         <h3 class="name">Kitty W.Goss</h3>
         <p class="role">studen</p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="pic-1.jpg" class="image" alt="">
      <h3 class="name">Kitty W.Goss</h3>
      <p class="role">studen</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">Our Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="pic-2.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete HTML Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-3.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete CSS Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-4.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete JS Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-5.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete Boostrap Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-6.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete JQuery Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-7.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete SASS Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-8.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-7.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete PHP Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-9.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-8.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete MySQL Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="pic-1.jpg" alt="">
            <div class="info">
               <h3>John Deo</h3>
               <span>13-02-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="thumb-9.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete React Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

   </div>

</section>














<footer class="footer">

   &copy; copyright @ 2024 by <span>Kalyani Borase</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="script.js"></script>

   
</body>
</html>