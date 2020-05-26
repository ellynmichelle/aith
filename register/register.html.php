<?php include '../includes/header-alt.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
    
        <header>
                <h2>Registration</h2>
        </header>

        <section>
            <h3>Athlete and Volunteer Registration</h3>
            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
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
                    <label for="longCourse">7:00am Long Course Triathlon $240</label><br>
                    <input type="radio" id="10k" name="satEvent" value="10k">
                    <label for="10k">7:15am 10k $50</label><br>
                    <input type="radio" id="half" name="satEvent" value="half">
                    <label for="half">7:15am Half Marathon $75</label><br>
                    <input type="radio" id="olympic" name="satEvent" value="olympic">
                    <label for="olympic">7:30am Olympic Triathlon $110</label><br>
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
                    <label for="sprint">8:00am Sprint Triathlon $90</label><br>
                    <input type="radio" id="tryatri" name="sunEvent" value="tryatri">
                    <label for="tryatri">8:20am Try-a-Tri $65</label><br>
                    <input type="radio" id="splashndash" name="sunEvent" value="splashndash">
                    <label for="splashndash">12:00pm Splash n Dash Free with Adult Registration or $25</label><br>
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