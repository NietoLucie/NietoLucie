<?php
//tp0
//exo 2

$int = 185565; $string = "WingHell"; $bool = true;

echo " $int $string $bool";

//exo 3

$a = 5; $b = 8;

$sA = $a; $a = $b; $b = $sA;

//exo 4
echo "</br>";
$age = rand(1, 100);
if($age >= 18)echo "$age et est majeur"; else echo "$age et est mineur";

//exo 5
echo "</br>";
$v = rand(0,11);

for($i=0;$i<11;$i++) echo $v*$i."</br>";

//tp1
//exo 1

echo "Hello everypony !</br>";

for($i=0;$i<51;$i++) echo "$i ";

$i = rand(0,100);
if($i<50) echo "</br>i est inferieur a cinquante";

echo "</br></br>";

for($i=1;$i<501;$i++){ if($i%10 == 0) echo "</br>"; echo "$i ";} 

$table = "<table>";
for($i=0;$i<12;$i++){
	$table .= "<tr>";
		for($j=0;$j<12;$j++){
			$table .= "<td>".$i*$j."</td>";
		}
	$table .= "</tr>";
}
echo $table;

//exo 2
echo "</br></br>";

$fruits = ["pomme", "poire", "banane", "coco", "goyave", "tomate", "cajou"];
foreach($fruits as $fruit) echo $fruit."</br>";

echo "</br></br>";

//exo 3

$tab = array(); 


for($i = 0; $i <10;$i++) {
	$tab[$i] = rand(0,1000); 
}
$compareTo = $tab[0];

foreach($tab as $int) {
	if($compareTo > $int) $compareTo = $int;
}
echo $compareTo;

echo "</br></br>";
//exo 4

$links = array("google"=>"http://www.google.fr",
		"sport"=>"http://www.lequipe.fr",
		"infos"=>"http://www.lemonde.fr");

$list = "<ul>";
foreach($links as $hypertexte=>$url) {
	$list .= "<li><a href='$url'>$hypertexte</a></li>";
}
$list .= "</ul>";
echo $list;

echo "</br></br>";

//exo 5

$tableau = array(
	array("nom"=>"Audemard","prenom"=>"Gilles","age"=>30),
	array("nom"=>"Di Caprio","prenom"=>"Leonardo","age"=>38),
	array("nom"=>"Deep","prenom"=>"Johnny","age"=>50));

$tab = "<table>";
$tab .= "<tr>";
$tab .= "<th>Nom</th><th>Prénom</th><th>Age</th>";
$tab .= "</tr>";
foreach($tableau as $acteur) {
	$tab .= "<tr>";
	foreach($acteur as $info=>$value){
	
		$tab .= "<td>$value</td>";
		
	}
	$tab .= "</tr>";
} 	
echo $tab;

echo "</br>";

//exo 6

function gras($x){ return "<b>$x</b>";}

echo gras("je suis un texte en gras");


//exo 7


function f($x,$y = 1) {
	return $x+$y;
}

echo f(3);
echo "<br />";
echo f(5,2);
echo "<br />";

//exo 8


function lien($link,$text,$attributes=array()){
		$string = "<a ";
		foreach($attributes as $type=>$value) $string .= "$type='$value'";
		$string .= " href='$link'>$text</a>";
		return $string;
	}
	
function item($content,$attributes=array()){
		$string = "<li ";
		foreach($attributes as $type=>$value) $string .= "$type='$value'";
		$string .= "> $content</li>";
		return $string; 
	}
	
function table($table){
		foreach($table as $acteur) {
			$tab = "<tr>";
			foreach($acteur as $info=>$value){
	
				$tab .= "<td>$value</td>";
		
			}
		$tab .= "</tr>";
		} 	
	return $tab;
	}
	
	

$list2 = "<ul>";
foreach($links as $name=>$url) $list2 .= item(lien($url, $name));
$list2 .="</ul>";
echo $list2;
?>

<table class="table">
<tbody>
<tr><th>Nom</th><th>Prénom</th><th>Age</th></tr>
<?php echo table($tableau);?>
</tbody>
</table>
