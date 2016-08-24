var app = require('http').createServer(handler);
var io = require('socket.io')(app);
var Redis = require('ioredis');
var redis = new Redis();

app.listen(6001, function() {
    console.log('Server is running!');
});

function handler(req, res) {
    res.writeHead(200);
    res.end('');
}

io.on('connection', function(socket) {});
//redis.subscribe(['YduAnTrfPDoIMWIxXbl6G94GjAB2IK5OJVtDPiMqkNoX7GUiOT'], function(err, count) {});
redis.psubscribe('*', function(err, count) {});

redis.on('pmessage', function(subscribed, channel, message) {
    console.log('a message was received from channel  ' + channel + " " + message )
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});