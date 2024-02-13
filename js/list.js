const createButton = document.getElementById('createButton');
const deleteButton = document.getElementById('deleteButton');
const characterContainer = document.getElementById('characterContainer');

const apiUrl = 'https://rickandmortyapi.com/api/character/';

createButton.addEventListener('click', fetchAndCreateCards);
deleteButton.addEventListener('click', deleteAllCards);

function fetchAndCreateCards() {
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Assuming data.results is an array of characters
            data.results.forEach(character => {
                createCard(character);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}

function createCard(character) {
    const card = document.createElement('div');
    card.classList.add('character-card');

    const image = document.createElement('img');
    image.src = character.image;
    image.alt = character.name;

    const name = document.createElement('h3');
    name.textContent = character.name;

    card.appendChild(image);
    card.appendChild(name);

    characterContainer.appendChild(card);
}

function deleteAllCards() {
    characterContainer.innerHTML = '';
}
