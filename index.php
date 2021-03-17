<?php include("includes/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<body>
  <header>
    <nav>
      <ul>
        <li> <a href="#about">About</a> </li>
        <li> <a href="#skills">Skills</a> </li>
        <li> <a href="#experience">Experience</a> </li>
        <li> <a href="#contact">Contact</a> </li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="about">
      <!-- add attributes width="tbd" height="tbd" -->
      <img src="images/id-photo.jpeg" alt="ID photo" width="433" height="433"/>
      <!-- Photo taken by Pamela Selin -->
      <h1>Isabel Selin</h1>
      <h2>Computer science major at Cornell University, class of 2022</h2>
      <p>Hi, I'm Isabel Selin, a computer science major and game design and fine arts minor at Cornell University.</p>
    </section>

    <section id="skills">
      <h1>Skills</h1>
      <?php include("includes/skills.php"); ?>
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
