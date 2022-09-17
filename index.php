<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requin juvénile</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <main>
        <h1>Baby shark</h1>
        <div class="lyrics">
            <?php 
            // Membres de la famille Requin
            $family = ['baby', 'mommy', 'daddy', 'grandma', 'grandpa'];
            ?>
            <!-- Chaque couplet doit être représenté par une div comme celle-ci : -->
            <?php
            foreach ($family as $member) { ?>
            <div class="verse member-<?= $member ?>">
            <?php for ($index = 0; $index < 3; $index++) {
                $doo = 'doo';
                echo '<p>' . $member . ' shark ';
                for ($i = 0; $i < 6; $i++) {
                    echo $doo . ' ';
                }
                echo '<br></p>';
                }
                echo '<p>' . $member . ' shark ! </p></div>';
            }
            ?>
        </div>
    </main>
                    
</body>
</html>