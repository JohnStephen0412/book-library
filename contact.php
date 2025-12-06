<<?php include('includes/header.php'); ?>

<main class="contact-page">
  <section class="contact">
    <h2>Contact Me</h2>

    <form action="https://api.web3forms.com/submit" method="POST">
      <input type="hidden" name="access_key" value="9c4c1a9e-778f-44ec-95db-70aeeb94df47">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </section>
</main>

<?php include('includes/footer.php'); ?>