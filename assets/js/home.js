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
function scrollification(mainConter ,setyup = {i, scrollcont, itemsScroll, customButtons, butLeft, butRight}){
    if(setyup.i == null){
        out = document.getElementsByClassName(mainConter)[0];
    }else{
        out = document.getElementsByClassName(mainConter)[setyup.i];
    }

    if(setyup.customButtons === true){
        l = out.querySelector(setyup.butLeft);
        r = out.querySelector(setyup.butRight);
    }

    let out,
        a = out.querySelector(setyup.scrollCont),l, r,
        q =  out.querySelectorAll(setyup.itemsScroll);


    function getNext(){
        for(let i = 0; i < q.length; i++){
            if(q[i].getBoundingClientRect().left <= a.getBoundingClientRect().left + 50){
                let index = q[i].offsetWidth;
                $(a).scrollLeft($(a).scrollLeft() + index);
            }
        }
    }
    function getBack(){
        for(let i = 1; i < q.length; i++){
            if(q[i].getBoundingClientRect().left < a.getBoundingClientRect().left + 50){
                let index = q[i - 1].offsetWidth;
                $(a).scrollLeft($(a).scrollLeft() - index);}}}
}
