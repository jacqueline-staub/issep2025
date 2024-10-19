<?php include "../header/index.php" ?>
<?php include "../navigation/index.php" ?>
  
<!--START CONTENT-->

<div class="mainContainer">

  <h1>Heading</h1>
      
  <h2>Paragraphs</h2>
  <p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
    est Lorem ipsum dolor sit amet.   
  </p>
  <p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
    est Lorem ipsum dolor sit amet.  
  </p>


  
  <h2>Lists</h2>

  <h3>Unordered List</h3>

  <ul>
    <li>First Item</li>
    <li>Second Item
      <ul>
        <li>First Sub-Item</li>
        <li>Second Sub-Item</li>
      </ul>
    </li>
    <li>Third Item</li>
  </ul>

  <h3>Ordered List</h3>

  <ol>
    <li>First Item</li>
    <li>Second Item
      <ol>
        <li>First Sub-Item</li>
        <li>Second Sub-Item</li>
      </ol>
    </li>
    <li>Third Item</li>
  </ol>

</div>



<div class="mainContainer mainContainerAlternative">

  <div class="flexContainer">

    <div>
      <img src="http://localhost/issep2025/src/uni_trier_2.jpg">
    </div>

    <div>
      <h2>Flex-Item</h2>
      <p>Use "reverseFlex" in addition to "flexContainer" to swap positions of image and text.</p>
    </div>

  </div>

</div>



<div class="mainContainer">

  <h2>Images</h2>
  
  <figure class="floatingImage">
    <img src="http://localhost/issep2025/src/uni_trier.jpg">
    <figcaption>Floating Image</figcaption>
  </figure>

  <p>You can use images that are fullscreen or floating images (right side).</p>
  <p>In addition, you can add a caption to the image.</p>
  <p>Be aware that a floating image can interfere with following sections!</p>
  <p>&nbsp;</p>

  <h2>Tables</h2>

  <table class="visibleTable">
    <tr>
      <th>Module</th>
      <th>Name</th>
      <th>Lecturer</th>
    </tr>
    <tr>
      <td>M 1</td>
      <td>Discrete Structures</td>
      <td>Prof. Dr. Fernau</td>
    </tr>
    <tr>
      <td>M 2</td>
      <td>Computer Science Didactics</td>
      <td>JProf. Dr. Staub</td>
    </tr>
    <tr>
      <td>M 3</td>
      <td>Programming I</td>
      <td>Prof. Dr. Müller</td>
    </tr>
    <tr>
      <td>M 4</td>
      <td>Algorithms and Datastructures</td>
      <td>JProf. Dr. Kindermann</td>
    </tr>
  </table>



  <h2>I-Frames</h2>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.177207648962!2d6.687805300000001!3d49.7451094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47957c753f49ff2b%3A0xf6c1c1c3ebac5527!2sUniversit%C3%A4t%20Trier!5e0!3m2!1sde!2sde!4v1729354716760!5m2!1sde!2sde"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>

</div>

<!--END CONTENT-->

<?php include "../footer/index.php" ?>
<?php include "../scripts/index.php" ?>