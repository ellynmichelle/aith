<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <header>
                <h2>Contact</h2>
        </header>

        <section>
            <h3>Get in Touch</h3>
            <p>If you have any questions or comments, please dont hesitate to get in touch.</p>
            <form method="post" action=" ">
                <label for="fullName">Name:</label>
                <input type="text" id="fullName" name="fullName"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="role">What are you interested in?</label>
                <article>
                    <input type="radio" id="athlete" name="role" value="athlete">
                    <label for="athlete">Being an Athlete</label><br>
                    <input type="radio" id="volunteer" name="role" value="volunteer">
                    <label for="volunteer">Being a Volunteer</label><br>
                    <input type="radio" id="other" name="role" value="other">
                    <label for="other">Other/Interested Party</label><br>
                </article>
                <label for="comment">Question or Comment:</label>
                <textarea name="comment"></textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>