<h1> 216090307039 </h1> 
<hr>

<?php

function countNotes($amount)
{
    $denominations = array(100, 50, 20, 10, 5, 2, 1); 

    $notesCount = array(); 

    foreach ($denominations as $note) {
        if ($amount >= $note) {
            $count = (int)($amount / $note);  
            $notesCount[$note] = $count; 
            $amount -= $count * $note; 
        }
    }

    return $notesCount;
}

$amount = 39;
$notes = countNotes($amount);

echo "Amount: Rs. $amount"."<br>";
echo "Minimum number of notes:"."<br>";

foreach ($notes as $note => $count) {
    if ($count > 0) {
        echo "Rs. $note : $count notes"."<br>";
    }
}
?>