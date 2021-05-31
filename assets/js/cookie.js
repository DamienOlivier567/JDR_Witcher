const $ = (selector) => document.querySelector(selector)

$('.cookies-accept').addEventListener('click', e => {
    $('.cookies').style.transform = 'translateY(60%) scale(0.8)'
    $('.cookies').style.opacity = '0'
    $('.cookies').style.filter = 'blur(3px)'

    setTimeout(() => {
        $('.cookies').style.transform = 'translateY(-100%)'
    }, 400)

    setTimeout(() => {
        $('.cookies').style.transform = 'translateY(0) scale(1)'
        $('.cookies').style.opacity = '1'
        $('.cookies').style.filter = 'blur(0)'
    }, 900)
})