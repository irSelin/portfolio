<?php include("includes/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Isabel Selin</title>

  <link rel="stylesheet" type="text/css" href="styles/site.css" media="all" />
</head>

<body>
  <header>
    <h1>Isabel Selin</h1>
    <nav>
      <ul class="flexbox" id="nav-menu">
        <li class="flex-item"> <a href="#about">About</a> </li>
        <li class="flex-item"> <a href="#skills">Skills</a> </li>
        <li class="flex-item"> <a href="#experience">Experience</a> </li>
        <li class="flex-item"> <a href="#contact">Contact</a> </li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="about" class="flexbox">
      <img class="flex-item"
        src="images/id-photo.jpeg"
        alt="ID photo"
        width="433"
        height="433"/>
      <div class="flex-item">
        <h1>About Me</h1>
        <p><?php include("includes/about_me.php"); ?></p>
      </div>
    </section>

    <section id="skills">
      <h1>Skills</h1>
      <div class="flexbox"> <?php include("includes/skills.php"); ?> <div>
    </section>

    <section id="experience">
      <h1>Experience</h1>
      <?php include("includes/experience.php"); ?>
    </section>

    <section id="contact">
      <h1>Contact Information</h1>
      <ul>
        <li>
          <strong>Email:</strong>
          <a href="mailto: isabelselin@gmail.com">isabelselin@gmail.com</a>
        </li>
        <li>
          <strong>Linkedin:</strong>
          <a href="https://www.linkedin.com/in/isabel-selin-b24588196/" target="_blank">https://www.linkedin.com/in/isabel-selin-b24588196/</a>
        </li>
        <li>
          <strong>Github:</strong>
          <a href="https://github.com/irSelin" target="_blank">https://github.com/irSelin</a>
        </li>
      </ul>
    </section>
  </main>
</body>
</html>
