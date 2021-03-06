<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dicossimo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/addWord.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
<main>
    <div class="background-gradiant viewport-size position-fixed under"></div>
    <header class="navbar shadow position-fixed d-flex justify-content-between align-items-center pr-3">
        <a class="logo" href="../index.html">
            <img src="../assets/images/logo.png" alt="logo retour au menu">
        </a>
        <button class="small-search" data-toggle="modal" data-target="#exampleModal">
            <div>
                <i class="fa fa-search text-white"></i>
            </div>
        </button>
    </header>
    <section class="container-fluid">
        <div>
            <input type="text" placeholder="quel mot ?">
        </div>
        <div class="mt-3">
            <h4>Définition du mot</h4>
            <textarea placeholder="Quelle est sa définition ?"></textarea>
            <div class="d-flex flex-row mt-3"><h6>tags</h6><button class="add-tag">+</button></div>
        </div>
        <div class="3-5">
            <a href=""><button>Ajouter</button></a>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="background-gradiant  d-flex flex-column align-items-center p-5">
                    <div class="p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Cherchez un mot</h5>
                    </div>
                    <div>
                        <input type="text" placeholder="recherche">
                        <div class="d-flex flex-row mt-3"><h6>tags</h6><button class="add-tag">+</button></div>
                    </div>
                    <div>
                        <button class="medium-search">
                            <div>
                                <i class="fa fa-search text-white"></i>
                            </div>
                        </button>
                        <h4>C'est parti</h4>
                    </div>
                    <div>
                        <button type="button" class="close btn" data-dismiss="modal">fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>