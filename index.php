
<?php 

function narsykle($naudotojas){

    if(strpos($naudotojas, 'Edge')){

        echo '<body style= "background-color:blue">';
        echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Microsoft_Edge_logo_%282019%29.svg/480px-Microsoft_Edge_logo_%282019%29.svg.png" alt="Chrome">';

    } 
    elseif(strpos($naudotojas, 'Chrome')){

        echo '<body style= "background-color:black">';
        echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/480px-Google_Chrome_icon_%28February_2022%29.svg.png" alt="Chrome">';
    } 
    elseif(strpos($naudotojas, 'Mozilla')){

        echo '<body style= "background-color:red">';
        echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Mozilla_Firefox_logo_2013.svg/967px-Mozilla_Firefox_logo_2013.svg.png" alt="Chrome">';
        
    } 
    else{

        return 'Sios narsykles neapipavidaliname... :(';

    }
}

echo narsykle($_SERVER['HTTP_USER_AGENT']);


?>