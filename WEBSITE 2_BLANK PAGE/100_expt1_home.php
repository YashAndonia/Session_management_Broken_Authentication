<!doctype html>
<html lang="en-us">
 <head>
   <meta charset="utf-8">
   <title>BlankPage</title>
   <link rel="stylesheet" type="text/css" href="100_denver_expt3_home.css">
 </head>
 <body>
  <div id="pagewrapper">
    <?php
    require 'common.php';
/*  if (!isset($_SESSION['email'])){
      header('location:100_denver_expt2_signup.php');
    }
*/
    ?>

      <div class="navbar">
    <div class ="header">
      <h2>BlankPage<span><?php echo" welcome ".$_SESSION['email']?></span></h2>
    </div>

    <a href="#Stories">Stories</a>
    <a href="#Poems">Poems</a>
    <a href="#Quotes">Quotes</a>
    <div class="dropdown">
      <button class="dropbtn">Settings
      </button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="#">Upload</a>
        <a href="#">About</a>
        <a href ="logout.php">Logout</a>
      </div>
    </div>
  </div>
  <hr id ="Stories" width="5px">
  <div class="stories">
    <h2 text-align="center">How I met your Mother</h2>
    <pre>
      Kids I am gonna tell you an incredible story.
      The story of how I met your mother.
      .
      And that is the story of how I met your Aunt Robin.
      .
      .
      .[10 seasons. . .]
      Right from the moment I met your mom I knew I have to
      love this woman for as much as I can for as long as I
      can and I can never stop loving her not even for a
      second.
     </pre>
</div>
<hr id ="Poems"width="5px">
<div class ="poems">
  <h2 text-align="center">Learning on the Run</h2>
  <pre>
    I spent my life running from things that would eventually cause me pain
    Only to stop when my life ceased to tear apart
    it seemed right that the only solution would be
    to steer clear from the matters that concerned my heart

    And as the distance grew great with every passing day
    I gathered courage to stop and look behind
    Expecting to relive the wounds that once bled tears
    Faint scars was all i could find

    The running had  worked
    Things no longer brought me pain
    It was time to stop running
    And rebuild my life again

    And so I built walls one brick at a time
    they looked promising to never cave in whatever come by
    And after it was done soon would I know
    The security achieved was always a lie

    There was no joy nor was there happiness
    Suffocating within the walls I found the cause
    Running away from pain,creating a life void of emotions
    I had carried the bricks of my past and built the same house.
    </pre>
</div>
<hr id ="Quotes" width="5px">
<div class="quotes">
  <pre>
    Darkness cannot drive out darkness;only light can do that.
    Hate cannot drive out hate:only love can do that.
                                       -Martin Luther King Jr.
  </pre>
</div>
<div class="quotes">
  <pre>
    Light thinks it travels faster than anything but it is wrong.
    No matter how fast Light travels,it finds the darkness has
    always got there first and is waiting for it.
                                      -Terry Pratchet.
  </pre>
</div>
<div class="quotes">
  <pre>
    What makes night within us may leave stars
                                     -Victor Hugo.
  </pre>
</div>
</div>

  <div class ="footer">
    created by Denver Pinto-1614100
  </div>
 </body>
</html>
