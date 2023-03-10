<?php include './view/header.php'; ?>
<main>
    <h1>Add Item</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_item">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Title:</label>
        <input type="text" name="title" />
        <br>

        <label>Decription:</label>
        <input type="text" name="description" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Item" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_items">View To Do List</a>
    </p>

</main>
<?php include './view/footer.php'; ?>