<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="cv.css">
</head>
<body>
    <div class="cv-container">

        <div class="section">
            
            <p class="name"> <?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?></p>
            <p class="meslek"> <?php echo isset($_POST["meslek"]) ? $_POST["meslek"] : ""; ?></p>
            <hr>
            <div class="contact">
                <div class="section-back">
                    <h2 class="iletisim">İletişim</h2>
                </div>
                <p><strong>E-posta:</strong> <?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?></p>
                <p><strong>Telefon:</strong> <?php echo isset($_POST["phone"]) ? $_POST["phone"] : ""; ?></p>
            </div>
            
        </div>

        <div class="section">
            <div class="section-back">
                <h2>Eğitim</h2>
            </div>
            <div class="information">
                <?php if(isset($_POST["education"])): ?>
                    <p><?php echo $_POST["education"]; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="section">
            <div class="section-back">
                <h2>Beceriler</h2>
            </div>
            <div class="information">
                <?php if(isset($_POST["skills"])): ?>
                    <p><?php echo $_POST["skills"]; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="section">
            <div class="section-back">
                <h2>Sertifikalar</h2>
            </div>
            <ul class="sertifikalar">
                <?php
                    if(isset($_POST["sertifika"])) {
                        $sertifikalar = explode("\n", $_POST["sertifika"]);
                        foreach($sertifikalar as $sertifika) {
                            echo "<li>$sertifika</li>";
                        }
                    }
                ?>
            </ul>
        </div>

    </div>
</body>
</html>
