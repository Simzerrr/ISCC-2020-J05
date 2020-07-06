<DOCTYPE html>
    <meta charset="UTF-8">
    <html lang="fr">
    <head> 
        <title>Vitrine</title>
        <link rel="stylesheet" href="style/vitrine.css">
    </head>    
    <body>
        <head> 
            <title>Summer Code Camp</title>
            <meta name="viewport" content="width=device=width, initial-scale=1.0">
            <link href="style/vitrine.css" rel="stylesheet">
        </head>    
        <header>
            <h1> Contacts </h1>
        </header>
        <main>
            <form action="/my handling-form-page" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
            </form>
        </main>
        <?php
        include "footer.php"
        ?>
</body>
    </html>