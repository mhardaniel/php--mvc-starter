<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort String</title>
</head>
<body>
    <h1>Sort String</h1>

    <form action="sort" method="POST">
        <label for="input-string">Input string:</label><br>
        <input type="text" id="input-string" name="input-string" required><br><br>

        <label for="input-strategy">Choose a strategy:</label><br>
        <select name="input-strategy" id="input-strategy">
            <option value="bubble-sort">Bubble Sort</option>
            <option value="quick-sort">Quick Sort</option>
        </select><br><br>

        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
