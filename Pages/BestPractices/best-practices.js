// Example best practices data
const bestPractices = [
  {
    title: "Writing Clean Code: A Comprehensive Guide",
    content:
      "In this guide, you’ll learn how to write clean and readable code that is easy to maintain.",
    link: "./Blogs/Blog1/blog1.html",
  },
  {
    title: "The Art of Refactoring: Keeping Code Flexible",
    content:
      "Learn the techniques for refactoring code while maintaining its functionality and readability.",
    link: "#",
  },
  {
    title: "Test-Driven Development (TDD) Explained",
    content:
      "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
    link: "#",
  },
  {
    title: "Effective Code Reviews: Best Practices",
    content:
      "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
    link: "#",
  },
];

// Function to load best practices into the blog container
function loadBestPractices() {
  const blogContainer = document.getElementById("blog-container");

  bestPractices.forEach((practice) => {
    // Create blog card element
    const blogCard = document.createElement("div");
    blogCard.classList.add("blog-card");

    // Add blog title
    const blogTitle = document.createElement("h3");
    blogTitle.textContent = practice.title;
    blogCard.appendChild(blogTitle);

    // Add blog content
    const blogContent = document.createElement("p");
    blogContent.textContent = practice.content;
    blogCard.appendChild(blogContent);

    // Add blog link
    const blogLink = document.createElement("a");
    blogLink.href = practice.link;
    blogLink.textContent = "Read More";
    blogCard.appendChild(blogLink);

    // Append blog card to container
    blogContainer.appendChild(blogCard);
  });
}

// Call loadBestPractices when the page loads
document.addEventListener("DOMContentLoaded", loadBestPractices);
