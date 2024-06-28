
<!-- Завдання:Користувач вводить текст в поле, нажимає кнопку і зі
списку показються лише країни, які задовільняють умовам
пошуку (стрічка пошуку в результатах виділяється жирним
текстом та замальовується в червоний колір).
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фільтр країн</title>
    <style>
        .highlight {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>

<?php

$countries = array(
    'Poland',
    'Portugal',
    'Singapore',
    'French Polynesia'    
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchInput = isset($_POST['searchInput']) ? strtolower($_POST['searchInput']) : '';
    
    echo '<ul>';
    foreach ($countries as $country) {
        $highlightedName = str_ireplace($searchInput, '<span class="highlight">' . $searchInput . '</span>', $country);
        echo "<li>$highlightedName</li>";
    }
    echo '</ul>';
}
?>

<form method="post">
    <label for="searchInput">Введіть текст для пошуку:</label>
    <input type="text" id="searchInput" name="searchInput">
    <button type="submit">Пошук</button>
</form>

</body>
</html>



