
const postOwners = document.querySelectorAll('.grid-image');
let postedBy = document.querySelector('.postedBy');
let characterName = "Mike Wheeler";

const API_KEY = `https://stranger-things-api.fly.dev/api/v1/characters?name=${characterName.replace(' ','+')}`;

/**
 * Fetches a character from the API and updates the post owners' images
 * with the character's photo, and the postedBy element with the character's name.
 * 
 * The character is selected based on the characterName variable.
 */
const getCharacter = async () => {
    const response = await fetch(API_KEY);
    const data = await response.json();

    postedBy.innerHTML = data[0]['name'];
    postOwners[0].src = data[0]['photo']; 

    postOwners.forEach(el => {
        el.setAttribute('src', data[0]['photo']) * 3;
    });
}

window.addEventListener('load', getCharacter());