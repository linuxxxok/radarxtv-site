
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #4f46e5;
            --secondary: #818cf8;
        }

        body {
            background: #0f172a;
            color: #e2e8f0;
            font-family: system-ui, -apple-system, sans-serif;
            padding-top: 130px;
            padding-bottom: 100px;
        }

        .song-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .song-card {
            background: #1e293b;
            border-radius: 0.75rem;
            overflow: hidden;
            transition: transform 0.2s;
            position: relative;
        }

        .song-card:hover {
            transform: translateY(-4px);
        }

        .song-card .image-container {
            position: relative;
            overflow: hidden;
        }

        .song-card .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.2s;
        }

        .song-card:hover .play-overlay {
            opacity: 1;
        }

        .play-button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(79, 70, 229, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
        }

        .play-button:hover {
            transform: scale(1.1);
            background: rgba(79, 70, 229, 1);
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #1e293b;
            z-index: 50;
            border-bottom: 1px solid #334155;
        }

        .player-bar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-top: 1px solid #334155;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 50;
        }

        .progress-bar {
            background: #334155;
            height: 4px;
            border-radius: 2px;
            cursor: pointer;
            position: relative;
        }

        .progress {
            background: var(--primary);
            height: 100%;
            border-radius: 2px;
            position: relative;
        }

        .progress::after {
            content: '';
            position: absolute;
            right: -4px;
            top: -3px;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.2s;
        }

        .progress-bar:hover .progress::after {
            opacity: 1;
        }

        .control-button {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #334155;
            color: #e2e8f0;
            transition: all 0.2s;
        }

        .control-button:hover {
            background: var(--primary);
        }

        .search-bar {
            background: #1e293b;
            border: 1px solid #334155;
            color: white;
        }

        .search-bar:focus {
            border-color: var(--primary);
            outline: none;
        }

        .genre-tag {
            background: #334155;
            color: #e2e8f0;
            padding: 0.375rem 0.75rem;
            border-radius: 0.75rem;
            margin: 0.25rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .genre-tag:hover {
            background: var(--primary);
        }

        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: var(--primary);
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .volume-slider {
            -webkit-appearance: none;
            appearance: none;
            height: 4px;
            border-radius: 2px;
            background: #334155;
        }

        .volume-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary);
            cursor: pointer;
        }

        @keyframes rotation {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 640px) {
            .player-bar .container {
                padding: 0.5rem 1rem;
            }

            .player-controls {
                flex-direction: row;
                gap: 0.5rem;
            }
            
            .song-info {
                max-width: 150px;
            }

            .control-button {
                width: 32px;
                height: 32px;
            }

            .player-image {
                width: 40px;
                height: 40px;
            }

            body {
                padding-top: 120px;
                padding-bottom: 80px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="fixed-header">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-white">Radar Music</h1>
                <div class="flex items-center gap-4">
                    <select id="saavn-bitrate" style="background-color: #334155; color: white; padding: 7px; border-radius: 7px; font-size: 13px;">
                        <option value="4">320kbps</option>
                        <option value="3">160kbps</option>
                        <option value="2">96kbps</option>
                        <option value="1">48kbps</option>
                    </select>
                </div>
            </div>
            <!-- Go to Playlist Button -->
<div class="text-center mt-4">
    <a href="playlist.php" class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition-colors text-sm">
        Go to Playlist
    </a>
</div>

            <!-- Search Section -->
            <div class="mt-3">
                <div class="relative">
                    <input type="text" id="saavn-search-box" placeholder="Search songs..." 
                           class="w-full px-4 py-2 rounded-lg search-bar text-sm">
                    <button id="saavn-search-trigger" onclick="SaavnSearch()" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#4f46e5] text-white px-3 py-1.5 rounded-lg text-sm">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4">
        <!-- Genre Tags -->
        <div class="flex flex-wrap gap-2 mb-4" id="genre-tags"></div>
        
        <!-- Results Grid -->
        <div id="saavn-results" class="song-grid">
            <div class="text-center">Loading featured songs...</div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-6 mb-24">
            <button id="loadmore" class="bg-[#4f46e5] text-white px-5 py-2 rounded-lg hover:bg-[#4338ca] transition-colors text-sm">
                Load More
            </button>
        </div>
    </main>
    <!-- Player Bar -->
    <div id="audio-player" class="player-bar">
        <!-- Progress Bar -->
        <div class="progress-bar" id="progress-container">
            <div class="progress" style="width: 0%"></div>
        </div>

        <div class="container mx-auto py-3">
            <div class="flex items-center justify-between gap-4">
                <!-- Song Info -->
                <div class="flex items-center gap-3 song-info">
                    <img id="player-image" src="/api/placeholder/48/48" class="w-12 h-12 rounded-lg player-image" alt=" ">
                    <div class="min-w-0">
                        <h3 id="player-name" class="font-medium text-sm truncate">No song playing</h3>
                        <p id="player-album" class="text-xs text-gray-400 truncate">Select a song to play</p>
                    </div>
                </div>

                <!-- Controls -->
                <div class="flex items-center gap-3 player-controls">
                    <button class="control-button" onclick="previousTrack()">
                        <i class="fas fa-step-backward"></i>
                    </button>
                    <button class="control-button" onclick="togglePlay()">
                        <i class="fas fa-play" id="play-pause-icon"></i>
                    </button>
                    <button class="control-button" onclick="nextTrack()">
                        <i class="fas fa-step-forward"></i>
                    </button>
                </div>

                <!-- Volume -->
                <div class="hidden sm:flex items-center gap-2">
                    <i class="fas fa-volume-up"></i>
                    <input type="range" class="volume-slider w-20" min="0" max="100" value="100" onchange="updateVolume(this.value)">
                </div>
            </div>
        </div>
        
        <audio id="player" class="hidden">
            <source id="audioSource" src="">
            Your browser does not support the audio element.
        </audio>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let results_objects = {};
        let lastSearch = '';
        let page_index = 1;
        let currentPlaylist = [];
        let currentTrackIndex = -1;
        const searchUrl = "https://jiosaavn-api-privatecvc2.vercel.app/search/songs?query=";
    
        // Initialize genre tags
        const genres = ['Top Kuthu - Tamil', '90s Tamil Love Hits', '2000s Melodies - Tamil','A. R. Rahman - 90s Hits - Tamil', 'Anirudh', 'Sid Sriram', 'Yuvan Shankar Raja', 'M.S.Vishwanathan', 'Ilaiyaraaja', ];
        const genreContainer = document.getElementById('genre-tags');
        genres.forEach(genre => {
            const tag = document.createElement('button');
            tag.className = 'genre-tag';
            tag.textContent = genre;
            tag.onclick = () => doSaavnSearch(genre);
            genreContainer.appendChild(tag);
        });
    
        function showLoader(container) {
            const loader = document.createElement('div');
            loader.className = 'col-span-full text-center';
            loader.id = 'search-loader';
            loader.innerHTML = '<span class="loader"></span>';
            container.innerHTML = '';
            container.appendChild(loader);
        }
    
        function hideLoader() {
            const loader = document.getElementById('search-loader');
            if (loader) {
                loader.remove();
            }
        }
    
        function showError(container, message) {
            hideLoader();
            container.innerHTML = `<div class="col-span-full text-center text-red-500">${message}</div>`;
        }
    
        function formatDuration(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
        }
    
        function createSongCard(track) {
            const song_id = track.id;
            const bitrate = document.getElementById('saavn-bitrate');
            const bitrate_i = bitrate.options[bitrate.selectedIndex].value;
            const download_url = track.downloadUrl[bitrate_i].link;
            
            return `
                <div class="song-card">
                    <div class="image-container">
                        <img src="${track.image[2].link}" class="w-full aspect-square object-cover" alt="${track.name}">
                        <div class="play-overlay" onclick='PlayAudio("${download_url}","${song_id}")'>
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium truncate text-sm">${track.name}</h3>
                        <p class="text-xs text-gray-400 truncate">${track.primaryArtists}</p>
                        <p class="text-xs text-gray-500 mt-1">${track.year} • ${formatDuration(track.duration)}</p>
                    </div>
                </div>
            `;
        }
    
        function PlayAudio(audio_url, song_id) {
            const audio = document.getElementById('player');
            const source = document.getElementById('audioSource');
            source.src = audio_url;
            
            const track = results_objects[song_id].track;
            document.getElementById('player-name').textContent = track.name;
            document.getElementById('player-album').textContent = track.primaryArtists;
            document.getElementById('player-image').src = track.image[2].link;
            
            currentTrackIndex = currentPlaylist.findIndex(t => t.id === song_id);
            
            audio.load();
            audio.play()
                .catch(error => {
                    console.error('Error playing audio:', error);
                    showError(document.querySelector("#saavn-results"), 'Error playing audio. Please try again.');
                });
            document.getElementById('play-pause-icon').className = 'fas fa-pause';
        }
    
        function togglePlay() {
            const audio = document.getElementById('player');
            const icon = document.getElementById('play-pause-icon');
            
            if (audio.paused) {
                audio.play()
                    .catch(error => console.error('Error playing audio:', error));
                icon.className = 'fas fa-pause';
            } else {
                audio.pause();
                icon.className = 'fas fa-play';
            }
        }
    
        function updateVolume(value) {
            const audio = document.getElementById('player');
            audio.volume = value / 100;
            
            // Update volume icon based on level
            const volumeIcon = document.querySelector('.fa-volume-up');
            if (value == 0) {
                volumeIcon.className = 'fas fa-volume-mute';
            } else if (value < 50) {
                volumeIcon.className = 'fas fa-volume-down';
            } else {
                volumeIcon.className = 'fas fa-volume-up';
            }
        }
    
        function previousTrack() {
            if (currentTrackIndex > 0) {
                const prevTrack = currentPlaylist[currentTrackIndex - 1];
                const bitrate = document.getElementById('saavn-bitrate');
                const bitrate_i = bitrate.options[bitrate.selectedIndex].value;
                PlayAudio(prevTrack.downloadUrl[bitrate_i].link, prevTrack.id);
            }
        }
    
        function nextTrack() {
            if (currentTrackIndex < currentPlaylist.length - 1) {
                const nextTrack = currentPlaylist[currentTrackIndex + 1];
                const bitrate = document.getElementById('saavn-bitrate');
                const bitrate_i = bitrate.options[bitrate.selectedIndex].value;
                PlayAudio(nextTrack.downloadUrl[bitrate_i].link, nextTrack.id);
            }
        }
    
        async function SaavnSearch() {
            event.preventDefault();
            const query = document.querySelector("#saavn-search-box").value.trim();
            if (query === lastSearch) return;
            await doSaavnSearch(query);
        }
    
        async function doSaavnSearch(query, NotScroll, page) {
            const results_container = document.querySelector("#saavn-results");
            
            if (!query) return;
            
            if (!page) {
                showLoader(results_container);
            }
            
            let searchQuery = `${encodeURIComponent(query)}&limit=40`;
            if (page) {
                page_index++;
                searchQuery += `&page=${page_index}`;
            } else {
                searchQuery += "&page=1";
                page_index = 1;
            }
    
            try {
                const response = await fetch(searchUrl + searchQuery);
                if (!response.ok) throw new Error('Network response was not ok');
                
                const data = await response.json();
                const results = data.data.results;
                
                if (!results || results.length === 0) {
                    if (!page) {
                        showError(results_container, 'No results found');
                    }
                    return;
                }
    
                lastSearch = query;
                
                // Update currentPlaylist with new results
                if (!page) {
                    currentPlaylist = results;
                    results_objects = {};
                    hideLoader();
                    results_container.innerHTML = '';
                } else {
                    currentPlaylist = currentPlaylist.concat(results);
                }
                
                const songCards = results.map(track => {
                    results_objects[track.id] = { track };
                    return createSongCard(track);
                }).join('');
    
                if (page) {
                    results_container.insertAdjacentHTML('beforeend', songCards);
                } else {
                    results_container.innerHTML = songCards;
                }
    
                if (!NotScroll) {
                    results_container.scrollIntoView({ behavior: 'smooth' });
                }
    
                // Show/hide load more button based on results
                const loadMoreBtn = document.getElementById('loadmore');
                loadMoreBtn.style.display = results.length < 40 ? 'none' : 'inline-block';
    
            } catch (error) {
                showError(results_container, `Error: ${error.message}`);
            }
        }
    
        // Initialize event listeners
        document.getElementById('loadmore').addEventListener('click', () => {
            const loadMoreBtn = document.getElementById('loadmore');
            const oldText = loadMoreBtn.textContent;
            loadMoreBtn.textContent = 'Loading...';
            loadMoreBtn.disabled = true;
            
            doSaavnSearch(lastSearch, false, true).finally(() => {
                loadMoreBtn.textContent = oldText;
                loadMoreBtn.disabled = false;
            });
        });
    
    
        // Progress bar functionality
        const progressContainer = document.getElementById('progress-container');
        const progressBar = progressContainer.querySelector('.progress');
        const audio = document.getElementById('player');
    
        progressContainer.addEventListener('click', (e) => {
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audio.currentTime = pos * audio.duration;
        });
    
        audio.addEventListener('timeupdate', (e) => {
            const progress = (e.target.currentTime / e.target.duration) * 100;
            progressBar.style.width = `${progress}%`;
        });
    
        audio.addEventListener('ended', () => {
            nextTrack();
        });
    
        // Search box enter key handler
        document.getElementById('saavn-search-box').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                SaavnSearch();
            }
        });
    
        // Keyboard controls
        document.addEventListener('keydown', (e) => {
            if (e.code === 'Space' && e.target.tagName !== 'INPUT') {
                e.preventDefault();
                togglePlay();
            } else if (e.code === 'ArrowLeft' && e.ctrlKey) {
                previousTrack();
            } else if (e.code === 'ArrowRight' && e.ctrlKey) {
                nextTrack();
            }
        });
    
        // Bitrate change handler
        document.getElementById('saavn-bitrate').addEventListener('change', () => {
            if (currentTrackIndex !== -1) {
                const currentTrack = currentPlaylist[currentTrackIndex];
                const bitrate = document.getElementById('saavn-bitrate');
                const bitrate_i = bitrate.options[bitrate.selectedIndex].value;
                PlayAudio(currentTrack.downloadUrl[bitrate_i].link, currentTrack.id);
            }
        });
    
        // Start with default search
        window.addEventListener('load', () => {
            doSaavnSearch('tamil');
        });
    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92896cb89babe23f","version":"2025.1.0","r":1,"token":"e15b99cd804a427f9b0db52f398ab880","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>
</html>