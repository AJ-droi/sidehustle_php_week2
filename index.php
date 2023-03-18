<?php
    
$voter = array(
    "age" => 25,
    "hasPvc" => true,
    "wardNum" => "020"
);

if ($voter["age"] >= 18 && $voter["hasPvc"] == true && $voter["wardNum"] == "020") {
    echo "You are eligible to vote";
} else if($voter["age"] < 18){
    echo "You are not eligible to vote because you are not 18 years old";
}else if($voter["hasPvc"] == false){
    echo "You are not eligible to vote because you do not have PVC";
}else if($voter["wardNum"] != "020"){
    echo "You are not eligible to vote because you are not in the right ward";
}
?>


