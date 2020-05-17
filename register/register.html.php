<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <header>
                <h2>H2 Heading</h2>
        </header>

        <section>
            <h3>H3 Heading</h3>
            <p>Small kitty warm kitty little balls of fur cat jumps and falls onto the couch purrs and wakes up in a new dimension filled with kitty litter.</p>
            <form action="">
                <label for="fullName">Name:</label>
                <input type="text" id="fullName" name="fullName"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age"><br>
                <label for="gender">Gender Identification:</label>
                <select id="gender">
                    <option value="blank"></option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Non-binary/Other</option>
                </select><br>
                <label for="emergencyContact">Emergency Contact Name:</label>
                <input type="text" id="emergencyContact" name="emergencyContact"><br>
                <label for="emergencyNumber">Emergency Contact Phone Number:</label>
                <input type="text" id="emergencyNumber" name="emergencyNumber"><br>
                <label for="role">Role for Saturday:</label>
                <article>
                    <input type="radio" id="athlete" class="role" name="drone">
                    <label for="athlete" class="role">Athlete</label><br>
                    <input type="radio" id="volunteer" class="role" name="drone">
                    <label for="volunteer" class="role">Volunteer</label>
                </article>
                <label for="satEvent">Saturday Events:</label>
                <article>
                    <input type="checkbox" id="long" class="long">
                    <label for="long" class="long">Long Course Triathlon - 7:00am</label><br>
                    <input type="checkbox" id="olympic" class="olympic">
                    <label for="olympic" class="olympic">Olympic Triathlon - 7:30am</label><br>
                    <input type="checkbox" id="10k" class="10k">
                    <label for="10k" class="10k">10k - 7:15am</label><br>
                    <input type="checkbox" id="half" class="half">
                    <label for="half" class="half">Half Marathon - 7:15am</label>
                </article>
                <label for="role">Role for Sunday:</label>
                <article>
                    <input type="radio" id="athlete" class="role" name="drone">
                    <label for="athlete" class="role">Athlete</label><br>
                    <input type="radio" id="volunteer" class="role" name="drone">
                    <label for="volunteer" class="role">Volunteer</label>
                </article>
                <label for="sunEvent">Sunday Events:</label>
                <article>
                    <input type="checkbox" id="sprint" class="sprint">
                    <label for="sprint" class="sprint">Sprint Triathlon - 8:00am</label><br>
                    <input type="checkbox" id="try" class="try">
                    <label for="try" class="try">Try-a-Tri - 8:20am</label><br>
                    <input type="checkbox" id="splash" class="splash">
                    <label for="splash" class="splash">Splash n Dash - 12:00pm</label><br>
                </article>
                <textarea name="comment">Please list any special accommodations that might be needed.</textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>