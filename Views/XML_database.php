<?php
session_start();
ob_start();
$stylesheets = ['main'];
$list_clients = $request_result->fetchAll(PDO::FETCH_ASSOC);
if(sizeof($list_clients) != 0){
    $XMLFile = new DOMDocument("1.0", "utf-8");
    $XMLFile->appendChild($clients = $XMLFile->createElement('clients'));
    foreach($list_clients as $client){
        $clients->appendChild($XML_client = $XMLFile->createElement('client'));
        $XML_client->setAttribute('GUIDClient',$client['GUIDClient']);
        unset($client["GUIDClient"]);
        unset($client["statut_XML"]);
        foreach($client as $key=>$attribute){
            $XML_client->appendChild($XMLFile->createElement($key, $attribute));
        }
    }

    $XMLFile->formatOutput = true;
    if (file_exists('Public/XML/' . date('d-m-Y'))){
        $XMLFile->save('Public/XML/' . date('d/m/Y') . '/listeClients'. strval(scandir('Public/XML/' . date('d/m/Y') . '/listeClients')) . '.xml');
    }else{
        mkdir('Public/XML/' . date('d-m-Y'));
        $XMLFile->save('Public/XML/' . date('d-m-Y') . '/listeClients.xml');
    }


}

?>

<?php
$content = ob_get_clean();
require('Views/template.php')
?>
