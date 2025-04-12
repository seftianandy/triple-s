import Echo from 'laravel-echo';
import { io } from 'socket.io-client';

import axios from 'axios';


window.io = io;
window.Pusher = require('pusher-js');
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001' // default port Socket.IO
});

window.Echo.channel('score-channel')
    .listen('ScoreUpdated', (event) => {
        console.log('Score updated:', event.team, event.score);
        // Update the score in your Livewire component
    });

axios.post('/update-score', {
    team: 'Team A',
    score: 100
})
.then(response => {
    console.log('Score updated successfully');
})
.catch(error => {
    console.error('Error updating score:', error);
});

