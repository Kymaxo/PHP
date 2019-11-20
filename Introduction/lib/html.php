<?php

/**
 * Cette fonction génère une chaine de caractères représentant 
 * une balise html et son contenu
 *
 * @param string $tag: la balise à créer
 * @param string $content: le contenu de la balise
 * @param array $attributes: un tableau associatif des attributs html
 * @param bool $autoclose: la balise est elle auto fermante
 */

function htmlTag(
    string $tag, 
    string $content = "", 
    array $attributes = [], 
    bool $autoclose = false) : string {

    // Ouverture de la balise
    $html = "<$tag";
    $attributesString ="";
    
    // Récupération de la liste des attributs
    foreach($attributes as $key=>$val)  {
        $attributesString .= "$key=$val";
    }

    $html .= $attributesString;
    $html .= ">";

    if(! $autoclose) {
        // Ajout du contenu
        $html .= $content;
        // Fermeture de la balise
        $html .= "</$tag>" ;
    }
    // retour de la fonction
    return $html;
}
?>