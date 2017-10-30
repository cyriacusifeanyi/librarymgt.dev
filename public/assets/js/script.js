// var a = document.getElementById('checkAll');
// var b = document.getElementById('checkBooks');
// var c = document.getElementById('checkVideo');
// var d = document.getElementById('checkMusic');
// var e = document.getElementById('checkOthers');

// all views
//  /resources/view/pages/index page & /resources/view/pages/simplesearch.blade.php specific
function checkControl() {
    var a = document.getElementById('checkAll');
    var b = document.getElementById('checkBooks');
    var c = document.getElementById('checkVideo');
    var d = document.getElementById('checkAudio');
    var e = document.getElementById('checkOthers');


    if (a.hasAttribute('checked')) {

        // a.removeAttribute('checked');
        document.getElementById('checkAll').checked =false;
        // h.addEventListener("click", dothing2);
    }
    // else document.getElementById('checkAll').checked = ((b.hasAttribute('checked') || c.hasAttribute('checked') || d.hasAttribute('checked') || e.hasAttribute('checked')));

}

function allCheck() {
    // var a = document.getElementById('checkAll');
    // var b = document.getElementById('checkBooks');
    // var c = document.getElementById('checkVideo');
    // var d = document.getElementById('checkAudio');
    // var e = document.getElementById('checkOthers');

    // if (a.hasAttribute('checked'))
    // {
        document.getElementById('checkAll').checked = true;
        document.getElementById('checkBooks').checked = false;
        document.getElementById('checkVideo').checked = false;
        document.getElementById('checkAudio').checked = false;
        document.getElementById('checkOthers').checked = false;


        // a.setAttribute('checked','checked');
        // b.removeAttribute('checked');
        // c.removeAttribute('checked');
        // d.removeAttribute('checked');
        // e.removeAttribute('checked');
//     }
//     else {
//         a.setAttribute('checked','checked');
//         b.removeAttribute('checked');
//         c.removeAttribute('checked');
//         d.removeAttribute('checked');
//         e.removeAttribute('checked');
//     }
}


//  End all views





// /resources/view/pages/create.blade.php specific
function disabilityYes(){
    var x = document.getElementById('disYes');
    x.style.display = 'inline-block';
}
function disabilityNo(){
    var x = document.getElementById('disYes');
    x.style.display = 'none';

}
//end of /resources/view/pages/create.blade.php


//index page search "feeling lucky button"
function changeFormMethod() {
    //values setters
    document.getElementById('checkAll').checked = true;
    // document.getElementById('searchBox').value = "Random Word";

    //execution
    document.getElementById('searchForm').action="simplesearch";/*random result*//*lateri will change the action*/
}