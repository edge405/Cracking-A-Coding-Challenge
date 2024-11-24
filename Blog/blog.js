// document.addEventListener("DOMContentLoaded", () => {
//   // Parse blog details from localStorage
//   let blogDetails;
//   try {
//     blogDetails = JSON.parse(JSON.parse(localStorage.getItem("blogDetails")));
//   } catch (error) {
//     console.error("Error parsing blog details from localStorage:", error);
//     document.body.innerHTML = "<h1>Error loading blog details</h1>";
//     return;
//   }

//   // Populate the blog details
//   console.log("blog details: " + blogDetails.blog_title);

//   blogContainer.innerHTML = `
//       <h1>${blogDetails.blog_title || "Untitled Blog"}</h1>
//       <p>${blogDetails.description || "No description available."}</p>
//       <p>Story: ${blogDetails.story || "No story available."}</p>
//       <p>Category: ${blogDetails.category || "Uncategorized"}</p>
//   `;
// });
