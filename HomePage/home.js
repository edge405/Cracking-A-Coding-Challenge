const logout = document.getElementById("logout");

logout.addEventListener("click", function () {
  window.location.href = "../Login/logout.php";
});

// Example best practices data
const bestPractices = [
  {
    title: "Writing Clean Code: A Comprehensive Guide",
    content:
      "In this guide, you’ll learn how to write clean and readable code that is easy to maintain.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "The Art of Refactoring: Keeping Code Flexible",
    content:
      "Learn the techniques for refactoring code while maintaining its functionality and readability.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Test-Driven Development (TDD) Explained",
    content:
      "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Effective Code Reviews: Best Practices",
    content:
      "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "The Art of Refactoring: Keeping Code Flexible",
    content:
      "Learn the techniques for refactoring code while maintaining its functionality and readability.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Test-Driven Development (TDD) Explained",
    content:
      "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Effective Code Reviews: Best Practices",
    content:
      "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "The Art of Refactoring: Keeping Code Flexible",
    content:
      "Learn the techniques for refactoring code while maintaining its functionality and readability.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Test-Driven Development (TDD) Explained",
    content:
      "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
    category: "hackerrank",
    link: "#",
  },
  {
    title: "Effective Code Reviews: Best Practices",
    content:
      "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
    category: "hackerrank",
    link: "#",
  },
];

// Function to load best practices into the blog container
function loadBestPractices() {
  const latestContainer = document.getElementById("latest-container");
  const blogContainer = document.getElementById("blog-container");

  bestPractices.forEach((practice) => {
    // Create latest card element
    const latestCard = document.createElement("div");
    latestCard.classList.add("latest-card");

    // Add latest title
    const latestTitle = document.createElement("h3");
    latestTitle.textContent = practice.title;
    latestCard.appendChild(latestTitle);

    // Add latest content
    const latestContent = document.createElement("p");
    latestContent.classList.add("latest_content");
    latestContent.textContent = practice.content;
    latestCard.appendChild(latestContent);

    // Add latest link
    const latestLink = document.createElement("a");
    latestLink.href = practice.link;
    latestLink.textContent = "Read More";
    latestCard.appendChild(latestLink);

    const latest_category = document.createElement("p");
    latest_category.classList.add("latest_category");
    latest_category.textContent = practice.category;
    latestCard.appendChild(latest_category);

    // Append latest card to container
    latestContainer.appendChild(latestCard);

    // ---------------------------------------------------------------------

    // Create blog card element
    const blogCard = document.createElement("div");
    blogCard.classList.add("blog-card");

    // Add blog title
    const blogTitle = document.createElement("h3");
    blogTitle.textContent = practice.title;
    blogCard.appendChild(blogTitle);

    // Add blog content
    const blogContent = document.createElement("p");
    blogContent.classList.add("blog_content");
    blogContent.textContent = practice.content;
    blogCard.appendChild(blogContent);

    // Add blog link
    const blogLink = document.createElement("a");
    blogLink.href = practice.link;
    blogLink.textContent = "Read More";
    blogCard.appendChild(blogLink);

    // Add category
    const blog_category = document.createElement("p");
    blog_category.classList.add("blog_category");
    blog_category.textContent = practice.category;
    blogCard.appendChild(blog_category);

    // Append blog card to container
    blogContainer.appendChild(blogCard);
  });
}

// Call loadBestPractices when the page loads
document.addEventListener("DOMContentLoaded", loadBestPractices);
