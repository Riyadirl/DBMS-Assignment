<?php
// Define variables
$title = $ingredients = '';
$errors = array('title' => '', 'ingredients' => '');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Validate title
    if (empty($_POST['title'])) {
        $errors['title'] = 'Title is required';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    // Validate ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'Ingredients are required';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma-separated list of letters and spaces only';
        }
    }

    // If there are no errors, insert the pizza into the database
    if (!array_filter($errors)) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        // Create SQL query to insert pizza
        $sql = "INSERT INTO pizzas(title, ingredients) VALUES('$title', '$ingredients')";

        // Save the pizza to the database
        if (mysqli_query($conn, $sql)) {
            // Redirect to index.php after successful insertion
            header('Location: index.php');
        } else {
            echo 'Query error: ' . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html>
<?php include('./header.php'); ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Ingredients (comma-separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('./footer.php'); ?>

</html>