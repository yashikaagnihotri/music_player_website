// VARIABLE INITIALIZATION
let songIndex = 0;
let audioElement = new Audio('song/1.mp3');
let play_button = document.getElementById('play-button');
let range_bar = document.getElementById('range-bar');
let playing_gif = document.getElementById('playing-gif');
let song_banner = document.getElementById('song-banner');  //
let master_song_name = document.getElementById('master-song-name');
let song_item = Array.from(document.getElementsByClassName('song-item'));
let songs = [
    {songName: "The Middle", filepath: "song/1.mp3",timeSpan:"03:05", coverPath: "images/1.jpg"},
    {songName: "Blank Space", filepath: "song/2.mp3",timeSpan:"03:52", coverPath: "images/2.jpg"},
    {songName: "Capital Letter", filepath: "song/3.mp3",timeSpan:"03:39", coverPath: "images/3.jpg"},
    {songName: "Closer", filepath: "song/4.mp3",timeSpan:"04:05", coverPath: "images/4.jpg"},
    {songName: "2002", filepath: "song/5.mp3",timeSpan:"03:07", coverPath: "images/5.jpg"},
    {songName: "Stay", filepath: "song/6.mp3",timeSpan:"03:32", coverPath: "images/6.jpg"},
    {songName: "Happier", filepath: "song/7.mp3",timeSpan:"03:38", coverPath: "images/7.jpg"},
    {songName: "Perfect", filepath: "song/8.mp3",timeSpan:"04:23", coverPath: "images/8.jpg"}
]

song_item.forEach((element, i)=>{
    element.getElementsByTagName("img")[0].src = songs[i].coverPath;
    element.getElementsByClassName("song-title")[0].innerText = songs[i].songName;
    // element.getElementsByClassName("song-time")[0].innerHTML = songs[i].timeSpan; 
})


// LISTEN TO EVENTS

play_button.addEventListener ('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){  
        audioElement.play();
        play_button.classList.remove('fa-play');
        play_button.classList.add('fa-pause');
        song_banner.style.opacity = 1;
        playing_gif.style.opacity = 1;  //
    }
    else{
        audioElement.pause();
        play_button.classList.remove('fa-pause');
        play_button.classList.add('fa-play');
        playing_gif.style.opacity = 0;
        song_banner.style.opacity = 0;  //
    }
})           

audioElement.addEventListener('timeupdate', ()=>{
    progress = parseInt((audioElement.currentTime/audioElement.duration)*100);
    range_bar.value = progress;
})

range_bar.addEventListener('change', ()=>{
    audioElement.currentTime = range_bar.value * audioElement.duration / 100;
})

const make_all_plays = ()=>{
    Array.from(document.getElementsByClassName('song-itemplay')).forEach((element)=>{
        element.classList.remove('fa-pause');
        element.classList.add('fa-play');
    })
}

Array.from(document.getElementsByClassName('song-itemplay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        make_all_plays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-play');
        e.target.classList.add('fa-pause');
        audioElement.src = `song/${songIndex+1}.mp3`;
        song_banner.src = `images/${songIndex+1}.jpg`;  //
        master_song_name.innerText = songs[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        playing_gif.style.opacity = 1;
        song_banner.style.opacity = 1;  //
        play_button.classList.remove('fa-play');
        play_button.classList.add('fa-pause');
    })
})

document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=7){
        songIndex = 0;
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `song/${songIndex+1}.mp3`;
    master_song_name.innerText = songs[songIndex].songName;
    song_banner.src = `images/${songIndex+1}.jpg`;  
    song_banner.style.opacity = 1;  
    audioElement.currentTime = 0;
    audioElement.play();
    playing_gif.style.opacity = 1;
    play_button.classList.remove('fa-play');
    play_button.classList.add('fa-pause');
})

document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex <= 0) {
        songIndex = 0;
    }
    else {
        songIndex -= 1;
    }
    audioElement.src = `song/${songIndex+1}.mp3`;
    master_song_name.innerText = songs[songIndex].songName;
    song_banner.src = `images/${songIndex+1}.jpg`;  //
    song_banner.style.opacity = 1;  //
    audioElement.currentTime = 0;
    audioElement.play();
    playing_gif.style.opacity = 1;
    play_button.classList.remove('fa-play');
    play_button.classList.add('fa-pause');
})

document.getElementById('shuffle').addEventListener('click', ()=>{
    songIndex = Math.floor(Math.random() * songs.length);
    audioElement.src = `song/${songIndex + 1}.mp3`; 
    song_banner.src = `images/${songIndex+1}.jpg`;  //
    song_banner.style.opacity = 1;  //
    master_song_name.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    playing_gif.style.opacity = 1;
    play_button.classList.remove('fa-play');
    play_button.classList.add('fa-pause');
})

