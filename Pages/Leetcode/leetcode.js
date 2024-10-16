// Example Leetcode solutions data
const leetcodeSolutions = [
  {
    title: "Solving Binary Tree Problems on Leetcode",
    content:
      "Learn how to efficiently solve binary tree problems using recursion and iterative methods.",
    link: "#",
  },
  {
    title: "Mastering Linked Lists for Coding Interviews",
    content:
      "Explore how to handle linked list challenges with simple and efficient solutions.",
    link: "#",
  },
  {
    title: "Optimal Solutions to Dynamic Programming Problems",
    content:
      "Learn how to break down dynamic programming problems with a step-by-step approach.",
    link: "#",
  },
  {
    title:
      "Problem 1491: Average Salary Excluding the Minimum and Maximum Salary",
    content:
      "In this blog post, we will dive into a simple but interesting coding problem: calculating the average salary of employees while excluding the highest and lowest salaries from the calculation. Let's break down the problem, understand the solution step by step, and provide a beginner-friendly explanation.",
    link: "./Blogs/Blog1/blog1.html",
  },
];

// Function to load Leetcode solutions into the blog container
function loadLeetcodeSolutions() {
  const blogContainer = document.getElementById("blog-container");

  leetcodeSolutions.forEach((solution) => {
    // Create blog card element
    const blogCard = document.createElement("div");
    blogCard.classList.add("blog-card");

    // Add blog title
    const blogTitle = document.createElement("h3");
    blogTitle.textContent = solution.title;
    blogCard.appendChild(blogTitle);

    // Add blog content
    const blogContent = document.createElement("p");
    blogContent.textContent = solution.content;
    blogCard.appendChild(blogContent);

    // Add blog link
    const blogLink = document.createElement("a");
    blogLink.href = solution.link;
    blogLink.textContent = "Read More";
    blogCard.appendChild(blogLink);

    // Append blog card to container
    blogContainer.appendChild(blogCard);
  });
}

// Call loadLeetcodeSolutions when the page loads
document.addEventListener("DOMContentLoaded", loadLeetcodeSolutions);
