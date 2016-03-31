$(document).ready(function(){
  
  /* Notification Share-URL-BTN */
  
  var bttn_share_url = document.getElementById( 'share-url' );
  bttn_share_url.addEventListener( 'click', function() {
  	setTimeout( function() {
		// create the notification
		var notification = new NotificationFx({
			message : '<p>Partage !</p><div class="social"><a href="http://facebook.com" target="_blank"><img src="img/social/facebook.svg" /></a><a href="http://twitter.com" target="_blank"><img src="img/social/twitter.svg" /></a></div>',
			layout : 'growl',
			effect : 'scale',
			type : 'notice', // notice, warning, error or success
			ttl : 100000000
		});
		
		// show the notification
		notification.show();
	}, 100 );
  } );
  
  /* Notification Copy-URL-BTN */
  
  var bttn_copy_url = document.getElementById( 'copy-url' );
  bttn_copy_url.addEventListener( 'click', function() {
  	classie.add( bttn_copy_url, 'active' );
	setTimeout( function() {
		classie.remove( bttn_copy_url, 'active' );
		// create the notification
		var notification = new NotificationFx({
			message : '<p>URL copiée !</p>',
			layout : 'bar',
			effect : 'slidetop',
			type : 'warning', // notice, warning or error
			onClose : function() {
				bttn_copy_url.disabled = false;
			}
		});

		// show the notification
		notification.show();

	}, 100 );
					
	// disable the button (for demo purposes only)
	this.disabled = true;
  } );
  
});
