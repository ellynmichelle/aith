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
                <select name="satRole" id="satRole">
                    <option></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="na">Not Attending</option>
                </select><br>
                <label for="satEvent">Saturday Events:</ label>
                <select name="satEvent" id="satEvent">
                    <option></option>
                    <option value="long">Long Course Triathlon - 7:00am</option>
                    <option value="olympic">Olympic Triathlon - 7:30am</option>
                    <option value="10k">10k - 7:15am</option>
                    <option value="half">Half Marathon - 7:15am</option>
                    <option value="none">None</option>
                </select><br>
                <label for="sunRole">Role for Sunday:</label>
                <select name="sunRole" id="sunRole">
                    <option></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="na">Not Attending</option>
                </select><br>
                <label for="sunEvent">Sunday Events:</label>
                <select name="sunEvent" id="sumEvent">
                    <option></option>
                    <option value="sprint">Sprint Triathlon - 8:00am</option>
                    <option value="try">Try-a-Tri - 8:20am</option>
                    <option value="splash">Splash n Dash - 12:00pm</option>
                    <option value="none">None</option>
                </select><br>
                <label for="comment">Comments:</label>
                <textarea name="comment">Please list any special accommodations that might be needed.</textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>