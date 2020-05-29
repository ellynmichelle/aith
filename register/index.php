<?php

    include '../includes/db.inc.html.php';

    // Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
    if (isset($_POST['fullName'])) {
        // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $emergencyContact = $_POST['emergencyContact'];
        $emergencyNumber = $_POST['emergencyNumber'];
        $satRole = $_POST['satRole'];
        $satEvent = $_POST['satEvent'];
        $sunRole = $_POST['sunRole'];
        $sunEvent = $_POST['sunEvent'];
        $splashChild = $_POST['splashChild'];
        $comment = $_POST['comment'];

        // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
        try {
            $sql = 'INSERT INTO registration SET
              fullName = :fullName,
              email = :email,
              age = :age,
              gender = :gender,
              emergencyContact = :emergencyContact,
              emergencyNumber = :emergencyNumber,
              satRole = :satRole,
              satEvent = :satEvent,
              sunRole = :sunRole,
              sunEvent = :sunEvent,
              splashChild = :splashChild,
              comment = :comment';
            $s = $pdo->prepare($sql);
            $s->bindValue(':fullName', $fullName);
            $s->bindValue(':email', $email);
            $s->bindValue(':age', $age);
            $s->bindValue(':gender', $gender);
            $s->bindValue(':emergencyContact', $emergencyContact);
            $s->bindValue(':emergencyNumber', $emergencyNumber);
            $s->bindValue(':satRole', $satRole);
            $s->bindValue(':satEvent', $satEvent);
            $s->bindValue(':sunRole', $sunRole);
            $s->bindValue(':sunEvent', $sunEvent);
            $s->bindValue(':splashChild', $splashChild);
            $s->bindValue(':comment', $comment);
            $s->execute();
        } catch (PDOException $e) {
            $error = 'Error adding submitted form: ' . $e->getMessage();
            include '../includes/error.html.php';
            exit();
        }
        // load the thank you page after the INSERT runs
        include 'success.html.php';
        // Add an else to load the initial page if the initial (line 19) if statement is false
    } else {
        include 'register.html.php'; //Modify this to include the initial file for this folder
    }

?>
