<?php
function archiverProduit (): void {
    global $productsArchived , $products;
    
    $value = saisie ("Veuillez renseigner le libellé \n");
    $indexArchived = produitsParLebelle($products, $value);
        if ($indexArchived !== -1){
            $productArchived = supprimerProduit($indexArchived, $products);
            $productsArchived[] = $productArchived;
            
        } else {
            echo "Produit non trouvé";
        }
        
}
