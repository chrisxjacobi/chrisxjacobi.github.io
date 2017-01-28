
//sidebar navigation

// $(document).ready(function() {
//     // side bar nav
// 	$('.button-collapse').sideNav({
//     	menuWidth: 200, // Default is 240
//     	edge: 'left', // Choose the horizontal origin
//     	closeOnClick: true // Closes side-nav on <a> clicks
//   		}
// 	);
// 	// collapsible menus
// 	 $('.collapsible').collapsible();
// });

$(document).ready(function() {
  $('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
