<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminSty.css">
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        
        <section id="about">
            <h2>About</h2>
            <form action="process.php" method="POST">
                <input type="hidden" name="section" value="about">
                <label for="about-title">Title:</label>
                <input type="text" id="about-title" name="title" required>
                <label for="about-description">Description:</label>
                <textarea id="about-description" name="description" required></textarea>
                <button class="btn" type="submit">Save</button>
            </form>
        </section>

        <section id="skills">
            <h2>Skills</h2>
            <form action="process.php" method="POST">
                <input type="hidden" name="section" value="skills">
                <label for="skills-title">Title:</label>
                <input type="text" id="skills-title" name="title" required>
                <label for="skills-description">Description:</label>
                <textarea id="skills-description" name="description" required></textarea>
                <button class="btn" type="submit">Save</button>
            </form>
        </section>

        <section id="clients">
            <h2>Clients</h2>
            <form action="process.php" method="POST">
                <input type="hidden" name="section" value="clients">
                <label for="clients-title">Title:</label>
                <input type="text" id="clients-title" name="title" required>
                <label for="clients-description">Description:</label>
                <textarea id="clients-description" name="description" required></textarea>
                <button class="btn" type="submit">Save</button>
            </form>
        </section>
    </div>
</body>
</html>


