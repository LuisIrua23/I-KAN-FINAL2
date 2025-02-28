<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/estilo_casual.css') }}">
    <title>Buscar Prendas - I kan </title>
    <link rel="stylesheet" href="/search.css">
</head>

<body onload="fetchSearchResults()">
    @extends('layouts.app')
    <div class="maps">

        <br><br>

    </div>

    <div class="cuadre-busc">
        <script>
            let submenu = document.getElementById("submenu");

            function toggleMenu() {
                submenu.classList.toggle("open-menu");
            }
        </script>
    </div>


    <br>

    <script async src="https://cse.google.com/cse.js?cx=d6318e11e15654a4f"></script>
    <div class="gcse-search"></div>
    <br>

    <div class="maps">
        <div class="maps2">
            <li>
                <h1>BUSQUEDA OUTFIT</h1>
            </li>
            <li>
                <a href="ubicacion" class="button-link"><button>UBICA NUESTROS ALIADOS <img src="img/mapa (2).png"
                            height="10px"></button></a>
                <!-- <img src="/img/mapa (2).png" alt=""> -->
            </li>
        </div>
    </div>



    <br><br>
    <div id="search-results"></div>

    <script>
        function fetchSearchResults() {
            const apiKey = 'AIzaSyAYJeRUu2Z1i5FGWGdAqMrUWt-t2ZckN74';
            const searchEngineId = 'd6318e11e15654a4f';
            const queries = ['tenis', 'joggers', 'moving-mujer', 'bolsos', 'morrales', 'pantalones', 'tops',
                'camisetas'
            ]; // Lista de términos de búsqueda

            const searchResultsDiv = document.getElementById('search-results');
            searchResultsDiv.innerHTML = ''; // Limpiar resultados anteriores

            // Establece el estilo de diseño de cuadrícula para la galería
            searchResultsDiv.style.display = 'grid';
            searchResultsDiv.style.gridTemplateColumns = 'repeat(auto-fill, minmax(200px, 1fr))';
            searchResultsDiv.style.gap = '30px';
            searchResultsDiv.style.backgroundColor = 'white'; // Color de fondo blanco

            // Itera sobre cada término de búsqueda y realiza una solicitud de búsqueda independiente
            queries.forEach(query => {
                const url =
                    `https://www.googleapis.com/customsearch/v1?key=${apiKey}&cx=${searchEngineId}&q=${query}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Verifica si data.items existe antes de procesar los resultados
                        if (!data.items) {
                            console.error(`No hay resultados para la consulta "${query}".`);
                            return;
                        }

                        // Procesa los resultados de búsqueda
                        data.items.forEach(result => {
                            const title = result.title;
                            const link = result.link;

                            // Busca la imagen previa en el pagemap (si está disponible)
                            const imageLink = result.pagemap?.cse_thumbnail?.[0]?.src ?? '';

                            // Crea un elemento para mostrar el resultado de búsqueda
                            const resultItem = document.createElement('div');
                            resultItem.style.border = '1px solid #ccc';
                            resultItem.style.padding = '20px';
                            resultItem.style.borderRadius = '5px';

                            resultItem.innerHTML = `
                        <a href="${link}" target="_blank">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                ${imageLink ? `<img src="${imageLink}" alt="Thumbnail" style="width: 200px; height: 270px; margin-bottom: 10px;">` : ''}
                                <p style="margin: 0; text-align: center;">${title}</p>
                            </div>
                        </a>
                    `;

                            searchResultsDiv.appendChild(resultItem);
                        });
                    })
                    .catch(error => console.error('Error fetching search results:', error));
            });
        }




    </script>
    <script src="#"></script>
</body>

</html>
