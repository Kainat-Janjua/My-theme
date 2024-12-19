<?php get_header(); ?>
<div id="post-content">
    <?php 
    if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found for this post.</p>
    <?php endif; ?>
</div>

<div class="container">
    <h1 class="heading">Login</h1>
    <form id="loginForm">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="signin-button">Sign In</button>
    </form>
</div>
<div class="post-meta">
                    <span>Published on: <?php the_date(); ?></span>
                    <span>Author: <?php the_author(); ?></span>
                </div>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

#post-content {
    padding: 20px;
    max-width: 800px; /* Adjust as needed */
    margin: 0 auto; /* Center the post content */
}

.container {
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 20px auto; /* Center the login form */
}

.heading {
    text-align: center;
    margin-bottom: 1.5rem;
}

.input-group {
    margin-bottom: 1rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
}

input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

.signin-button {
    width: 100%;
    padding: 0.5rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

.signin-button:hover {
    background-color: #0056b3;
}  
</style>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Here you can add your login logic (e.g., API call)
        console.log('Email:', email);
        console.log('Password:', password);

        // For demonstration, you can alert the user
        alert('Login attempted with:\nEmail: ' + email + '\nPassword: ' + password);
    });
</script>