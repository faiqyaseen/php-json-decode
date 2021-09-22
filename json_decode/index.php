<?php

$jsonstring = "myjson.json";
$jsondata = file_get_contents($jsonstring);
// echo $jsondata;

$arr =  json_decode($jsondata,true);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// foreach($arr as list("id" => $id, "name" => $name, "age" => $age, "email" => $email, "country" => $country, "gender" => $gender)){
//     echo "
//         <table class='' border='1px' cellpadding='10px' width='100%'>
//             <tr>
//                 <td>{$id}</td>
//                 <td>{$name}</td>
//                 <td>{$age}</td>
//                 <td>{$email}</td>
//                 <td>{$country}</td>
//                 <td>{$gender}</td>
//             </tr>
//         </table>
//     ";
// }
foreach($arr as $row){
    echo "
        <table class='' border='1px' cellpadding='10px' width='100%'>
            <tr>
                <td>{$row["id"]}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['email']}</td>
                <td>{$row['country']}</td>
                <td>{$row['gender']}</td>
            </tr>
        </table>
    ";
}



?>