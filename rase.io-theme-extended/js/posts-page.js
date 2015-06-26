var socket = io('localhost:3000');

socket.on('new post', function(post) {
  console.log('new post', post);

  // Build post element
  var postDiv = document.createElement('div');
  postDiv.className = 'post';

  var heading = document.createElement('h2');
  var postLink = document.createElement('a');
  postLink.href = 'http://localhost:3333/index.php/' + post.post_title.split(' ').join('-');
  postLink.innerHTML = post.post_title;
  heading.appendChild(postLink);
  postDiv.appendChild(heading);

  var entry = document.createElement('div');
  entry.className = 'entry';
  entry.innerHTML = post.post_content;

  postDiv.appendChild(entry);

  // Add to the DOM
  var postList = document.querySelector('.main');
  var first = postList.firstChild;
  if (first) {
    return postList.insertBefore(postDiv, first);
  } else {
    return postList.appendChild(postDiv);
  }
});
