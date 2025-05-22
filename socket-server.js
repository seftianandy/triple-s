import { createServer } from 'http';
import { Server } from 'socket.io';
import redisAdapter from 'socket.io-redis';

const server = createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('Socket.IO server is running');
});

const io = new Server(server, {
    cors: {
        origin: "http://triple-s.test", // Ganti dengan domain aplikasi Laravel kamu
        methods: ["GET", "POST"],
        allowedHeaders: ["Content-Type"],
        credentials: true
    }
});

// Konfigurasi Redis adapter untuk socket.io
io.adapter(redisAdapter({ host: 'redis', port: 6379 }));

io.on('connection', (socket) => {
  console.log('A user connected');
  socket.on('disconnect', () => {
    console.log('User disconnected');
  });
});

const port = 6001;
server.listen(port, () => {
    console.log(`🚀 Socket.io server is running on http://localhost:${port}`);
});
