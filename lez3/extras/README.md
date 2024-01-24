# Includere un modulo esterno in PHP

Esistono diverse funzioni per il *file inclusion* in PHP, tutte queste funzioni hanno lo scopo di includere un file in una pagina PHP, vediamo le loro differenze:
* **include**:  Se la funzione *include()* non reisce a trovare il file specificato lancia un messaggio di warning, ma **l'esecuzione dello script continua e non si ferma**.
* **require**: Questa funzione viene usata per aggiungere un This function is utilized to add a file in a PHP page. In case of require() function if it can't locate a specified file at that time it will generate a fatal error and it will stop the content execution.
* **include_once**: Questa funzione viene usata per aggiungere un file una volta sola. Non viene incluso nuovamente un file che è già stato caricato. Inoltre, come l'*include* se non è possibile localizzare un file specificato, viene generato un warning message senza stoppare l'esecuzione.
* **require_once**: In caso il codice da un file php è già stato incluso allora non viene incluso una seconda volta. Se il file specificato non viene localizzato viene generato un errore fatale stoppando l'esecuzione.


I warning message sono visibili dall'interprete PHP.