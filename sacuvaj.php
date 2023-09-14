<?php


// promeniti ove podatke zavisno od parametara za bazu podataka
$servername = "localhost";
$username   = "your_username";
$password   = "your_password";
$dbname     = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Neuspesno povezivanje " . $conn->connect_error);
}

// Retrieve data from POST request
$ime = $_POST['ime'];
$email = $_POST['email'];
$godine = $_POST['godine'];

// Save data to a JSON file
$data = [
    'ime'  => $ime,
    'email' => $email,
    'godine'   => $godine
];

$file = 'podaci.json';
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// Insert data into the database
$sql = "INSERT INTO users (ime, email, godine) VALUES ('$name', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Uspesno";
} else {
    echo "Greska: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
