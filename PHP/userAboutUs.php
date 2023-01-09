<?php require("db_connect.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/AboutUs.css" />
    <link rel="stylesheet" href="../CSS/Matches.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
  </head>
  <body>
    <h1 id="title">
      <img id="logo" src="../Images/IMG_20230106_213725.png" alt="" />
      Catch your
      <span class="Title"> match </span>
    </h1>
    <div class="container">
    <nav>
        <ul>
          <li><a href="userhome.php">Home</a></li>
          <li class="navbar">
            <a href="#">Matches</a>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li><a href="Matches_income.php">Based on Income</a></li>              
              <li><a href="Matches_caste.php">Based on Caste</a></li>
              <li><a href="Matches_religion.php">Based on Religion</a></li>
              <li><a href="Matches_motherTongue.php">Based on Mother Tongue</a></li>
              <li><a href="Matches_age.php">Based on Age</a></li>
              <li><a href="Matches_city.php">Based on City</a></li>
              <li><a href="Matches_state.php">Based on State</a></li>
              <li><a href="Matches_country.php">Based on Country</a></li>
            </ul>
          </li>
          <li><a href="Feedback.php">Feedback</a></li>
          <li><a href="userAboutUs.php">About us</a></li>
          <li><a href="logout.php" onclick="return confirm('Do you want to logout?')">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="Profile">
      <div class="left">
        <h1 class="para">About Us</h1>
        <p class="para">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi magni
          perferendis repellendus quisquam, est culpa corrupti, qui voluptatum
          officia error nam blanditiis natus numquam facere quia. Aspernatur
          quasi voluptatem, exercitationem excepturi veniam enim molestiae earum
          eveniet dolor provident repellendus, omnis iusto et nisi praesentium
          illo odit laborum assumenda magni nulla debitis quam! Tenetur
          temporibus ab quam aliquam doloremque perspiciatis quaerat?
        </p>
        <p class="para">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
          vel eveniet repudiandae, adipisci reiciendis debitis recusandae eum in
          ipsum officia. Sequi perferendis praesentium autem sapiente provident,
          nesciunt optio voluptatibus blanditiis molestias facere iusto neque
          officia voluptates vitae ratione, maxime minus nobis porro ducimus
          magnam dolore! Quam officiis omnis consectetur voluptatem architecto!
          Molestias, praesentium quam totam ipsum laudantium rem aspernatur
          fugiat exercitationem necessitatibus placeat recusandae repellendus.
          Molestias quia ipsum magnam accusantium rerum distinctio eveniet sint
          magni soluta delectus? Fugiat suscipit voluptatem impedit iste
          reprehenderit sed blanditiis earum ex architecto fuga voluptatibus
          adipisci explicabo totam, officia vel deleniti ipsum omnis, ab
          quibusdam, labore inventore? Ipsum ipsa sequi recusandae, provident
          odit cumque, aperiam in vitae repudiandae, adipisci veniam alias quos.
          Laboriosam hic dolorum possimus rem quibusdam! Fugiat aspernatur
          molestias dolores sunt eius veritatis pariatur tenetur a repellat qui
          saepe laboriosam voluptas quis ipsum debitis molestiae ut odio
          ducimus, magnam eum nostrum autem consequatur cumque. Officia minus
          delectus molestias provident. Quaerat animi enim, iste alias explicabo
          voluptates cupiditate suscipit aperiam veritatis culpa adipisci amet
          magni a numquam voluptatum veniam tempora perspiciatis maiores, minima
          harum assumenda ullam ab recusandae. Veniam temporibus sunt
          necessitatibus modi incidunt, eum repellat libero consequuntur, vitae
          possimus voluptas iure dignissimos est.
        </p>
      </div>
      <div class="right">
        <h1 class="para">Feedback</h1>
        <p class="para">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi magni
          perferendis repellendus quisquam, est culpa corrupti, qui voluptatum
          officia error nam blanditiis natus numquam facere quia. Aspernatur
          quasi voluptatem, exercitationem excepturi veniam enim molestiae earum
          eveniet dolor provident repellendus, omnis iusto et nisi praesentium
          illo odit laborum assumenda magni nulla debitis quam! Tenetur
          temporibus ab quam aliquam doloremque perspiciatis quaerat?
        </p>
        <p class="para">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
          vel eveniet repudiandae, adipisci reiciendis debitis recusandae eum in
          ipsum officia. Sequi perferendis praesentium autem sapiente provident,
          nesciunt optio voluptatibus blanditiis molestias facere iusto neque
          officia voluptates vitae ratione, maxime minus nobis porro ducimus
          magnam dolore! Quam officiis omnis consectetur voluptatem architecto!
          Molestias, praesentium quam totam ipsum laudantium rem aspernatur
          fugiat exercitationem necessitatibus placeat recusandae repellendus.
          Molestias quia ipsum magnam accusantium rerum distinctio eveniet sint
          magni soluta delectus? Fugiat suscipit voluptatem impedit iste
          reprehenderit sed blanditiis earum ex architecto fuga voluptatibus
          adipisci explicabo totam, officia vel deleniti ipsum omnis, ab
          quibusdam, labore inventore? Ipsum ipsa sequi recusandae, provident
          odit cumque, aperiam in vitae repudiandae, adipisci veniam alias quos.
          Laboriosam hic dolorum possimus rem quibusdam! Fugiat aspernatur
          molestias dolores sunt eius veritatis pariatur tenetur a repellat qui
          saepe laboriosam voluptas quis ipsum debitis molestiae ut odio
          ducimus, magnam eum nostrum autem consequatur cumque. Officia minus
          delectus molestias provident. Quaerat animi enim, iste alias explicabo
          voluptates cupiditate suscipit aperiam veritatis culpa adipisci amet
          magni a numquam voluptatum veniam tempora perspiciatis maiores, minima
          harum assumenda ullam ab recusandae. Veniam temporibus sunt
          necessitatibus modi incidunt, eum repellat libero consequuntur, vitae
          possimus voluptas iure dignissimos est.
        </p>
      </div>
    </div>
  </body>
</html>
