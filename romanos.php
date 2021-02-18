<?php
$numeroIngresado = $_POST['num'];
if($numeroIngresado){
  echo romanos($numeroIngresado);
}else{
  echo 'Ni mergas';
}
function romanos($n){

  $numRomanos = array(
      'M' =>	1000,
      'D' =>	500,
      'C' =>	100,
      'L' =>	50,
      'X' =>	10,
      'IX' =>	9,
      'V' =>	5,
      'IV' =>	4,
      'I' =>	1
  );
  $elMamalon = '';
  while($n > 0)
  {
    foreach($numRomanos as $romano=>$numeroA)
    {
      if($n >= $numeroA)
      {
        $n -= $numeroA;
        $elMamalon .= $romano;
        break;
      }
    }
  }
  return $elMamalon;
}


