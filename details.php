<?php
// Check if the id parameter is provided in the URL
if (isset($_GET['id'])) {
    // Get the id from the URL
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create SQL query to retrieve the pizza details
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);

    // Fetch the resulting row as an array
    $pizza = mysqli_fetch_assoc($result);

    // Free the result from memory
    mysqli_free_result($result);

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to index.php if id parameter is not provided
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<?php include('./header.php'); ?>
<div class="container center grey-text">
    <?php if ($pizza) : ?>
    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
    <p><?php echo date($pizza['created_at']); ?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    <?php else : ?>
    <h5>No pizza found.</h5>
    <?php endif; ?>
</div>
<?php include('./footer.php'); ?>

</html>