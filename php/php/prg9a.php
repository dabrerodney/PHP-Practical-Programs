<?php

$array = array('name' => 'John Doe', 'age' => 30);


$serializedArray = serialize($array);


echo $serializedArray. "\n";

$unserializedArray = unserialize($serializedArray);

echo $unserializedArray['name']. "\n";
echo $unserializedArray['age']. "\n";

?>