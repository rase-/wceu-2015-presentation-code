var socket = new io('localhost:3000');

socket.on('post view ' + postId, function(count) {
  var counterElem = document.getElementById('view-count');
  counterElem.innerHTML = count;
});
