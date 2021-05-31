outtester = document.getElementsByClassName('scrolly');
for(let i = 0; i < outtester.length; i++){
    scrollification('scrolly', setyup = {
        i: i,
        scrollCont: '.carouselPre',
        itemsScroll: '.itemsC',
        customButtons: true,
        butLeft: '#left',
        butRight: '#right'})
}

