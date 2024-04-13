<!DOCTYPE html>
<html>
<head>
    <title>Form with ListBox and ComboBox</title>
</head>
<body>

<h2>Form with ListBox and ComboBox</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- ListBox -->
    <label for="listbox">Select an item from ListBox:</label><br>
    <select name="listbox" id="listbox">
        <option value="item1">Item 1</option>
        <option value="item2">Item 2</option>
        <option value="item3">Item 3</option>
        <option value="item4">Item 4</option>
    </select>
    <br><br>

    <!-- ComboBox -->
    <label for="combobox">Select an item from ComboBox:</label><br>
    <select name="combobox" id="combobox">
        <option value="item1">Item 1</option>
        <option value="item2">Item 2</option>
        <option value="item3">Item 3</option>
        <option value="item4">Item 4</option>
    </select>
    <br><br>

    <!-- Submit Button -->
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from ListBox and ComboBox
    $listbox_value = $_POST["listbox"];
    $combobox_value = $_POST["combobox"];

    // Display selected values
    echo "<h3>Selected Values:</h3>";
    echo "ListBox: " . $listbox_value . "<br>";
    echo "ComboBox: " . $combobox_value . "<br>";
}
?>

</body>
</html>
