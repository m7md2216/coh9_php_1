<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Indie+Flower&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>My CV</title>
</head>

<body>
    <?php
     $cv_id = !empty($_GET['id']) ? $_GET['id'] :null;

     if(!empty($cv_id)) :

     $templates = json_decode(file_get_contents('./json_files/template.json'));

     $template = array_filter($templates, function($item) use ($cv_id){
        return $item -> id == $cv_id;
     });
     $template = $template[array_key_first($template)];

     ?>

    <header>
        <h1>My CV</h1>
        <nav id="cvNav">
            <ul>
                <li>
                    <a href="http://linkedin.com" target="_blank">Linkedin Account</a>
                </li>
                <li>
                    <a href="http://github.com">Github Account</a>
                </li>
            </ul>
        </nav>

        <!-- Basic bio -->
        <section>
            <div id="imageContainer">
                <img src='<?=$template -> img?>' alt="<?= $template -> name?> Photo" width="250" height="250">
                <!-- h2 was wrapped in span to change the block behavior -->
                <div id="BasicInfoWrapper">
                    <h2><?=$template -> name?></h2>
                    <h2><?=$template -> major?></h2>
                </div>
            </div>

            <p id="objectives"><?=$template -> obj?>

            </p>

        </section>
    </header>
    <hr>
    <main>
        <!-- Bio -->
        <section>
            <h3>Bio<span id="bioSimiC">:</span></h3>
            <p><strong>Full Name:</strong><?=$template -> name?></p>
            <p><strong>DOB:</strong> <?=$template -> date?></p>
            <p><strong>Place of Birth:</strong><?=$template -> place?></p>
        </section>
        <!-- Education -->
        <section>
            <h3>Education</h3>
            <ul>
                <li><?=$template -> university?></li>
               
            </ul>
        </section>
        <!-- Career -->
        <section>
            <h3>Working Experiece</h3>
            <ul>
                <li><?=$template -> work?></li>
             
            </ul>
        </section>
    </main>
    <footer>
        <!-- Contact Information -->
        <section>
            <address>
                <a href="<?=$template -> email?>"><?=$template -> email?></a>
            </address>
        </section>
        <section>
            <h1>ID number: <?=$template -> id?></h1>
        </section>

        <!-- Date of creation -->
      
    </footer>
    <?php
    ;else:
    ?>
<div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <p class="text-center">No CV was found</p>
            </div>
        </div>
    </div>
    <?php
   endif;?>

</body>

</html>