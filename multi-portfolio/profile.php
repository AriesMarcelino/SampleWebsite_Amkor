<?php
session_start();
include "db.php";

// check if ?username is in the URL
if (!isset($_GET['username'])) {
    echo "No profile selected.";
    exit();
}

$username = $conn->real_escape_string($_GET['username']);
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "User not found!";
    exit();
}

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $user['username']; ?>'s Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <!-- Sticky Navbar -->
    <div class="navbar">
        <ul>
            <li>Home</li>
            <li>Portfolio</li>
            <li>Projects</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </div>

    <!-- Profile Header -->
    <div class="profile">
        <img src="uploads/<?php echo $user['profile_pic']; ?>" alt="Profile Picture">
        <h2><?php echo $user['username']; ?></h2>

        <!-- Email -->
        <p class="email"><?php echo $user['email']; ?></p>

        <!-- Social Media -->
        <div class="social-links">
            <?php if (!empty($user['facebook'])): ?>
                <a href="<?php echo $user['facebook']; ?>" target="_blank">
                    <img src="icons/facebook.png" alt="Facebook">
                </a>
            <?php endif; ?>
            <?php if (!empty($user['instagram'])): ?>
                <a href="<?php echo $user['instagram']; ?>" target="_blank">
                    <img src="icons/instagram.png" alt="Instagram">
                </a>
            <?php endif; ?>
            <?php if (!empty($user['x_account'])): ?>
                <a href="<?php echo $user['x_account']; ?>" target="_blank">
                    <img src="icons/twitter.png" alt="X">
                </a>
            <?php endif; ?>
        </div>

        <!-- Stats & Buttons -->
        <div class="stats">
            Followers: <?php echo $user['followers']; ?> |
            Following: <?php echo $user['following']; ?>
        </div>
        <button class="btn btn-follow">Follow</button>
        <button class="btn btn-resume">Resume</button>
        
        <hr class="separator">
    </div>

    <!-- Layout: Left + Right -->
    <div class="layout">
        <!-- Left side -->
<div class="left-side">
    <div class="section bio">
        <h3>Bio</h3>
        <p><?php echo $user['bio']; ?></p>
    </div>
    <div class="section background">
        <h3>Background</h3>
        <p><?php echo $user['background']; ?></p>
    </div>
    <div class="section skills">
        <h3>Skills</h3>
        <div class="oval-container">
            <?php 
            $skills = explode(",", $user['skills']); 
            foreach ($skills as $skill): ?>
                <span class="oval"><?php echo trim($skill); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="section hobbies">
        <h3>Hobbies</h3>
        <div class="oval-container">
            <?php 
            $hobbies = explode(",", $user['hobbies']); 
            foreach ($hobbies as $hobby): ?>
                <span class="oval"><?php echo trim($hobby); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</div>


        <!-- Right side -->
<div class="right-side">
    <div class="section">
        <h3>Additional Info</h3>
        <div class="info-item">
            <img src="icons/project.png" alt="Projects">
            <span><?php echo $user['projects']; ?> Projects</span>
        </div>
        <div class="info-item">
            <img src="icons/trophy.png" alt="Awards">
            <span><?php echo $user['awards']; ?> Awards</span>
        </div>
        <div class="info-item">
            <img src="icons/calendar.png" alt="Experience">
            <span><?php echo $user['years_experience']; ?> Years of Experience</span>
        </div>
        <div class="info-item">
            <img src="icons/certificate.png" alt="Certificates">
            <span><?php echo $user['certificate']; ?> Certificates</span>
        </div>
    </div>

    <!-- Logout Button -->
    <div class="logout-container">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</div>

    </div>

</body>
</html>
