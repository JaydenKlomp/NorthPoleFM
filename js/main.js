var vid = document.getElementById("vid"); 

function playSnippet(artistId) {
    vid = document.getElementById("vid" + artistId);
    vid.play(); 
}

function pauseSnippet(artistId) {
    var vid = document.getElementById("vid" + artistId); 
    vid.pause(); 
}

function changeVideo(selector){
    $("iframe").attr('src', "https://www.youtube.com/embed/" + $(".js-getURL" + selector).attr("homo"));
}


function thumbNailNo(artistId){
    document.getElementById("thumbNail" + artistId).style.display = "none"
}

function thumbNailYes(artistId){
    document.getElementById("thumbNail" + artistId).style.display = "unset"
}

function homeClick(){
    window.location.href = "index.php"
}

var popupsound = document.getElementById("notifypop");

function autoNotify() {
   popupsound.play(); //play the audio file
}