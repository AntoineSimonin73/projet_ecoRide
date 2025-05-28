document.addEventListener('DOMContentLoaded', function () {
    const loadMoreButton = document.getElementById('load-more-avis');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function () {
            const offset = parseInt(loadMoreButton.getAttribute('data-offset'));
            const avisList = document.getElementById('avis-list');

            fetch(loadMoreButton.dataset.url + '?offset=' + offset)
                .then(response => response.json())
                .then(data => {
                    if (data.avis.length > 0) {
                        data.avis.forEach(avis => {
                            const li = document.createElement('li');
                            li.classList.add('list-group-item');
                            li.innerHTML = `<strong>${avis.auteur}</strong> (${avis.note}/5) : ${avis.commentaires}`;
                            avisList.appendChild(li);
                        });

                        // Mettre à jour l'offset
                        loadMoreButton.setAttribute('data-offset', offset + data.avis.length);

                        // Cacher le bouton si tous les avis ont été chargés
                        if (data.avis.length < 5) {
                            loadMoreButton.style.display = 'none';
                        }
                    } else {
                        loadMoreButton.style.display = 'none';
                    }
                })
                .catch(error => console.error('Erreur lors du chargement des avis :', error));
        });
    }
});