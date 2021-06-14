<?php
require_once "../_Partials/header.view.php"
?>

<body>
    <div id="dice">

        <button id="d4Roll">
            <p>1d4</p>
        </button>

        <button id="d6Roll">
            <p>1d6</p>
        </button>

        <button id="d8Roll">
            <p>1d8</p>
        </button>

        <button id="d10Roll">
            <p>1d10</p>
        </button>

        <button id="d12Roll">
            <p>1d12</p>
        </button>

        <button id="d20Roll">
            <p>1d20</p>
        </button>

        <button id="d100Roll">
            <p>1d100</p>
        </button>

    </div>

    <div class="result">
        <div id="display"></div>
    </div>


<script src="../../assets/js/diceroller.js"></script>
