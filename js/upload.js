const menu = document.getElementById("menu"); //Gets data from menu div

Array.from(document.getElementsByClassName("menu-item")) //Convert them to an array so they will repeat
  .forEach((item, index) => {
    item.onmouseover = () => { //When the mouse hovers over the item it will update the active data
      menu.dataset.activeIndex = index; 
    }
  });

let playBtn = document.querySelectorAll('.playlist .box-container .box .play');
let musicPlayer = document.querySelector('.music-player');
let musicAlbum = musicPlayer.querySelector('.album');
let musicName = musicPlayer.querySelector('.name');
let musicArtist = musicPlayer.querySelector('.artist');
let music = musicPlayer.querySelector('.music');

playBtn.forEach(play =>{

    play.onclick = () =>{
      let src = play.getAttribute('data-src');
      let box = play.parentElement.parentElement;
      let name = box.querySelector('.name');
      let album = box.querySelector('.album');
      let artist = box.querySelector('.artist');

      musicAlbum.src = album.src;
      musicName.innerHTML = name.innerHTML;
      musicArtist.innerHTML = artist.innerHTML;
      music.src = src;

      musicPlayer.classList.add('active');

      music.play();

    }

});

document.querySelector('#close').onclick = () =>{
    musicPlayer.classList.remove('active');
    music.pause();
}  