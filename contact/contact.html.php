<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <header>
                <h2>H2 Heading</h2>
        </header>

        <section>
            <h3>H3 Heading</h3>
            <p>Small kitty warm kitty little balls of fur cat jumps and falls onto the couch purrs and wakes up in a new dimension filled with kitty litter.</p>
            <form method="post" action=" ">
                <label for="fullName">Name:</label>
                <input type="text" id="fullName" name="fullName"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="role">Role:</label>
                <article>
                    <input type="radio" id="athlete" class="role" name="drone">
                    <label for="athlete" class="role">Athlete</label><br>
                    <input type="radio" id="volunteer" class="role" name="drone">
                    <label for="volunteer" class="role">Volunteer</label><br>
                    <input type="radio" id="interested" class="role" name="drone">
                    <label for="interested" class="role">Interested Party</label>
                </article>
                <label for="comment">Question or Comment:</label>
                <textarea name="comment"></textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>