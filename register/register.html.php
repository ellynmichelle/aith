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
                <input type="email" id="email" name="email"><br>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age"><br>
                <label for="gender">Gender Identification:</label>
                <select name="gender" id="gender">
                    <option></option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Non-binary/Other</option>
                </select><br>
                <label for="emergencyContact">Emergency Contact Name:</label>
                <input type="text" id="emergencyContact" name="emergencyContact"><br>
                <label for="emergencyNumber">Emergency Contact Phone Number:</label>
                <input type="tel" id="emergencyNumber" name="emergencyNumber"><br>
                <label for="satRole">Role for Saturday:</label>
                <article>
                    <input type="radio" id="athlete" name="satRole" value="athlete">
                    <label for="athlete">Athlete</label><br>
                    <input type="radio" id="volunteer" name="satRole" value="volunteer">
                    <label for="volunteer">Volunteer</label><br>
                    <input type="radio" id="na" name="satRole" value="na">
                    <label for="na">Not Attending</label><br>
                </article>
                <label for="satEvent">Saturday Events:</label>
                <article>
                    <input type="radio" id="longCourse" name="satEvent" value="longCourse">
                    <label for="longCourse">7:00am Long Course Triathlon</label><br>
                    <input type="radio" id="10k" name="satEvent" value="10k">
                    <label for="10k">7:15am 10k</label><br>
                    <input type="radio" id="half" name="satEvent" value="half">
                    <label for="half">7:15am Half Marathon</label><br>
                    <input type="radio" id="olympic" name="satEvent" value="olympic">
                    <label for="olympic">7:30am Olympic Triathlon</label><br>
                    <input type="radio" id="none" name="satEvent" value="none">
                    <label for="none">None</label><br>
                </article>
                <label for="satRole">Role for Sunday:</label>
                <article>
                    <input type="radio" id="athlete" name="sunRole" value="athlete">
                    <label for="athlete">Athlete</label><br>
                    <input type="radio" id="volunteer" name="sunRole" value="volunteer">
                    <label for="volunteer">Volunteer</label><br>
                    <input type="radio" id="na" name="sunRole" value="na">
                    <label for="na">Not Attending</label><br>
                </article>
                <label for="sunEvent">Sunday Events:</label>
                <article>
                    <input type="radio" id="sprint" name="sunEvent" value="sprint">
                    <label for="sprint">8:00am Sprint Triathlon</label><br>
                    <input type="radio" id="tryatri" name="sunEvent" value="tryatri">
                    <label for="tryatri">8:20am Try-a-Tri</label><br>
                    <input type="radio" id="splashndash" name="sunEvent" value="splashndash">
                    <label for="splashndash">12:00pm Splash n Dash</label><br>
                    <input type="radio" id="none" name="sunEvent" value="none">
                    <label for="none">None</label><br>
                </article>
                <label for="comment">Comments:</label>
                <textarea name="comment">Please list any special accommodations that might be needed.</textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>