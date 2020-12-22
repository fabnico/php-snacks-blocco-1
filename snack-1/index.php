<?php
   $matches = [
      [
         'home_team' => 'Olimpia Milano',
         'home_score' => 55,
         'guest_team' => 'Cantù',
         'guest_score' => 60
      ],
      [
         'home_team' => 'Black wolves',
         'home_score' => 62,
         'guest_team' => 'White rabbits',
         'guest_score' => 3
      ],
      [
         'home_team' => 'Catania',
         'home_score' => 35,
         'guest_team' => 'Sesto San Giovanni',
         'guest_score' => 48
      ],
   ];
?>

<ul>
      <?php
         for($i = 0; $i < count($matches); $i++){
            echo
            "<li>" .
                $matches[$i]["home_team"] .
               " - " .
               $matches[$i]["guest_team"] .
               " | " .
               $matches[$i]["home_score"] .
               "-" .
               $matches[$i]["guest_score"] .
               "<br>" .
            "</li>";
         }
      ?>
</ul>
