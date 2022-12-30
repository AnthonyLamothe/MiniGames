<?php
?>
 
<head>
    <title>Minigames</title>
    <meta charset="utf-8" name="viewport" content="width=device-width" />

    <style>
        <?php require 'styles/index.css'; ?>
        <?php require 'styles/must-have.css'; ?>
    </style>
</head>

<body>
    <div class="board-container">
        <div class="title title-mancala">
            Mancala
        </div>
    
        <div class="board board-mancala">

            <div class="mancala-goal mancala-glao-p-1"></div>
            <div class="mancala-players">
                <div class="mancala-player-side mancala-p-1">
                    <!-- <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div> -->
                </div>
                <div class="mancala-player-side mancala-p-2">
                    <!-- <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div>
                    <div class="mancala-hole"></div> -->
                </div>
            </div>
            <div class="mancala-goal mancala-glao-p-2"></div>
        </div>
    </div>
</body>

<script>
    function ShowMenu() {
        document.getElementById("mobile-popup-menu").style.display = "flex";
    }

</script>