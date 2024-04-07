<script>
document.addEventListener('keydown', function(event) {
  if (event.altKey && event.keyCode === 37) {
    window.history.back();
  }
});

document.addEventListener('keydown', function(event) {
  if (event.altKey && event.keyCode === 39) {
    window.history.forward();
  }
});

document.addEventListener('keydown', function(event) {
  if (event.altKey && event.keyCode === 80) {
    window.print();
  }
});

/*function toggleFullScreen() {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen(); 
    }
  }
}*/

function toggleFullScreen() {

if(!document.fullscreenElement) {

  launchFullScreen(document.documentElement);

} else {

  if(document.exitFullscreen) {

    exitFullscreen();

  }

}

}

function launchFullScreen(element) {

if(element.requestFullscreen) {

  element.requestFullscreen();

} else if(element.mozRequestFullScreen) { /* Firefox */

  element.mozRequestFullScreen(); 

} else if(element.webkitRequestFullscreen) { /* Chrome, Safari and Opera */

  element.webkitRequestFullscreen();

} else if(element.msRequestFullscreen) { /* IE/Edge */

  element.msRequestFullscreen();

}

}

function exitFullscreen() {

if(document.exitFullscreen) {

  document.exitFullscreen();

} else if(document.mozCancelFullScreen) {

  document.mozCancelFullScreen();

} else if(document.webkitExitFullscreen) {

  document.webkitExitFullscreen();

}

}

document.addEventListener('keydown', function(event) {
  if (event.keyCode === 122) {
    event.preventDefault();
    toggleFullScreen();
  }
});

function findOnPage() {
  var searchText = prompt("Introduce el texto a buscar:");
  if (searchText) {
    window.find(searchText);
  }
}

document.addEventListener('keydown', function(event) {
  if (event.ctrlKey && event.keyCode === 70) {
    event.preventDefault();
    findOnPage();
  }
});
</script>