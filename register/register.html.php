<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <header>
                <h2>Registration</h2>
        </header>

        <section>
            <h3>Athlete and Volunteer Registration</h3>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.<br>Packet pick up hours: Thursday 8-5, Friday 9-noon.<br>No day of event packet pick up.</p>
            <p>COURSE DETAILS WATER TEMPERATURE is expected to be between 62 &amp; 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
            <h3>Cost Includes</h3>
            <ul>
                <li><i class="fas fa-angle-right"></i>Food &amp; Beer</li>
                <li><i class="fas fa-angle-right"></i>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                <li><i class="fas fa-angle-right"></i>Commemorative Finisher medal</li>
                <li><i class="fas fa-angle-right"></i>Accurate Chip Timing for competitive races</li>
                <li><i class="fas fa-angle-right"></i>Ace in the Hole Multisport Weekend Tech Shirt</li>
                <li><i class="fas fa-angle-right"></i>Post-event party &amp; entertainment</li>
            </ul>
            <p>NOTE: Tech shirts guaranteed to pre-registered participants only. </p>
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
                    <option value="na">Not attending Saturday</option>
                </select><br>
                <label for="satEvent">Saturday Event:</label>
                <select name="satEvent" id="satEvent">
                    <option></option>
                    <option value="longCourse">Long Course Triathlon</option>
                    <option value="10k">10k</option>
                    <option value="half">Half Marathon </option>
                    <option value="olympic">Olympic Triathlon</option>
                    <option value="none">None</option>
                </select><br>
                <label for="sunRole">Role for Sunday:</label>
                <select name="sunRole" id="sunRole">
                    <option></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="na">Not attending Saturday</option>
                </select><br>
                <label for="sunEvent">Sunday Event:</label>
                <select name="sunEvent" id="sunEvent">
                    <option></option>
                    <option value="sprint">Sprint Triathlon</option>
                    <option value="tryatri">Try-a-Tri</option>
                    <option value="splash">Splash n' Dash</option>
                    <option value="none">None</option>
                <label for="splashChild">Do you want to register a child for the Splash n' Dash on Sunday? (Free for one child with Adult Registration or $25 for child)</label>
                <article>
                    <input type="radio" id="childWithAdult" name="splashChild" value="childWithAdult">
                    <label for="childWithAdult">Child with Adult Registration</label><br>
                    <input type="radio" id="childWithoutAdult" name="splashChild" value="childWithoutAdult">
                    <label for="childWithoutAdult">Single Child without Adult Registration ($25)</label><br>
                    <input type="radio" id="noChild" name="splashChild" value="noChild">
                    <label for="noChild">I'm not registering a child</label><br>
                </article>
                <label for="comment">Comments:</label>
                <textarea name="comment">Please list any special accommodations that might be needed.</textarea>
                <button>Submit</button>
            </form>
        </section>
    
    </main>
    
<?php include '../includes/footer.inc.html.php'; ?>