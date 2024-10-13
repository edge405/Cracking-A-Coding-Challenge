// Example blog data (you can replace this with real blog data from a server)
const blogs = [
  {
    title: "Chocolate Feast: A HackerRank Challenge",
    content:
      "In this article, we'll tackle the Chocolate Feast problem. Solving this puzzle will sharpen your problem-solving skills and enhance your understanding of mathematical algorithms.",
    link: "./Blogs/Blog1/Chocolate Feast.html",
  },
  // {
  //   title: "Solving the Two-Sum Problem Efficiently",
  //   content:
  //     "In this article, we solve the famous Two-Sum problem using different algorithms.",
  //   link: "#",
  // },
  // {
  //   title: "Deep Dive into Dynamic Programming",
  //   content:
  //     "Explore how to use dynamic programming to solve complex coding challenges with ease.",
  //   link: "#",
  // },
  // {
  //   title: "Mastering Graph Algorithms on HackerRank",
  //   content:
  //     "This post walks you through some key graph algorithms commonly tested in coding interviews.",
  //   link: "#",
  // },
];

// Function to load blogs into the blog container
function loadBlogs() {
  const blogContainer = document.getElementById("blog-container");

  blogs.forEach((blog) => {
    // Create blog card element
    const blogCard = document.createElement("div");
    blogCard.classList.add("blog-card");

    // Add blog title
    const blogTitle = document.createElement("h3");
    blogTitle.textContent = blog.title;
    blogCard.appendChild(blogTitle);

    // Add blog content
    const blogContent = document.createElement("p");
    blogContent.textContent = blog.content;
    blogCard.appendChild(blogContent);

    // Add blog link
    const blogLink = document.createElement("a");
    blogLink.href = blog.link;
    blogLink.textContent = "Read More";
    blogCard.appendChild(blogLink);

    // Append blog card to container
    blogContainer.appendChild(blogCard);
  });
}

// Call loadBlogs when the page loads
document.addEventListener("DOMContentLoaded", loadBlogs);
