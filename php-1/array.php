<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
    SOAL NO 1 
    Kelompokkan nama-nama di bawah ini ke dalam Array. 
    Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
    Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" 
    */
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    echo $kids[0]." ". $kids[1]." ". $kids[2]." ". $kids[3]." ". $kids[4]." ". $kids[5]."<br>";
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
    echo $adults[0]." ". $adults[1]." ". $adults[2]." ". $adults[3]." ". $adults[4]."<br>";
    echo "<h3> Soal 2</h3>";
    /* 
    SOAL NO 2 
    Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count ($kids); // Berapa panjang array kids 
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    for ($i = 1; $i < count($kids); $i++) {
        echo "<li> $kids[$i] </li>";
    }
    
    
    // Lanjutkan 
    echo "</ol>";
    echo "Total Adults: " . count ($adults); // Berapa panjang array adults 
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    for ($i = 1; $i < count($adults); $i++) {
        echo "<li> $adults[$i] </li>";
    }
    // Lanjutkan 
    echo "</ol>";
    /* 
    SOAL No 3 
    Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi 
    */
    
    $characters = array(
        array(
            "Name" => "Will Byers", 
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive",
        ),

        array(
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive",
        ),

        array(
            "Name" => "Jim Hooper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased",
        ),

        array(
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive",
        ),
    );
    echo "<pre>";
    print_r($characters);
    echo "</pre>";
    ?>
</body>

</html>