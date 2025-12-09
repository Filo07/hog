<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   <header>
        <a href="index.php">
            <img src="wild hog.png" alt="logo">
        </a>
        <div class="kundvagn"><p>Kundvagnssumma: <span id="totalPris">0</span> kr</p></div>
        <nav>
            <a href="merch.php"><strong>Merch</strong></a>
            <a href="index.php"><strong>Hem</strong></a>
        </nav>
    </header>
    <main>
        <section>
            <h1>Motor-Hogs</h1>
            <p>Färg och modell vald av John Pork själv</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8hX9kPwFhUWWB9tPDgNs4QZRBRROgWz33g&s" alt="Hog Hojar" title="53000 kr: Slumpmässig variant vald av John Pork" data-pris="53000" class="produkt">
        </section>
        <section>
            <h1>Hog-Feed</h1>
            <p>Kvalitets fläsk, jagad rakt ifrån våra vilda skogar</p>
            <img src="hogmat.png" alt="Fläsk" title="500 kr/st: Vildsvinsribs marinerade i John Porks egen sås" data-pris="500" class="produkt">
        </section>
        <section>
           <h1>Matlagningslektioner</h1>
           <p>Matlagningslektioner, inget speciellt</p>
           <img src="https://www.medborgarskolan.se/wt/media/images/23558252-man-cooking-meat-steak-on-kitchen---.width-1000.jpg" alt="Laga mat" title="2000 kr: Lär dig laga vildsvin med John Pork själv" data-pris="2000" class="produkt">
        </section>
    </main>
    <footer>
        <p>© 2025 WILD HOGS</p>
    </footer>
</body>
</html>
<script>
        let total = 0;

        const bilder = document.querySelectorAll(".produkt");
        const totalRuta = document.getElementById("totalPris");

        bilder.forEach(bild => {
        bild.addEventListener("click", () => {
            const pris = parseInt(bild.dataset.pris, 10);
            total += pris;
            totalRuta.textContent = total;
        });
        });

</script>