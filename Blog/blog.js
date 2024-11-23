document.addEventListener("DOMContentLoaded", () => {
  // Parse blog details from localStorage
  let blogDetails;
  try {
    blogDetails = JSON.parse(JSON.parse(localStorage.getItem("blogDetails")));
  } catch (error) {
    console.error("Error parsing blog details from localStorage:", error);
    document.body.innerHTML = "<h1>Error loading blog details</h1>";
    return;
  }

  // Handle missing or null blogDetails
  if (!blogDetails) {
    document.body.innerHTML = `
      <h1>Blog not found</h1>
      <p>The blog you are looking for does not exist or was not loaded properly.</p>
      <a href="../index.html">Go back to home</a>
    `;
    return;
  }

  // Access the blog container
  const blogContainer = document.getElementById("blog-details");
  if (!blogContainer) {
    console.error("Blog container not found.");
    document.body.innerHTML = "<h1>Error: Blog container is missing.</h1>";
    return;
  }

  // Populate the blog details
  console.log("blog details: " + blogDetails.blog_title);

  blogContainer.innerHTML = `
      <h1>${blogDetails.blog_title || "Untitled Blog"}</h1>
      <p>${blogDetails.description || "No description available."}</p>
      <p>Story: ${blogDetails.story || "No story available."}</p>
      <p>Category: ${blogDetails.category || "Uncategorized"}</p>
  `;

  /*
  blogDetails.array.forEach((element) => {
    blogTitle = document.createElement("h1");
    blogTitle.classList.add("blog-title");
    blogTitle.textContent = element.blog_title; //
    blogContainer.appendChild(blogTitle);

    blogDescription = document.createElement("h3");
    blogDescription.classList.add("blog-description");
    blogDescription.textContent = element.description; //
    blogContainer.appendChild(blogDescription);

    blogStory = document.createElement("p");
    blogStory.classList.add("blog-story");
    blogStory.textContent = element.story; //
    blogContainer.appendChild(blogStory);

    blogCategory = document.createElement("p");
    blogCategory.classList.add("blog-category");
    blogCategory.textContent = element.category; //
    blogContainer.appendChild(blogCategory);
  });
  */
});
