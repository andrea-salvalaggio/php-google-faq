<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importing Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>PHP Google FAQ</title>
</head>
<body>

    <?php
        $dataBase = [
            [
                "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa.
                             La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati
                             relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere 
                             inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            ],
        ];
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <?php foreach ($dataBase as $data) { ?>
                    <h3>
                        <?php echo $data['question']?>
                    </h3>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>