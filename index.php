<?php

require_once __DIR__.'/model/produit.php';
require_once __DIR__.'/utils/validator.php';
require_once __DIR__.'/utils/errors.php';
require_once __DIR__.'/controller/produitController.php';
require_once __DIR__.'/services/produitsServices.php';
require_once __DIR__.'/views/listesProduits.php';


sauvgarderProduit();
archiverProduit();
listerProduits($productsArchived);
