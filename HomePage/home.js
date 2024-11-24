// const logout = document.getElementById("logout");

// logout.addEventListener("click", function () {
//   window.location.href = "../Login/logout.php";
// });

// // Example best practices data
// const bestPractices = [
//   {
//     id: 1,
//     title: "Writing Clean Code: A Comprehensive Guide",
//     content:
//       "In this guide, you’ll learn how to write clean and readable code that is easy to maintain.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 2,
//     title: "The Art of Refactoring: Keeping Code Flexible",
//     content:
//       "Learn the techniques for refactoring code while maintaining its functionality and readability.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 3,
//     title: "Test-Driven Development (TDD) Explained",
//     content:
//       "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 4,
//     title: "Effective Code Reviews: Best Practices",
//     content:
//       "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 5,
//     title: "The Art of Refactoring: Keeping Code Flexible",
//     content:
//       "Learn the techniques for refactoring code while maintaining its functionality and readability.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 6,
//     title: "Test-Driven Development (TDD) Explained",
//     content:
//       "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 7,
//     title: "Effective Code Reviews: Best Practices",
//     content:
//       "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 8,
//     title: "The Art of Refactoring: Keeping Code Flexible",
//     content:
//       "Learn the techniques for refactoring code while maintaining its functionality and readability.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 9,
//     title: "Test-Driven Development (TDD) Explained",
//     content:
//       "Explore how TDD can help you write reliable, bug-free code by focusing on testing first.",
//     category: "hackerrank",
//     link: "#",
//   },
//   {
//     id: 10,
//     title: "Effective Code Reviews: Best Practices",
//     content:
//       "Learn how to perform effective code reviews that improve quality and reduce technical debt.",
//     category: "hackerrank",
//     link: "#",
//   },
// ];

// // Function to load best practices into the blog container
// function loadBestPractices() {
//   bestPractices.forEach((practice) => {
//     latest(practice);
//     blog(practice);
//   });
// }

// // for blogs
// function blog(practice) {
//   const blogContainer = document.getElementById("blog-container");
//   // Create blog card element
//   const blogCard = document.createElement("div");
//   blogCard.classList.add("blog-card");

//   // Add blog title
//   const blogTitle = document.createElement("h3");
//   blogTitle.textContent = practice.title;
//   blogCard.appendChild(blogTitle);

//   // Add blog content
//   const blogContent = document.createElement("p");
//   blogContent.classList.add("blog_content");
//   blogContent.textContent = practice.content;
//   blogCard.appendChild(blogContent);

//   // Add blog link
//   const blogLink = document.createElement("a");
//   blogLink.textContent = "Read More";
//   blogLink.addEventListener("click", () => handleReadmore(practice.id));
//   blogCard.appendChild(blogLink);

//   // Add category
//   const blog_category = document.createElement("p");
//   blog_category.classList.add("blog_category");
//   blog_category.textContent = practice.category;
//   blogCard.appendChild(blog_category);

//   // Append blog card to container
//   blogContainer.appendChild(blogCard);
// }

// // for latest
// function latest(practice) {
//   const latestContainer = document.getElementById("latest-container");

//   // Create latest card element
//   const latestCard = document.createElement("div");
//   latestCard.classList.add("latest-card");

//   // Add latest title
//   const latestTitle = document.createElement("h3");
//   latestTitle.textContent = practice.title;
//   latestCard.appendChild(latestTitle);

//   // Add latest content
//   const latestContent = document.createElement("p");
//   latestContent.classList.add("latest_content");
//   latestContent.textContent = practice.content;
//   latestCard.appendChild(latestContent);

//   // Add latest link
//   const latestLink = document.createElement("a");
//   latestLink.textContent = "Read More";
//   latestLink.addEventListener("click", () => handleReadmore(practice.id));
//   latestCard.appendChild(latestLink);

//   const latest_category = document.createElement("p");
//   latest_category.classList.add("latest_category");
//   latest_category.textContent = practice.category;
//   latestCard.appendChild(latest_category);

//   // Append latest card to container
//   latestContainer.appendChild(latestCard);
// }

// function handleReadmore(blogId) {
//   fetchBlogDetails(blogId);
// }

// //for fetchingBlogDetails
// async function fetchBlogDetails(blogId) {
//   try {
//     const response = await fetch(`getBlog.php?id=${blogId}`);
//     console.log(response);
//     const data = await response.json();
//     console.log(data);
//     if (data.error) {
//       alert(data.error); // Handle errors
//       return;
//     }

//     // Redirect to a blog details page with the fetched data
//     localStorage.setItem("blogDetails", JSON.stringify(data));
//     window.location.href = "../Blog/blog.html"; // Redirect to a new page
//   } catch (error) {
//     console.error("Error fetching blog details:", error);
//   }
// }

// // Call loadBestPractices when the page loads
// document.addEventListener("DOMContentLoaded", loadBestPractices);
