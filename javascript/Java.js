

$(document).ready(function() {

	$('body').css('display', 'none');
	$('body').fadeIn(1500);
});



/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("NewSidebar").style.width = "250px";
  document.getElementById("SidebarButton").style.marginLeft = "250px";
}

document.getElementById("NavButton").addEventListener("click", openNav);
document.getElementById("CloseButton").addEventListener("click", closeNav);

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("NewSidebar").style.width = "0";
  document.getElementById("SidebarButton").style.marginLeft = "0";
}

document.getElementById("SidebarButton").addEventListener("mouseover", showNavButtonText);
document.getElementById("SidebarButton").addEventListener("mouseout", showNavButtonText);


function showNavButtonText() {
	document.getElementById("NavigationText").style.opacity = '1';
}

function hideNavButtonText() {
	document.getElementById("NavigationText").style.opacity = '0';
}

document.getElementById("VideosButton").addEventListener("click", hideMusicVideos);

var flag1 = true;

function hideMusicVideos() {
	if (flag1) {
	document.getElementById("STSVideo").style.opacity = '0';
	document.getElementById("CaliVideo").style.opacity = '0';
	document.getElementById("SnowVideo").style.opacity = '0';
	document.getElementById("Soul2SqueezeHeader").style.opacity = '0';
	document.getElementById("CalifornHeader").style.opacity = '0';
	document.getElementById("SnowHeader").style.opacity = '0';	
	}
	else {
	document.getElementById("STSVideo").style.opacity = '1';
	document.getElementById("CaliVideo").style.opacity = '1';
	document.getElementById("SnowVideo").style.opacity = '1';
	document.getElementById("Soul2SqueezeHeader").style.opacity = '1';
	document.getElementById("CalifornHeader").style.opacity = '1';
	document.getElementById("SnowHeader").style.opacity = '1';
	}
	flag1 = !flag1;
}



