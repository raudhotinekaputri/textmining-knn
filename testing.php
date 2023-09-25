<!DOCTYPE html>
<html>
<head>
    <title>Document Classification</title>
</head>
<body>
    <h1>Document Classification</h1>
    <form method="POST" action="proses_testing.php">
        <label for="document">Document:</label>
        <textarea name="document" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Classify">
    </form>

    <?php
    // Tampilkan hasil klasifikasi disini setelah proses pemrosesan dokumen testing.
    if (isset($_GET["category"])) {
        $category = $_GET["category"];
        echo "<p>Category: $category</p>";
    }
    ?>
</body>
</html>
