//create an empty array on startup
let animeHistory = []
const API_BASE = "https://api.jikan.me/"
const API_ANIME = API_BASE + "anime/"

/**
 * generate anime tag from a Javascript Object that containt the anime information
 */
function buildAnimeMarkup(anime) {
    return `<div class="anime_item"><img class='anime_image' src=${anime.image_url} />
        <h2 class='anime_name'>${anime.title}</h2>
        <p class='anime_description'>${anime.premiered}</p></div>`
}