
(function($){

	// Create connection to the socket
	var socket    = io.connect('http://localhost:1337');

	// Keep track of myself
	var self;

	/*********************************************************************
	 *					SENDING EVENTS TO THE SERVER
	 *********************************************************************/

	socket.emit('newMsg', {
		// Do Stuff
	});


	/*********************************************************************
	 *					RECEIVING EVENTS & HANDLING THEM
	 *********************************************************************/

	 socket.on('newMsg', function(msg){
		// Do Stuff
	 });


	/*********************************************************************
	 *					USER EVENTS (KEYPRESS,KEYUP,KEY DOWN)
	 *********************************************************************/



})(jQuery);


