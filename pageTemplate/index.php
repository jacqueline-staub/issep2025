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


</div>

<!--END CONTENT-->

<?php include "../footer/index.php" ?>
<?php include "../scripts/index.php" ?>