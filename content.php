<?php
header('Content-Type: text/html; charset=utf-8');
$arr = array(

"Μέσα στη βιασύνη τους, χάσανε την πόρτα, βγήκαν από άλλη έξοδο
Το όνειρο ξέμεινε έτσι από Ήρωες, για πάντα παγιδευμένο σε μια ατέρμονη επανάληψη",

"Και η σαπίλα έσταζε από τα μάτια τους μέσα στην καρδιά τους.
Και μετά;
Σιωπή.",

"ΕΙΜΑΙ ΨΕΥΤΗΣ.
Ο Στρέφης, όταν βρέχει κατοικείται.",

"Κεραυνοί. Βρέχει.",

'"Übung macht den Meister"',

"Ευτυχία είναι η γνώση πως στα αλήθεια, δεν χρειάζεσαι τίποτα.
Ευτυχία είναι να μένεις κάθε μέρα επειδή έχεις κάτι να κάνεις. Ακόμα.",

"Λιτή αφθονία",

"Αυτή η γλυκιά παράνοια που τη λέμε ύπαρξη",

"Θέλω να φύγω από αυτόν τον κόσμο
να πάω να μείνω με τις σκέψεις μου
εκεί που η χαρά δεν είναι υποχρέωση
εκεί που η μέθη δεν είναι αυτοσκοπός",

"Ακούγοντας το κάλεσμα του βουνού
ανέβηκα πάνω στα βράχια
για να χαρώ από κοντά
του φεγγαριού το φως",

"Σήμερα, ξαναμπήκα στη σπηλιά μου
εκεί, με όλα τα θεριά
Κι΄ομως
ήταν σαν σύντροφοι παλιοί οι δαίμονες της ύπαρξης μου
Και τραγουδήσαμε παρέα.",

"Μη φοβάσαι γι’αυτούς που αφήνεις πίσω
Στ’ αλήθεια, δεν ήτανε ποτέ μαζί σου
Στ’ αλήθεια, δε θα σε αφήσουν ποτέ",

"Οι δομές αντεξούσιας εμπεριέχουν μέσα τους εξουσιαστικά στοιχεία, αντίθετα σε αυτές",
);
echo json_encode($arr);
/*
shuffle($arr);
echo str_replace("\n","<br />",$arr[array_rand($arr)]);
*/
?>
