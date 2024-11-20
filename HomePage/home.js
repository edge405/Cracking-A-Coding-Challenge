const loginBtn = document.querySelector(".login-btn");

loginBtn.addEventListener("click", function () {
  console.log("logout clicked");

  window.location.href = "../Login/logout.php";
});

document.addEventListener("DOMContentLoaded", () => {
  // Add event listener for Hackerrank card
  const hackerrankCard = document.getElementById("hackerrank-card");
  hackerrankCard.addEventListener("click", () => {
    window.location.href = "../Pages/Hackerrank/hackerrank.html"; // Redirect to Hackerrank Solutions page
  });

  // Add event listener for Best Practices card
  const bestPracticesCard = document.getElementById("bestpractices-card");
  bestPracticesCard.addEventListener("click", () => {
    window.location.href = "../Pages/BestPractices/best-practices.html"; // Redirect to Best Practices page
  });

  // Add event listener for Leetcode card
  const leetcodeCard = document.getElementById("leetcode-card");
  leetcodeCard.addEventListener("click", () => {
    window.location.href = "../Pages/Leetcode/leetcode.html"; // Redirect to Leetcode Solutions page
  });
});
