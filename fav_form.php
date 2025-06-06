<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Charset Declaration -->
     <meta charset="UTF-8">
     <!-- Viewport Settings for Responsive Design -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Page Description for SEO -->
     <meta name="description" content="This page has a form that records favourites">
     <!-- Keywords for SEO -->
     <meta name="keywords" content="html form, Favourites, fun coding">
     <!-- Author Information -->
     <meta name="author" content="AT">
    <title>Favourite Things</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Font From Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" 
    rel="stylesheet">

    <style>
        #main {
    padding: 20px;
    max-width: 100%;
    margin: 0 auto;
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
        #introduction {
            margin-bottom: 20px;
        }

        /* Form Styling */
        #form form {
            display: flex;
            flex-direction: column;
        }

        #form label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        #form input[type="text"],
        #form input[type="color"],
        #form input[type="time"],
        #form input[type="date"],
        #form input[type="range"],
        #form textarea,
        #form select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            font-size: 16px;
            color: #333;
            box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        #form input[type="submit"],
        #form input[type="reset"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        #form input[type="submit"]:hover,
        #form input[type="reset"]:hover {
            background-color: #2980b9;
        }

        #form fieldset {
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        #form legend {
            font-weight: bold;
            color: #2c3e50;
        }

        /* Image Styling */
        #main img {
            width: 40%;
            height: auto;
            max-width: 600px;
            display: block;
            margin: 0 auto 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #form form {
                padding: 10px;
            }

            #main {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.inc'; ?>

    <!-- Use <div> when you need a simple container without semantic meaning, often for styling or scripting.
        Use <section> when you want to semantically group related content, especially when that 
            content would be logically grouped in a document outline and typically has its own heading. -->
    <div id="main">
        <img src="images/jonah-hill-yeah.gif" alt="A funny guy excited to share his Favourites">
        <section id="introduction">
            <h2>Share Your Favourites with Doki</h2>
            <p>We all have unique tastes, and this form is here to celebrate yours! Share your favourite things with us. Ready? Let's get started!</p>
        </section>
    
        <section id="form">
            <h2>Your Favourite Things (Because Everyone Has Unique Tastes)</h2>
            <form action="form.php" method="post">

                <!-- Name Input -->
                <label for="name">Your Legendary Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter your mighty name (40 Characters max)" maxlength="40" ><br><br>

                <!-- Favourite Number -->
                <label for="number">Favourite Number from 0 to 9:</label><br>
                <input type="text" id="number" name="number" placeholder="e.g., 2"><br><br>

                <!-- Favourite Colour -->
                <label for="colour">Favourite Colour (No, &apos;Invisible&apos; isn&apos;t a colour):</label><br>
                <input type="color" id="colour" name="colour"><br><br>

                <!-- Favourite Pet (Checkboxes) -->
                <label>Favourite Pet (Pick as many as you like- We won&apos;t judge... much):</label><br>
                <label for="dog">
                <input type="checkbox" id="dog" name="pet[]" value="dog">
                Dog</label><br>
                <label for="cat">
                <input type="checkbox" id="cat" name="pet[]" value="cat">
                Cat</label><br>
                <label for="dragon">
                <input type="checkbox" id="dragon" name="pet[]" value="dragon">
                Dragon (Because why not?)</label><br><br>

                <!-- Favourite Teacher (Radio Buttons) -->
                    
                <fieldset> <!-- This groups the related form elements together, creating a visual boundary and associating them logically.-->
                    <legend>Your Favourite Teacher</legend>  <!-- This provides a caption for the grouped elements.-->
                    <input type="radio" id="ati" name="teacher" value="ati" checked>
                    <label for="ati">Ati</label><br><br>
                    <input type="radio" id="other" name="teacher" value="other" disabled>
                    <label for="other">Someone Else</label><br><br>
                </fieldset><br><br>
                
                <!-- Favourite Subject (Checkboxes) -->
                <label>Favourite Subject (Pick as many as you like):</label><br>
                <label for="cos10026-1">
                <input type="checkbox" id="cos10026-1" name="subject[]" value="COS10026">
                COS10026</label><br>
                <label for="cos10026-2">
                <input type="checkbox" id="cos10026-2" name="subject[]" value="ctip">
                Computing Technology Inquiry Project </label><br>
                <label for="cos10026-3">
                <input type="checkbox" id="cos10026-3" name="subject[]" value="atis_subject">
                Ati&apos;s Subject</label><br><br>

                <!-- Favourite Movie Genre (Dropdown) -->
                <label for="genre">Favourite Movie Genre:</label><br>
                <select id="genre" name="genre">
                    <option value="comedy">Comedy (Because life is too serious)</option>
                    <option value="sci-fi">Sci-Fi (For the future visionaries)</option>
                    <option value="romance">Romance (For the hopeless romantics)</option>
                    <option value="action">Action (For the adrenaline junkies)</option>
                </select><br><br>

                <!-- Time (Time Picker) -->
                <label for="naptime"> Favourite Time to Take a Nap: </label>
                <input type="time" id="naptime" name="naptime"><br><br>

                <!-- Birthday (Date Picker) -->
                <label for="birthday">Your Birthday (Because everyone loves cake!):</label><br>
                <input type="date" id="birthday" name="birthday"><br><br>
               
                <!-- Rating Your Day (Range) -->
                <label for="dayrating">How&apos;s Your Day Going? (Slide to rate):</label><br>
                <input type="range" id="dayrating" name="dayrating" min="1" max="10"><br><br>

                <!-- Comments (Textarea) -->
                <label for="comments">Any Additional Comments or Fun Facts?</label><br>
                <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Share your thoughts, or tell us something interesting!" ></textarea><br><br>

                <!-- Submit Button -->
                <input type="submit" value="Submit Your Favourites">

                <!-- Reset Button-->
                <input type="reset" value="Reset">
            </form>
        </section>
    </div>

    <?php include 'footer.inc'; ?>
</body>
</html>
