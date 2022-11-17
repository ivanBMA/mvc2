<?php

    namespace Dwes\Galaxias;

    echo "<br> Namespace actual : " . __NAMESPACE__;
    /*///////////////////////////////////
    //    -Direccionamiento namespace. //
    //    1- Sin direccionamiento      //
    //   2- Direccionmiento relativo   //
    //    3- Direccionamiento absoluto //
    *////////////////////////////////////

    include "galaxia1.php";

    echo "<h2> Sin direccionamiento </h2>";
    echo "<br> Radio de la galaxia : " . RADIO;
    observar("Via Lactea");
    $gl = new Galaxia();
    Galaxia::muerte();

    //Direccionmiento relativo///////////////////////////
    echo "<h2> Direccionamiento Activo </h2>";         //
    include "pegaso/pegaso.php";                       //
    
    echo "<br> Radio de la galaxia : " . Pegaso\RADIO;
    Pegaso\observar("Via Lactea");
    $gl = new Pegaso\Galaxia();
    Pegaso\Galaxia::muerte();
    /////////////////////////////////////////////////////

    ///Direccionmiento relativo////////////////////////////
    echo "<h2> Direccionamiento Absoluto </h2>";         //                      //
                                                         //
    echo "<br> Radio de la galaxia : " . \Dwes\Galaxias\Pegaso\RADIO;
    \Dwes\Galaxias\Pegaso\observar("Via Lactea");        //
    $gl = new \Dwes\Galaxias\Pegaso\Galaxia();           //
    \Dwes\Galaxias\Pegaso\Galaxia::muerte();             //
    ///////////////////////////////////////////////////////

    echo "<hr>";
    use const \Dwes\Galaxias\Pegaso\RADIO;
    use function \Dwes\Galaxias\Pegaso\observar;
    echo "<br> el radio es : " . RADIO;
    echo "<br> el radio es : " . observar("Otra galaxia");
    echo "<br> Objeto de galaxia generalizado : " . new Galaxia();

    echo "<hr>";
    //Apodar namespace -> alias
    use \Dwes\Galaxias\Pegaso as seiya;
    use \Dwes\Galaxias\Pegaso as Galaxus;
    /*
    use \Dwes\Galaxias\Pegaso\Galaxia as seiyaBro;

    $pg = new Seiya();
    $glc = new Galaxus();
    */
    seiya\observar("Observando a Seiya");
    Galaxus\observar("Observando a Galaxus");


