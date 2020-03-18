<?php  

    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }

    $item = [];
    $success = false;

    // criação de arrays de intens vazios
    if (empty($data['name'])) {
        $item['name'] = 'Nome';
    }

    if (empty($data['address'])) {
        $item['address'] = 'Endereço';
    }

    if (empty($data['city'])) {
        $item['city'] = 'Cidade';
    }

    if (empty($data['state'])) {
        $item['state'] = 'Estado';
    }

    if (empty($data['zip'])) {
        $item['zip'] = 'CEP';
    }

    if (empty($data['phone'])) {
        $item['phone'] = 'Telefone';
    }

    $itens = implode(', ', $item);
    $extras = implode(' e ', $data['extras']);

    // validação dos campos importantes
    if ( 
        !empty($data['beans'])  AND !empty($data['beantype']) AND 
        !empty ($data['name'])  AND !empty($data['address'])  AND 
        !empty ($data['city'])  AND !empty ($data['state'])   AND
        !empty ($data['zip'])   AND !empty ($data['phone']) 
    ) {
        $success = true;

        // código para persistir os dados da aplicação
    }
    
    require_once 'pedido.php';
