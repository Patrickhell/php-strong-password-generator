<?php

include_once __DIR__ . '/utilities/functions.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-strong-password-generator</title>
</head>
<body>

<!-- 
    Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
    L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà 
questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) 
da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.
php che includeremo poi nella pagina principale

BONUS 1 : Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina 
dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

BONUS 2: Milestone 4
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
-->





<div class="card mb-3 m-auto mt-5" style="max-width: 800px;"  >
    <div class="row g-0 ">
        <div class="headerCard">
            <h5 class="card-title">Lunghezza della password:</h5>
            <h6 class="card-subtitle mb-2 text-muted">Consenti ripetizioni di uno o più caratteri:</h6>
        </div>
        <div>
            <div class="card-body">
                <form action="./index.php" method="GET" class="d-flex">
                    <div class="leftSide ">        
                        <input class="btn btn-primary " type="submit" value="Invia">
                        <input class="btn btn-secondary mx-3" type="reset" value="Annulla">
                    </div>
                    
                    <div class=" rightSide m-auto ">
                        <input type="text" name="password" value = <?php echo generatedPassword(8)?> >
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="accept">
                                <label class="form-check-label" for="flexRadioDefault2">
                                 Sì
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="refuse">
                                <label class="form-check-label" for="flexRadioDefault2">
                                   No
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="form-check">
                 
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="letters"  checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  Lettere
                                </label>
                            </div>
                            <div class="form-check">
                  
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="numbers"  checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                   Numeri
                                </label>
                            </div>
                            <div class="form-check">
                  
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"name="symbols"  checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  Simboli
                                </label>
                            </div>
                        </div>
                   </div>
                </form>
     
            </div>
        </div>
    </div>
</div>
</body>
</html>