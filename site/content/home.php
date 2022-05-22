  <header>
    <h1>Lorem ipsum</h1>
    <h2>Nullam nec vulputate magna</h2>
  </header>
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel mauris mauris. Nullam quis accumsan mi, at pretium purus. Curabitur egestas arcu dolor, nec laoreet odio accumsan sit amet. Vivamus egestas ultricies erat, at ultricies ex pulvinara. Pellentesque eget urna magna. Sed leo odio, hendrerit vitae nulla eu, lacinia consectetur eros. Integer odio ex, consectetur sed risus facilisis, commodo pulvinar tellus. Aenean non felis hendrerit, venenatis leo id, tincidunt purus. Maecenas auctor porta justo, a bibendum ligula feugiat ac. Etiam imperdiet orci augue, id aliquet massa convallis ut. Proin in orci in mauris faucibus lobortis. Morbi fermentum aliquam metus, id ultrices urna dignissim vel.</p>
  <p>rullam nec vulputate magna. Sed gravida ultricies tellus, eu luctus dui convallis sed. Curabitur vitae hendrerit ligula. Nulla at varius elit. Integer maximus lobortis nulla, eget pretium leo blandit a. Curabitur id tristique ex. Sed ultrices nisl vitae est bibendum fringilla. Morbi erat ante, imperdiet et lectus id, blandit sagittis sapien. Sed blandit ornare nisi, sed bibendum justo lobortis feugiat. Morbi mollis pulvinar tellus, vel cursus tortor malesuada nec. Maecenas eget velit ornare, sagittis lacus sed, sodales enim. Nullam ut eros eu lacus blandit scelerisque eu id augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam eget purus dictum, molestie felis id, aliquet purus. Aenean eleifend est et arcu consequat, vitae dictum velit venenatis. </p>
  <?php 
    echo $app->pagina;
    /* get_defined_vars() - todas as vars */
    debug(true,  get_defined_vars());

  ?>
<pre><?php print_r($qry = $app->db->qDb()); ?></pre>
<pre>
    <?php
    $mysqli = new mysqli(SERVER, DB_USER, DB_PWD, BD);
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql); //$mysqli == ligação à BD
    print_r($result);
    foreach($result as $value){
        echo   "<tr>
                    <td>".$value['username']."</td>
               </tr>";
    }
    ?>
</pre>
  <?php

