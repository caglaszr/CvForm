<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgi Girişi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1 class="title">Bilgi Formu</h1>
    <form action="cv.php" method="post">
        <label for="name">Ad Soyad:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="meslek">Meslek:</label>
        <input type="text" id="name" name="meslek" required><br>
        
        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" name="phone" required><br>
        
        <label for="education">Eğitim:</label><br>
        <textarea id="education" name="education" rows="4" required></textarea><br>
        
        <label for="sertifika">Sertifikalar:</label><br>
        <textarea id="sertifika" name="sertifika" rows="4" required></textarea><br>
        
        <label for="skills">Beceriler:</label><br>
        <textarea id="skills" name="skills" rows="4" required></textarea><br>
        
        <input type="submit" value="Gönder">
    </form>
    </div>
</body>
</html>
