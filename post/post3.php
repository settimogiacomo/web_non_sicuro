<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sito web non sicuro">
    <meta name="author" content="sdg, sgc">
    <link rel="stylesheet" href="../style.css">
    <title>Progetto Web NON Sicuro</title>
</head>

<body>
    <nav>
        <span><a href="../index.html">HOMEPAGE</a></span>
        <span><a href="../login.html">LOGIN</a></span>
    </nav>
    <img src="../images/music.png" class="titolo">
    <h2 class="txtTitolo">INNERSPEAKER</h2>
    <div class="txtPost">
    <p>From the Vines to Wolfmother to Jet, recent Aussie rock exports have been painfully indebted to arena rock-- quick to
    recycle a sound but rarely succeeding in revitalizing it. Perth three-piece Tame Impala play with some of the
    ingredients of arena rock as well but do so in aid of more leftfield, organic sounds and interesting excursions. The
    result is a cleanly executed and frequently dazzling debut: Innerspeaker is a psychedelia-heavy outing that toys with
    paisley pop, stoner vibes, and an expansive array of swirling guitars.</p>
    <p>On first listen, Innerspeaker provides a lot of dots to connect: There are patches of late-60s American psychedelia,
    buzzy Motor City riffage, and decades of British pop, ranging from the pastoral pop of the Kinks to the vivid
    expansiveness of the Verve to the narcotic warmth of the Stone Roses. Frontman Kevin Parker shares an eerie vocal
    similarity with John Lennon, both in tone and in the way he allows his voice to soar with each melodic turn or rhythmic
    surge. Though most of the album is a little restrained lyrically, Parker's rapturous phrasing conveys the meaning. Mixed
    by Flaming Lips collaborator Dave Fridmann, each component here is set on an even plane, allowing bass lines and
    delay-swept guitar bursts to melt into one another, cultivating a uniform feel that's vintage, far-out, and
    irrepressibly cool.</p>
    </div>
    <div class="frmComment">
    <form method="GET" action="../commento.php">

        <input type="hidden" name="post" value="3"></input>
        <label>Nome: </label><input type="text" name="nome" id="nome"><br>
        <label>Email: </label><input type="email" name="email" id="email"><br>
        <label>Commento</label><textarea name="commento" id="commento" placeholder="Leave a comment"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    </div>
    <div class="txtPost">
<h2>COMMENTI</h2>
<?php
$post=3;
  require("get_comments.php");
?>


</div>
    <footer>
        <p>Progetto Web Sicuro <br> CIME 2021/2022</p>
    </footer>
</body>

</html>