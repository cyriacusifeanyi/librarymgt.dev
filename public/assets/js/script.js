//views/include/simplesearch.blade.php specific
function checkControl() {
    document.getElementById('checkAll').checked =false;
}

function allCheck() {
    document.getElementById('checkAll').checked = true;
    document.getElementById('checkBooks').checked = false;
    document.getElementById('checkVideo').checked = false;
    document.getElementById('checkAudio').checked = false;
    document.getElementById('checkOthers').checked = false;
}
function disabilityYes(){
    var x = document.getElementById('disYes');
    x.style.display = 'inline-block';x.name="disabilityNote"; x.value ="";
}
function disabilityNo(){
    var x = document.getElementById('disYes');
    x.name="";
    x.style.display = 'none';

}

// I TRIED TO MAKE A CHOICE ON FORM  PAGE LOAD
// function uploadForm() {
//     alert("The function called 'function_one' has been called.");
//     localSource();
// }


function localSource(){
    var x = document.getElementById('urlSourceInput');
    x.style.display = 'none';/*x.value = "";*/x.name="";
    var y = document.getElementById('localSourceInput');
    y.style.display = 'inline-block';y.name="userFile";
}

function urlSource(){
    var x = document.getElementById('localSourceInput');
    x.style.display = 'none';/*x.value = "";*/x.name="";
    var y = document.getElementById('urlSourceInput');
    y.style.display = 'inline-block';y.name="userFile";
}

//end of /resources/view/pages/create.blade.php


//index page search "feeling lucky button"
function changeFormMethod() {
    //values setters
    document.getElementById('checkAll').checked = true;
    // document.getElementById('searchBox').value = "Random Word";

    // document.getElementById('searchBox').setParameter('required','required');

    //execution
    document.getElementById('searchForm').action="simplesearch";/*random result*//*lateri will change the action*/
}