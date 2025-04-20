<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback - Demure Art</title>
  <link rel="stylesheet" href="feedback.css"/>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo-section">
        <img src="logo.png" alt="Gallery Logo" class="logo"/>
        <h1 class="gallery-title">Demuore Art</h1>
      </div>
      <div class="hamburger" onclick="toggleMenu()">☰</div>
      <ul class="nav-links">
        <li><a href="index.html#home">Home</a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="index.html#events">Events</a></li>
        <li><a href="index.html#venue">Venue</a></li>
        <li><a href="schedule.htm">Schedule</a></li>
        <li><a href="event-details.html">Tickets</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="feedback.php" class="active">Feedback</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <h1 class="tittle">Feedback</h1>
      <p>Community reviews about our exhibitions</p>
    </section>

    <!-- User Feedback Form -->
    <section class="feedback-form">
      <h2>Leave Your Feedback</h2>
      <form id="feedbackForm" action="submit.php" method="POST" enctype="multipart/form-data">
        <label for="orderNumber">Ticket Number:</label>
        <input type="text" id="orderNumber" name="ticket" required placeholder="Enter your ticket number"/>

        <label for="username">Name:</label>
        <input type="text" id="username" name="name" required placeholder="Your name"/>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating">
          <option value="5">⭐⭐⭐⭐⭐</option>
          <option value="4">⭐⭐⭐⭐</option>
          <option value="3">⭐⭐⭐</option>
          <option value="2">⭐⭐</option>
          <option value="1">⭐</option>
        </select>

        <label for="comment">Your Review:</label>
        <textarea id="comment" name="comment" rows="4" required placeholder="Write your feedback"></textarea>

        <label for="imageUpload">Upload Image:</label>
        <input type="file" id="imageUpload" name="image" accept="image/*"/>

        <button type="submit">Submit</button>
      </form>
    </section>

    <!-- User Comments Showcase -->
    <section class="reviews">
      <h2>Community Reviews</h2>
      <?php include 'fetch.php'; ?>
    </section>
  </main>

  <script>
    let lastScrollTop = 0;
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function () {
      let scrollTop = window.scrollY || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
        navbar.style.transform = "translateY(-100%)";
      } else {
        navbar.style.transform = "translateY(0)";
      }
      lastScrollTop = scrollTop;
    });
  </script>

  <footer>
    <p>© 2025 Demuore Art. All rights reserved.</p>
  </footer>
  <script defer src="script.js"></script>
</body>
</html>
