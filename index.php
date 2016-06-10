<?php
$client = new SoapClient('http://www2.transparencia.pe.gov.br/axis/Portlet_gasto_transparencia_EmpenhoDespesaServiceSoap?wsdl');

$function = 'EmpenhoDespesaServiceSoap';

$arguments= array(
                  'cpfCnpj'   => '10510410000136',
                  'name'      => 'DOCES FINOS LTDA - EPP',
                  'mesInicial' => 1,
                  'mesFinal'   => 12,
                  'ano'        => 2015
                );
$options = array('location' => 'http://www2.transparencia.pe.gov.br/axis/Portlet_gasto_transparencia_CredorServiceSoap');

$result = $client->__soapCall($function, $arguments, $options);

echo 'Response: ';
print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
asdfasdfasfdasdf
</body>
</html>
