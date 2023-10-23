<main>
    <div class="container py-4">

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2">

            <?php foreach ($products as $product) {

            ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $product->img; ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo ucwords($product->getName()); ?>
                            </h5>
                            <p class="card-text">
                                <strong>Prezzo: </strong><?php echo $product->price; ?> <br>
                                <strong>Categoria: </strong><?php echo $product->category; ?> <br>
                                <strong>Tipologia: </strong><?php echo $product->type; ?> <br>
                                <?php if ($product->type == 'gioco') {
                                ?>
                                    <strong>Dimensioni: </strong><?php echo $product->dimensions; ?> <br>
                                <?php
                                } elseif ($product->type == 'cuccia') {
                                ?>
                                    <strong>Dimensioni: </strong><?php echo $product->dimensions; ?> <br>
                                    <strong>Materiale: </strong><?php echo $product->material; ?> <br>
                                <?php
                                } elseif ($product->type == 'cibo') {
                                ?>
                                    <strong>Peso: </strong><?php echo $product->weight; ?> <br>
                                <?php
                                }
                                ?>
                                <strong>Descrizione: </strong><?php echo $product->description; ?> <br>
                            </p>
                        </div>


                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</main>