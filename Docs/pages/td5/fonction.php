<?php

declare(strict_types=1);

function titre(string $content, string $subtitle = '', int $level = 1): void{
    echo "<h$level>$content</h$level>";
    if($subtitle != null){
        echo "<p class='sub-title'>$subtitle</p>";
    }
}

function get(string $key, $defaultValue=null): mixed{
    return $_GET[$key]??$defaultValue;
}

function post(string $key, $defaultValue=null): mixed{
    return $_POST[$key]??$defaultValue;
}

/**
 * Retourne le paragraphe avec les mots mélangés
 * @param string $paragraphe
 * @return string
 */
function shufflePara(string $paragraphe): string{
    $words = explode(" ", strtolower($paragraphe));
    shuffle($words);
    return ucfirst(implode(" ", $words));
}

function generateTable(int $rows, int $cols, $defaultValue): string{
    $html = '<table border = "2">';
    for($i=0; $i<$rows; $i++){
        $html .= '<tr>';
        $html.= str_repeat('<td>$defaultValue</td>', $cols);
        $html .= '</tr>';
    }
    $html .='</table>';
    return $html;
}

const LOREM_IPSUM_ARRAY=[
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a neque felis. Nullam non lorem nec urna efficitur interdum sed sit amet lectus. In egestas ut nisl in mollis. In neque felis, euismod vel nunc sed, convallis hendrerit dolor. Phasellus justo est, varius vestibulum ex sit amet, auctor porttitor massa. Curabitur tincidunt condimentum velit, nec lobortis ipsum tincidunt eu. Mauris a libero neque. Etiam consequat arcu elit, vel porta leo bibendum id. Interdum et malesuada fames ac ante ipsum primis in faucibus. In faucibus purus sit amet elit pretium, nec pulvinar sem iaculis. Donec mauris ligula, placerat id mi tempus, congue bibendum mi. Morbi sagittis, orci a vehicula egestas, velit leo vulputate felis, non porttitor sem diam quis nunc.",
    "Ut a metus ornare, mattis elit eu, porttitor augue. Morbi efficitur tortor a augue consectetur fermentum. Ut est mauris, mollis nec arcu ut, rutrum porta sapien. Ut quis porttitor libero. Vivamus pharetra, mi sit amet vestibulum vulputate, velit metus faucibus metus, non mattis nisi metus ac eros. Vestibulum metus mi, blandit sed gravida in, gravida id ipsum. Quisque nec lacus pulvinar, posuere ex sed, blandit nulla. Sed ac feugiat velit, congue ultrices dolor. Sed mattis nibh nisl, sit amet accumsan lectus vulputate vel. Aliquam vitae nisl est. Aliquam sed dignissim est, eu aliquet nisi. Sed eget augue at neque auctor dictum in varius mauris.",
    "Mauris imperdiet nulla vel justo viverra posuere. Morbi elementum turpis mi, sit amet posuere risus ultricies in. Quisque euismod sapien id urna blandit porttitor. Cras sed molestie justo. Praesent id erat ut dolor tempus pellentesque nec ut nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eu felis nec dui imperdiet sodales. Cras aliquam, justo ut ultrices tempus, libero velit vulputate eros, eget congue ipsum est id sem. Aenean maximus, lectus nec lacinia viverra, ante ipsum mattis dolor, sit amet convallis libero justo sed sapien. In laoreet eros a magna iaculis, ultrices tempor orci eleifend. Etiam sit amet quam neque. Etiam ac elementum justo. Donec imperdiet libero malesuada, lacinia justo nec, finibus velit. Integer tincidunt arcu et purus sodales, at suscipit risus mollis. Fusce hendrerit sem ante, vitae imperdiet nibh convallis eu. Vestibulum vitae aliquam metus, vehicula finibus ex.",
    "Donec pulvinar, lacus eget egestas mattis, nibh odio elementum lorem, quis malesuada tellus metus bibendum urna. Morbi quis rhoncus tellus. Duis lobortis elit purus, vel convallis elit rutrum egestas. Aenean at aliquet leo. Fusce volutpat massa nec velit sollicitudin, non elementum mi efficitur. Aenean eu augue vitae ex pulvinar dictum a quis enim. Proin molestie ultrices velit, sed sollicitudin orci congue ac.",
    "Nunc aliquam, eros in dignissim tincidunt, justo diam elementum libero, sit amet condimentum libero risus id metus. Etiam at tortor diam. Fusce pellentesque, elit id ullamcorper tempus, mi mauris imperdiet lorem, quis venenatis massa risus eu tortor. Vestibulum tempus faucibus ornare. Aliquam et elit non mauris fermentum molestie eu vel odio. Integer a lacus lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque pulvinar consequat cursus."
];







?>