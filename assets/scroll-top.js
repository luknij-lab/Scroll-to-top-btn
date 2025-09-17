document.addEventListener("DOMContentLoaded", (event)=>{
	const btn_top_scroll = document.getElementById("scrollTopBtn");

	Object.assign(btn_top_scroll.style, {
	  visibility: "hidden",
	  opacity: 0,
	});

	// Trigger the scroll top button after scroll down 200 pixels from the top
	window.onscroll = function(){
	  scroll()
	};

	function scroll() {
	  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
	    Object.assign(btn_top_scroll.style, {
	      visibility: "visible",
	      opacity: 1
	    });
	  } else {
	    Object.assign(btn_top_scroll.style, {
	      visibility: "hidden",
	      opacity: 0
	    });
	  }
	}

	// Clicks on the button to scroll top
	btn_top_scroll.addEventListener('click', function(e){
	  document.body.scrollTop = 0; // For Safari
	  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	});
});
