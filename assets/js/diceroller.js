const rolls = document.querySelectorAll('div[id*="Roll"]');
let d4roll = document.getElementById('d4Roll');
let d6roll = document.getElementById('d6Roll');
let d8roll = document.getElementById('d8Roll');
let d10roll = document.getElementById('d10Roll');
let d12roll = document.getElementById('d12Roll');
let d20roll = document.getElementById('d20Roll');
let d100roll = document.getElementById('d100Roll');

const display = document.getElementById('display');

function roll(amount) {
    display.innerHTML = Math.floor(Math.random() * amount + 1).toString();
}

d4roll.addEventListener("click", () => roll(4));
d6roll.addEventListener("click", () => roll(6));
d8roll.addEventListener("click", () => roll(8));
d10roll.addEventListener("click", () => roll(10));
d12roll.addEventListener("click", () => roll(12));
d20roll.addEventListener("click", () => roll(20));
d100roll.addEventListener("click", () => roll(100));