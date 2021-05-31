let d4roll = document.getElementById('d4Roll');
let d6roll = document.getElementById('d6Roll');
let d8roll = document.getElementById('d8Roll');
let d10roll = document.getElementById('d10Roll');
let d12roll = document.getElementById('d12Roll');
let d20roll = document.getElementById('d20Roll');
let d100roll = document.getElementById('d100Roll');


function randomNumber(range) {
    return Math.round( Math.random() * range );
}

// --- d4 --- //
function d4Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 4 + 1);
}

// --- d6 --- //
function d6Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 6 + 1);
}

// --- d8 --- //
function d8Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 8 + 1);
}

// --- d10 --- //
function d10Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 10 + 1);
}

// --- d12 --- //
function d12Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 12 + 1);
}

// --- d20 --- //
function d20Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 20 + 1);
}

// --- d100 --- //
function d100Roll(){
    document.getElementById('display').innerHTML = Math.floor(Math.random() * 100 + 1);
}


d4roll.addEventListener("click", function (){
    d4Roll();
});

d6roll.addEventListener("click", function (){
    d6Roll();
});

d8roll.addEventListener("click", function (){
    d8Roll();
});

d10roll.addEventListener("click", function (){
    d10Roll();
});

d12roll.addEventListener("click", function (){
    d12Roll();
});

d20roll.addEventListener("click", function (){
    d20Roll();
});

d100roll.addEventListener("click", function (){
    d100Roll();
})
