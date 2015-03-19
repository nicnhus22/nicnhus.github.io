/*
 *	Imports that we need: http, MD5, Socket.IO
 */
var http = require('http');
var md5	 = require('MD5');

/*
 *	Create server and make it listen on port 1337
 */
httpServer = http.createServer(function(request, response) {
  console.log('User connecting...');
});
httpServer.listen(1337);

// Handle on socket
var io = require('socket.io').listen(httpServer);


/*
 *	Open socket
 */
io.sockets.on('connection', function(socket){

	var self = false;
	console.log('New user');

	// Tell the client all the username already taken
	socket.emit('usernamePassing', usernames);

	socket.on('newMsg', function(msg){
		// Do Stuff
		io.sockets.emit('newMsg', msg);
	});

	socket.on('doneTyping', function(){
		// Do Stuff
		socket.broadcast.emit('doneTyping');
	});

});
