<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

];

$filteredHotels = [];

if (isset($_GET['parking'])){

    foreach ($hotels as $hotel){
        if ($hotel['parking'] == true) {
            $filteredHotels[] = $hotel;
        }
    }

} else {
    $filteredHotels = $hotels;
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <form method="GET" action="index.php">
                    <div class="form-check d-flex">
                        <div class="m-3">
                            <input class="form-check-input" type="checkbox" value="1" id="parking" name="parking">
                            <label class="form-check-label" for="parking">
                            Parcheggio
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Filtra hotel</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($filteredHotels as $hotel){?>
                            <tr>
                                <td>
                                    <?php echo $hotel['name'];?>
                                </td>
                                <td>
                                    <?php echo $hotel['description'];?>
                                </td>
                                <td>
                                    <?php echo $hotel['parking']?'Si':'No';?>
                                </td>
                                <td>
                                    <?php echo $hotel['vote'];?>
                                </td>
                                <td>
                                    <?php echo $hotel['distance_to_center'];?>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>