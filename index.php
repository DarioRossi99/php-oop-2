<?php
require_once "./classes/product.php";

$prodotti= [
    new Prodotto("anti-pulci", 15.99, "Entrambi"),
    new Cibo("umido", true, "Lattina tuna & crab", 4.99, "gatti"),
    new Cibo("secco", false, "croccantini per cagnolini", 2.99, "cani"),
    new Cibo("secco", true, "dentastix", 5, "cani"),
    new Giochi("plastica", " topo giocattolo", 4, "gatti"),
    new Giochi("peluche", " per cani", 12.50,"cani"),
    new Cucce("stoffa", "piccola", "cuccia piccola", 5,"entrambi"),
    new Cucce("stoffa", "media", "cuccia media", 10,"entrambi"),
    new Cucce("pelle sintetica", "grande", "cucciona grande", 150,"cani"),
]

?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PetStore</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="bg-warning">
        <div class="container">
            <h1 class="text-center text-primary mb-5" id="bordoTitolo">ArcaPlanet</h1>
            <div class="row gy-5">
            <?php foreach ($prodotti as $prodotto ) {

            ?>
                <div class="col-4">
                    <div class="col-container d-flex justify-content-center">
                        <div class="card" style="width: 18rem;" id="bordoCarta">
                            <img class="card-img-top" src="https://picsum.photos/200/100" alt="immagine">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $prodotto->getNome() ?> </h5>
                                <h6>
                                    Prodotto per: <?php echo $prodotto->getCategoria() ?>,  
                                    Prezzo: <?php echo $prodotto->getPrezzo() ?> $
                                </h6>
                                <span> <?php echo (method_exists($prodotto, "getTipo") ? "Tipo di alimento: " . $prodotto->getTipo() : '') ?></span>
                                <span> <?php echo (method_exists($prodotto, "getPerSterilizzati") ?
                                (($prodotto->getPerSterilizzati()) ? "Adatto per sterilizzati" : "non adatto per sterilizzati") : "") ?> </span>
                                <span"><?php echo method_exists($prodotto, "getMateriale") ? "Materiale del prodotto: " . $prodotto->getMateriale() : "" ?></span>
                                <span><?php echo method_exists($prodotto, "getDimensioni") ? "Cuccia di dimensioni: ". $prodotto->getDimensioni() : "" ?> </span>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>

    <style>

        #bordoCarta{
            border: 2px solid blue;
        }

        #bordoTitolo{
            border: 2px solid blue;
            padding: 1rem;
            border-radius: 30px;
            margin-top: 1rem;
            background-color: white;
            text-decoration: underline;
        }
    </style>

</html>