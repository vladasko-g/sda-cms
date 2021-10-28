const fetchPostsButton = document.querySelector("#fetchPostsButton");

fetchPostsButton.addEventListener("click", () => {
  fetch("http://localhost/sda/wp-json/custom-api/posts")
    .then((res) => res.json())
    .then((posts) => {
      console.dir(posts);
    });
});
