<?php

function get_list_view_html($product_id, $product) {

    $output = "";

    $output .= '<div class="col-xs-6 col-md-4 col-lg-3 el '. $product["tag"] .'">';
    $output .= '<div class="portfolio-el view">';
    $output .= '<img src="images/Opere/'. $product["img"] .'" alt="project">';
    $output .= '<a href="images/Opere/'. $product["img"] .'" class="mask">';
    $output .= '<div class="portfolio-middle">';
    $output .= '<h3 class="project-title br-bottom">'. $product["name"] .'</h3>';
    $output .= '<p class="text">'. $product["text"] .'</p>';
    $output .= "</div>";
    $output .= '<p class="date">'. $product["size"] .'</p>';
    $output .= "</a>";
    $output .= "</div>";
    $output .= "</div> <!-- END portfolio Item -->";

    return $output;
}

/*  product[name] => Albero Marsico a il circolo
    product[tag] => olioSuTela_ disegno_
    product[img] => AlberoMarsicoAilCircolo.jpg
    product[text] => Acrilico, malta, olio su tela
    product[size] => 70 x 100
*/

$products = array();
$products[101] = array(
	"name" => "Albero Marsico a il circolo",
	"tag" => "olioSuTela_",
	"img" => "AlberoMarsicoAilCircolo.jpg",
	"text" => "Acrilico, malta, olio su tela",
    "size" => "70 x 100"
);
$products[102] = array(
	"name" => "Bambini in pericolo",
	"tag" => "olioSuTela_",
	"img" => "bambiniInPericolo.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "30 x 45"
);
$products[103] = array(
	"name" => "Bandoneon",
	"tag" => "olioSuTela_",
	"img" => "bandoneon.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "120 x 100"
);
$products[104] = array(
	"name" => "Bandoneonista con spartito",
	"tag" => "olioSuTela_",
	"img" => "bandoneonistaConSpartito.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "120 x 80"
);
$products[105] = array(
	"name" => "Cambio di scarpe",
	"tag" => "olioSuTela_",
	"img" => "cambioDiScarpe.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "120 x 80"
);
$products[106] = array(
	"name" => "C'era una volta un Re",
	"tag" => "olioSuTela_",
	"img" => "cEraUnaVoltaUnRe.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "80 x 100"
);
$products[107] = array(
	"name" => "Cocktail",
	"tag" => "olioSuTela_",
	"img" => "cocktail.jpg",
	"text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 90"
);
$products[108] = array(
	"name" => "Con la TV",
	"tag" => "olioSuTela_",
	"img" => "conLaTV.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "20 x 30"
);
$products[109] = array(
	"name" => "Devo arrivare primo",
	"tag" => "olioSuTela_",
	"img" => "devoArrivarePrimo.jpg",
	"text" => "Acrilico, malta e olio su tela",
    "size" => "50 x 50"
);
$products[110] = array(
	"name" => "Due uomini",
	"tag" => "olioSuTela_",
	"img" => "dueUomini.jpg",
	"text" => "Acrilico e olio su tela",
    "size" => "80 x 80"
);
$products[111] = array(
    "name" => "Golf",
    "tag" => "olioSuTela_",
    "img" => "golf.JPG",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 80"
);
$products[112] = array(
    "name" => "Ho perso il metro",
    "tag" => "olioSuTela_",
    "img" => "hoPersoIlMetro.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "30 x 40"
);
$products[113] = array(
    "name" => "In compagnia",
    "tag" => "olioSuTela_",
    "img" => "inCompagnia.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 120"
);
$products[114] = array(
    "name" => "Interno locale",
    "tag" => "olioSuTela_",
    "img" => "internoLocale.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "20 x 30"
);
$products[115] = array(
    "name" => "Intesa",
    "tag" => "olioSuTela_",
    "img" => "intesa.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 70"
);
$products[116] = array(
    "name" => "La bellezza salverà il mondo",
    "tag" => "olioSuTela_",
    "img" => "laBellezzaSalveraIlMondo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 120"
);
$products[117] = array(
    "name" => "Memorando",
    "tag" => "olioSuTela_",
    "img" => "memorando_1.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 120"
);
$products[118] = array(
    "name" => "Memorando",
    "tag" => "olioSuTela_",
    "img" => "memorando_2.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 120"
);
$products[119] = array(
    "name" => "Nuevo tango",
    "tag" => "olioSuTela_",
    "img" => "nuevoTango.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "120 x 80"
);
$products[120] = array(
    "name" => "Nuevo tango coppia",
    "tag" => "olioSuTela_",
    "img" => "nuevoTangoCoppia.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "70 x 90"
);
$products[121] = array(
    "name" => "Polvere di Luna",
    "tag" => "olioSuTela_",
    "img" => "polvereDiLuna_1.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "90 x 125"
);
$products[122] = array(
    "name" => "Polvere di Luna",
    "tag" => "olioSuTela_",
    "img" => "polvereDiLuna_2.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "120 x 100"
);
$products[123] = array(
    "name" => "Posso dormire in un parco",
    "tag" => "olioSuTela_",
    "img" => "possoDormireInUnParco.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "90 x 70"
);
$products[124] = array(
    "name" => "Prét a portér",
    "tag" => "olioSuTela_",
    "img" => "pretAporter_1.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "20 x 30"
);
$products[125] = array(
    "name" => "Prét a portér",
    "tag" => "olioSuTela_",
    "img" => "pretAporter_2.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "dittico"
);
$products[126] = array(
    "name" => "Prét a portér",
    "tag" => "olioSuTela_",
    "img" => "pretAporter_3.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "50 x 100"
);
$products[127] = array(
    "name" => "Prét a portér",
    "tag" => "olioSuTela_",
    "img" => "pretAporter_4.jpg",
    "text" => "Olio su tela",
    "size" => "20 x 30"
);
$products[128] = array(
    "name" => "Senza parole",
    "tag" => "olioSuTela_",
    "img" => "senzaParole.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "20 x 30"
);
$products[129] = array(
    "name" => "Tra la folla",
    "tag" => "olioSuTela_",
    "img" => "traLaFolla.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "20 x 30"
);
$products[130] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "1_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[131] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "2_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[132] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "3_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[133] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "4_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "20 x 30"
);
$products[134] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "5_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "20 x 30"
);
$products[135] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "6_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "20 x 30"
);
$products[136] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "7_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[137] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "8_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[138] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "9_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "140 x 100"
);
$products[139] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "10_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "70 x 100"
);
$products[140] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "11_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "50 x 70"
);
$products[141] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_ disegno_",
    "img" => "12_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[142] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_ disegno_",
    "img" => "13_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[143] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_ disegno_",
    "img" => "14_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[144] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "15_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "90 x 140"
);
$products[145] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "16_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "50 x 50"
);
$products[146] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "17_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "100 x 100"
);
$products[147] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "18_senzaTitolo.jpg",
    "text" => "Acrilico, malta e olio su tela",
    "size" => "80 x 80"
);
$products[148] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "19_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "98 x 70"
);
$products[149] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "20_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "50 x 50"
);
$products[150] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "22_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "50 x 100"
);
$products[151] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "23_senzaTitolo.jpg",
    "text" => "Acrilico e olio su tela",
    "size" => "50 x 100"
);
$products[153] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "24_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[154] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "25_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[155] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "26_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[156] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "27_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[157] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "28_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[158] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "29_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[159] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "30_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[160] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "31_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[161] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "32_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[162] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "33_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[163] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "34_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[164] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "35_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[165] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "36_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[166] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "37_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[167] = array(
    "name" => "Senza titolo",
    "tag" => "olioSuTela_",
    "img" => "38_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[168] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "39_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
$products[169] = array(
    "name" => "Senza titolo",
    "tag" => "disegno_",
    "img" => "40_senzaTitolo.jpg",
    "text" => "Olio su carta telata",
    "size" => "24 x 34"
);
