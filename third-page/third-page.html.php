<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <section>
            <h2>H2 Heading</h2>
        </section>

        <section>
            <h3>H3 Heading</h3>
            <p>Small kitty warm kitty little balls of fur cat jumps and falls onto the couch purrs and wakes up in a new dimension filled with kitty litter.</p>
            <form action="">
                <label for="fullName">Name:</label>
                <input type="text" id="fullName" name="fullName" value="Name"><br>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" value="Age"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="Email"><br>
                <label for="event">Event:</label>
                <select id="event">
                    <option value="option01">Option 1</option>
                    <option value="option02">Option 2</option>
                </select><br>
                <input type="radio" id="athlete" class="role" name="drone" value="athlete">
                <label for="athlete" class="role">Athlete</label><br>
                <input type="radio" id="volunteer" class="role" name="drone" value="volunteer">
                <label for="volunteer" class="role">Athlete</label><br>
                <input type="submit" value="Submit">
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>