const http = require('http');
const streamConsumers = require('stream/consumers');

http.get('http://edgelord:8000/src/counter.php', async (res) => {
    const body = await streamConsumers.text(res);
    console.log('GET got body:', body); // Logs the body correctly
});