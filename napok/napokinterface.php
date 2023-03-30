<?php

if(isset($_POST['btnSend'])){
    if(strlen($_POST['txtDatum']==13)){
        $datum=$_POST['txtDatum'];
        $min=$_POST['nbMin'];
        $max=$_POST['nbMax'];
        $xml=simplexml_load_file('napok.xml');

        $newNode=new SimpleXMLElement($xml->asXML());
        $nap=$newNode->addChild('nap');
        $nap->addAttribute('datum',$datum);
        $nap->addChild('min',$min);
        $nap->addChild('max',$max);
        file_put_contents('napok.xml',$xml->asXML());
    }
    else{
        print 'Hibás dátum formátum';
    }
}

?>

<img src="napok.php">

<form method="post">
    <input type="text" name="txtDatum" placeholder="ÉÉÉÉ. HH. NN."><br />
    Napi Max: <input type="number" name="nbMax" min="20" max="50" value="0"><br />
    Napi Min: <input type="number" name="nbMax" min="20" max="50" value="0"><br />
    <input type="submit" name="btnSend" value="Mentés">

</form>