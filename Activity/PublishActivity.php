<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publish Activity</title>
    <link rel="stylesheet" href="PublishActivity.css">
    <link rel="stylesheet" href="../miscellaneous.css">
    <script src="../Index/index.js"></script>
</head>
<body>
<?php
include_once '../includes/Header.inc.php';
?>
<main>
    <h1>Publish a Volunteering Activity</h1>
    <section class="container">
        <form action="HandleActivityPublish.php" class="form" method="post" enctype="multipart/form-data">
            <section id="title_container">
                <label for="title" class="label" id="title_label">Title:</label>
                <input type="text" name="title" id="title" required>
            </section>
            <section id="category_container">
                <p class="label">Activity's category/ies:</p>
                <div id="category_checkbox">
                    <div>
                        <input type="checkbox" id="Sustainable_agriculture" value="Sustainable_agriculture"
                               name="categories[]">
                        <input type="hidden" name="allCategories[]" value="Sustainable_agriculture">
                        <label for="Sustainable_agriculture" class="check_box_label">Sustainable agriculture</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Marine_conservation" name="categories[]" value="Marine_conservation">
                        <input type="hidden" name="allCategories[]" value="Marine_conservation">
                        <label for="Marine_conservation" class="check_box_label">Marine conservation</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Nature_conservation" name="categories[]" value="Nature_conservation">
                        <input type="hidden" name="allCategories[]" value="Nature_conservation">
                        <label for="Nature_conservation" class="check_box_label">Nature conservation</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Renewable_energy" name="categories[]" value="Renewable_energy">
                        <input type="hidden" name="allCategories[]" value="Renewable_energy">
                        <label for="Renewable_energy" class="check_box_label">Renewable energy</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Reforestation" name="categories[]" value="Reforestation">
                        <input type="hidden" name="allCategories[]" value="Reforestation">
                        <label for="Reforestation" class="check_box_label">Reforestation</label>
                    </div>
                </div>
            </section>
            <section class="textarea_container">
                <label for="description" class="label">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10"
                          placeholder="A brief description of the volunteering activity..." required></textarea>
            </section>
            <section class="textarea_container">
                <label for="highlights" class="label">Highlights:</label>
                <textarea name="highlights" id="highlights" cols="30" rows="10" placeholder="Activity's Highlights..."
                          required></textarea>
            </section>
            <section class="textarea_container">
                <label for="typical_day" class="label">Typical Day:</label>
                <textarea name="typical_day" id="typical_day" cols="30" rows="10"
                          placeholder="Activity's typical day..." required></textarea>
            </section>
            <section class="textarea_container">
                <label for="free_day" class="label">Free-day Activities:</label>
                <textarea name="free_day" id="free_day" cols="30" rows="10"
                          placeholder="Possible activities of a free day..." required></textarea>
            </section>
            <section class="textarea_container">
                <label for="volunteers" class="label" id="num_volunteers">Number of volunteers:</label>
                <input type="number" id="volunteers" name="num_of_volunteers" min="1" required>
            </section>
            <section class="textarea_container">
                <label for="begin_date" class="label" id="start_date">Select the starting date:</label>
                <input type="date" name="begin_date" placeholder="dd-mm-yyyy" value="" min="2022-01-01" max="2030-12-31"
                       id="begin_date" required>
            </section>
            <section class="textarea_container">
                <label for="end_date" class="label" id="finish_day">Select the ending date:</label>
                <input type="date" name="end_date" placeholder="dd-mm-yyyy" value="" min="2022-01-01" max="2030-12-31"
                       id="end_date" required>
            </section>
            <section class="textarea_container">
                <label for="min_days" class="label" id="threshold">Minimum days of participation:</label>
                <input type="number" id="min_days" name="min_days" min="1" required>
            </section>
            <section class="textarea_container">
                <label for="requirements" class="label" id="activity_requirements">Activity's requirements:</label>
                <textarea name="requirements" id="requirements" cols="30" rows="10"
                          placeholder="Activity's typical day..." required></textarea>
            </section>
            <section class="textarea_container">
                <label for="recommended_for" class="label" id="recommended">Recommended for:</label>
                <textarea name="recommended_for" id="recommended_for" cols="30" rows="10"
                          placeholder="For which people is this activity suitable for.&#10;eg. singles, families, adults, disabled people..."
                          required></textarea>
            </section>
            <section>
                <div id="multimedia_container">
                    <div class="label">Multimedia:</div>
                    <label for="multimedia" id="multimedia_button">Choose Files</label>
                    <input type="file" id="multimedia" name="multimedia[]" multiple
                           accept="image/png, image/jpeg, image/jpg, video/mp4">
                </div>
            </section>
            <section id="button_container">
                <a href="../Index/index.php" id="cancel">Cancel</a>
                <button type="submit" name="submit" id="submit">Publish</button>
            </section>
        </form>
    </section>
</main>
<?php
include_once '../includes/Footer.inc.php';
?>
</body>
</html>