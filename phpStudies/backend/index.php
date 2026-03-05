<?php 

// Apriamo un array per mettere gli errori dentro se esistano

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    

    // Prendiamo i dati che viene da il metodo "POST"
        // Facciamo trim per prendere i spazi dal parte di prima e in fondo del testo
    $firstName = trim($_POST["firstName"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $formText = trim($_POST["formText"] ?? "");


    // VALIDATIONS

    // Controlliamo il nome -> e mettiamo il mesaggio errore in array $errors[]
    if($firstName === ""){
        $errors[] = "First name cannot be empty!";
    }
    if($firstName !== "" && !preg_match("/^[a-zA-Z\s]+$/", $firstName)){ // ho imparato un po di Regex in questo parte
        $errors[] = "First name must contain only letters!";
    }

    // Controlliamo l'email se e' vuoto -> e mettiamo il mesaggio errore in array $errors[]
    if($email === ""){
        $errors[] = "Email cannot be empty!";
    }

    // Controlliamo l'email se non e' vuoto ma non e' in modo giusto -> e mettiamo il mesaggio errore in array $errors[]
    if ($email !== "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Ho imparato questo funzione per validare l'email.

        $errors[] = "Invalid email format!";
    }

    // Controlliamo il testo se e' vuoto -> e mettiamo il mesaggio errore in array $errors[]
    if ($formText === "") {
        $errors[] = "Application text cannot be empty!";
    }

    // Controlliamo il testo se non e' vuoto ma non e' in modo giusto -> e mettiamo il mesaggio errore in array $errors[]
        // NOTE: Potevo usare elseif per fargli piu pulito.

    if($formText !== "" && strlen($formText) > 300){
        $errors[] = "The message cannot be more than 300 characters!";
    }
    
    // Se non c'e' un errore ADD TO JSON FILE:

    if(empty($errors)) {

        $formData = [
            "firstName" => $firstName,
            "email" => $email,
            "text" => $formText,
            "sentAt" => date("Y-m-d H:i:s")
        ];

        $jsonFile = 'data.json';

        if(file_exists($jsonFile)){

        $currentData = json_decode(file_get_contents($jsonFile), true);

        if(!is_array($currentData)){

        $currentData = [];
        }
        } else {
            $currentData = [];
        }

        $currentData[] = $formData;

        file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));

        echo "Form has been sent successfully!";
    }
}

?>

<?php if(!empty($errors)) : ?>
    <ul style="color:red;"> 

        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?> </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>