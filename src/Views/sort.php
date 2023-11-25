<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorted String</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Sorted String</h1>

    <?php if($error != ''){ ?>
    <span class="error">* <?php echo $error;?></span>
    <br><br>
    <?php } ?>

    <form action="" method="POST">
        <label for="input-string">Input string:</label><br>
        <input type="text" id="input-string" name="input-string" value="<?php echo $inputString; ?>" required><br><br>

        <label for="input-strategy">Choose a strategy:</label><br>
        <select name="input-strategy" id="input-strategy">
            <option value="bubble-sort" <?php echo ($inputStrategy == 'bubble-sort') ? 'selected' : '' ?>>Bubble Sort</option>
            <option value="quick-sort" <?php echo ($inputStrategy == 'quick-sort') ? 'selected' : '' ?>>Quick Sort</option>
        </select><br><br>

        <br>
        <input type="submit" value="Submit">
    </form>

    <?php if($sortedString){ ?>
    <br><br>
    <label><strong>Sorted String is:</strong> <?php echo $sortedString; ?></label>
    <?php } ?>
</body>
</html>
