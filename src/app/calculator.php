<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAlKULATOR PHP</title>
</head>
<body class = "min-h-screen flex items-center justify-center bg-zinc-50">
    <div class = "bg-violet-700 p-3 rounded shadow-2xl w-96 ">
        <h2 class = "text-4xl text-black mb-4">TUGAS</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mb-4">
    <div class = "mb-4">
        <label for ="operator" class ="block text-sm font-mono text-white">Input 1</label>
        <input type="text" name="num1" id="num1" placeholder="Enter first number" class="mt-1 p-2 w-full border rounded">
    </div>
    <div class ="mb-4">
    <label for ="operator" class ="block text-sm font-mono text-gray-200">Operator</label>
    <select name = "operator" id = "perator">
        <option class = "text-black" value = "+">+</option>
        <option class = "text-black" value = "-">-</option>
        <option class = "text-black" value = "*">*</option>
        <option class = "text-black" value = "/">/</option>
        
    </select>
</div>
<div class = "mb-4">
<label for ="operator" class ="block text-sm font-mono text-white">Input 2</label>
<input type="text" name="num2" id="num2" placeholder="Enter second number" class="mt-1 p-2 w-full border rounded">
</div>
<button type = "submit" name = "calculate" class = "bg-blue-500 text-white p-2 rounded hover: to-blue-700 ">calculate</button>
    </>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
    // Menginput Nilai
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    // Mengkalkulasikan si Operator dengan angka
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            // Check for division by zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operator";
            break;
    }

    // Tampilkan Output
    echo "<p class='text-lg mt-4'>Result: $result</p>";
}
?>
</div>
</body>
</html>
