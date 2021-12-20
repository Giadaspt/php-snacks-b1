<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php 

$posts = [

  '12-12-2012' => [ 
      [
          'title' => 'Post 1',
          'user' => 'Utente 1',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ],
      [
          'title' => 'Post 2',
          'user' => 'Utente 2',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ],
  ],
  '10-10-2010' => [
      [
          'title' => 'Post 3',
          'user' => 'Utente 3',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ]
  ],
  '01-01-2001' => [
      [
          'title' => 'Post 4',
          'user' => 'Utente 4',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ],
      [
          'title' => 'Post 5',
          'user' => 'Utente 5',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ],
      [
          'title' => 'Post 6',
          'user' => 'Utente 6',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ]
    ],
  ];

  // var_dump($posts);
  var_dump($posts['12-12-2012']);

  
  for ($i = 0; $i < count($posts); $i++ ) {
    $post = $posts[$i];
    
    // $stampa = $post['title'];
    echo array_search('12-12-2012', $posts);
  };


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=+, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3> <?php  ?> </h3>

</body>
</html>