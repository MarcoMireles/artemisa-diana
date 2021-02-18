<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/default.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <title>RETO 1 | De Artemisa a Diana</title>
  <style>
    body{
        font-family: 'Poppins';
    }
  </style>

</head>
<body class="bg-purple-200">

  <section >
    <div class="container mx-auto px-8 py-12 bg-white ">
      <div class="block">
        <h1 class="font-extrabold text-5xl text-center mb-12">De Artemisa a Diana</h1>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 ">
        <div class="block w-full">
          <div class="block mb-8">
            <h2 class="font-bold text-3xl border-b pb-4 mb-4">🏆 Reto</h2>
            <p class="font-normal"> Dado un número entero, conviértelo a un número romano.</p>
          </div>
          <div class="block mb-8">
            <h2 class="font-bold text-3xl border-b pb-4 mb-4">🐥 Solucion al reto</h2>
          </div>

          <form >
            <div class="flex flex-col">
              <label for="numero">Ingresa un numero</label>
              <input type="number" id="numero" class=" border-2 p-2 w-2/3 " placeholder="1-3999">
              <small id="error" class="bg-red-100 text-2xl py-3 px-4 my-4 hidden"></small>
            </div>
            <div class="block">
              <button id="dale-duro" class="h-auto hover:border-opacity-0 hover:bg-purple-800  bg-purple-500 w-auto px-16 py-4 mt-4  border-b-8 border-purple-800  text-white">Convertir ✨</button>
            </div>
          </form>

          <div id="resultado" class="flex items-center justify-center  my-8 h-40 text-center font-extrabold text-white bg-purple-500 text-6xl w-100">

          </div>
        </div>

        <div class="block px-8 scroll">
          <pre class="h-full">
            <code class="php h-full">
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
            </code>
          </pre>
        </div>


      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="assets/bundle.js"></script>
</body>
</html>