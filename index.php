<!--<?php
for ($i=200; $i>=0  ; $i-=5) { 
echo $i . ", " ;
}
?>

<pre>
<?php
$a = [7, 1, 43, 23, 87];
sort($a);
print_r($a);
?>	
</pre>

<pre>
<?php
$a = [1, 2, 3 ,4 ,5 ,6];
shuffle($a);
print_r($a);
?>	
</pre>
<pre>

<pre>
<?php
$a = [1,2];
if(isset($a)){
	print_r ($a);
	print_r ($a);
	unset($a);
	print_r ($a);
}
?>	
</pre>


<?php
$a = [1, 2, 3 ,4 ,5 ,6];
$sk = 2;
function rask($a, $sk){
	if (in_array($sk, $a)){
		echo "radau";
	} else {
		echo "neradau";
	}
}

rask($a, $sk);

?>-->

<?php
/*
function skr ($r){
	$pi = pi();
	$sp = $pi * $r * $r;
	return $sp;	
}
echo skr(10);

function trap ($a, $b, $h){
	$s = (($a + $b)/2) * $h;
	return $s;
}

echo trap (7, 5, 4);

function get ($s, $a, $b, $kiekis){
	$pal = $a * $b * $kiekis;
	$ss = $s / $pal;
	return ceil($ss);
}



echo get (5000, 0.3, 0.2, 500);

$pnuorodos = [['name' => 'Delfi', 'url' => 'http://delfi.lt'], ['name' => '15min', 'url' => 'http://15min.lt']];

function printlinks($nuorodos){
	foreach ($nuorodos as $nuoroda) {
		echo '<a href= "' . $nuoroda['url'] . '">' . $nuoroda['name'] . '</a><br>';
	}

}

printlinks($pnuorodos);






function format_number($t){
  return str_replace("+370", "8", $t);
}

function format_number_e($t){
	$ta = explode (" ", $t);
	return "8 " . $ta[1] . " " . $ta[2]; 
}

$tel = "+370 688 77777";
echo format_number($tel);*/


parasyt funkcija, kuri parodys kiek dienu liko iki Kaledu.


