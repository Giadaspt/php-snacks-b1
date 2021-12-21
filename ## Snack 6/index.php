<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 -->

 <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $title = array_keys($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .grey {
      width: 300px;
      background-color: grey;
      padding: 10px;
      margin-bottom: 48px;
    }
    .green{
      width: 300px;
      padding: 10px;
      background-color: green;
    }
  </style>
</head>
<body>

    <div class="grey">
      <h2>
        <?php
          print $title[0];
        ?>
      </h2>
       <?php foreach($db['teachers'] as $key => $teachers) {?> 
        <h4>
          <?php
            foreach($teachers as $item){ ?>
              <?php 
                echo $item; 
              ?>
            <?php } ?>
        </h4>
      <?php } ?>
    </div>
    <div class="green">
    <h2>
        <?php
          print $title[1];
        ?>
      </h2>
       <?php foreach($db['pm'] as $key => $pm) {?> 
        <h4>
          <?php
            foreach($pm as $item){ ?>
              <?php 
                echo $item; 
              ?>
            <?php } ?>
        </h4>
      <?php } ?>
    </div>
  
</body>
</html>