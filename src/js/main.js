const musicsNames = [];

document.addEventListener("DOMContentLoaded", () => {
    const addMusic = document.querySelector(".add");
    const musicName = document.querySelector(".music-name");
    
    addMusic.addEventListener("click", (event) => {
        musicName.classList.remove("invisible");
    })
    
    document.addEventListener("keypress", (event) => {
        if (event.key == "Enter") {
            musicsNames.push(musicName.value);
            
            const musics = document.querySelector(".musics");
            while (musics.firstChild) {
                musics.removeChild(musics.firstChild)
            }

            musicsNames.map(musicName => {

                const music = document.createElement("li");
                music.innerHTML = musicName;
                musics.appendChild(music);
            })
        }
    })
})