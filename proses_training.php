<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $document = $_POST["document"];
    $category = $_POST["category"];

    // Validasi input (Anda dapat menambahkan validasi sesuai kebutuhan).
    if (empty($document) || empty($category)) {
        echo "Document and category are required fields.";
        // Tambahkan logika lain jika diperlukan, seperti menampilkan pesan kesalahan.
    } else {
        // Simpan data pelatihan ke dalam file teks (misalnya, training_data.txt).
        $trainingData = "$document|$category\n"; // Format: Dokumen|Kategori

        // Buka file untuk ditulis (gunakan mode "a" untuk menambahkan data ke file yang sudah ada).
        $file = fopen("training_data.txt", "a");

        // Tulis data pelatihan ke dalam file.
        if ($file) {
            fwrite($file, $trainingData);
            fclose($file);

            // Redirect kembali ke halaman input training data dengan pesan sukses.
            header("Location: training.php?success=1");
        } else {
            echo "Failed to save training data.";
            // Tambahkan logika lain jika ada masalah dengan penyimpanan data.
        }
    }
}
?>
