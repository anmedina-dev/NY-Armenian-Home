<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/navigation.php' ?>

    <!--OPEN LETTER-->
    <section class = "container open-letter" id = "OpenLetter">
        <img src="images/Envelope.png" class="envelope">
        <div class="letter">
            <h3>Open Letter</h3>
            <hr class="letter-line">
            <p class="open-letter-writing">
                For over 65 years the New York Armenian Home has been caring for the frail and elderly. It has served as a home away from home for fellow Armenians, providing loving care in a culturally rich surrounding.
            </p>
            <p class="open-letter-writing">
                The Home’s mission began with a handful of Armenian Genocide survivors three generations ago. Regardless of political or church affiliation, the primary goal of the Home was to create a congenial surrounding, where the residents find a measure of happiness, while maintaining their Armenian culture.
            </p>
            <p class="open-letter-writing">
                As the Armenian community in the New York City tri-state area developed and thrived, the needs of our families have changed as well, and there is now a need for a more up to date facility with modern amenities. In keeping with the expectations of our community, our Board of Directors made a decision for the relocation and upgrade of the New York Armenian Home.
            </p>
            <p class="open-letter-writing">
                We plan to build a new facility where we will combine top-notch health care, exciting amenities and activities, into one vibrant and affordable lifestyle. In addition to an independent and active life, our residents’ families will enjoy greater peace of mind knowing that continuing care is available – should anybody ever need it. We are planning to open our doors to all seniors in need of elder care. The Home’s motto - “Our doors and hearts are always open” - will remain the same as we hope to continue to serve our seniors for years to come. 
            </p>
            <h5 class="ending-open-letter">- Armenian Home of New York</h5>
        </div>
    </section>
    <!--END OF OPEN LETTER-->

    
    
    <!--MISSION-->
    <section class=" mission-statement" id="Mission">
        <div class="mission-blog">
            <h3>Mission Statement</h3>
            <hr class="mission-line">
            <p>The mission of the Armenian Home of New York is to provide a caring, organized, well-maintained, full-service residential facility for seniors, who, regardless of financial status, by choice or otherwise, cannot or do not, wish to live alone. </p>
            <p>The Home’s mission began with a handful of Armenian Genocide survivors three generations ago. Regardless of political or church affiliation, the primary goal of the Home is to create congenial surroundings, where residents can find a measure of happiness, while maintaining their Armenian culture. </p>
            <p>We intend to continue to serve as a home away from home for fellow Armenians, providing love and care in a culturally rich surrounding. </p>

        </div>
    </section>
    <!--END OF MISSION-->

    <!--HISTORY-->
    <section class="history" id="History">
        <img class = "float-left" src="./images/Armenian_Flag.png" >
        <div class="container">
            <h3>History</h3>
            <hr class="mission-line">
            <p class="history-subtitle">“In the final judgment, a man’s accomplishments are measured by his contributions to the well-being of his fellow men. When a man can earn the respect and gratitude of his fellow men, and his community, he has achieved the true purpose of life and that is his true success.”</p>
            <p class="history-content">These words were written by Mrs. Siranoush Sanossian, whose philanthropic efforts led to the establishment of the Armenian Welfare Association of New York, a.k.a. The New York Armenian Home.
                The origins of the New York Armenian Home date back to the 1920’s, when Mrs. Sanossian became convinced of the need for such an institution by the plight of many elderly Armenians who had been cast off by their families. She gradually enlisted the support of a group of devout Armenian ladies in the New York area. Despite many trials and tribulations, including ridicule, the Home became a reality, assuring that the Armenian elderly need no longer live their last years in loneliness, if their families were unable to care for them.
            </p>
            <p class="history-content">On November 17, 1948, the Armenian Welfare Association of New York was incorporated. No sooner were the doors opened, than there was a waiting list for hopeful entrants. Within six years the need for a larger facility became evident. In the summer of 1954, a new location in Flushing, New York was purchased.  Despite the initial upgrade, by 1957 it became clear that there was a need for more beds.   A Building Fund Drive was launched, and after much consideration, the decision was made to add a new wing to the existing site. Three floors were added, allowing room for 80 residents.</p>
            <p class="history-content">For more than 65 years the New York Armenian Home has been caring for the frail and elderly.  But as the Armenian community in the New York City tri-state area developed and thrived, the needs of our families have changed as well.  There is now a need for a more modern facility with up-to-date amenities.  In keeping with the expectations of our community, the Board of Directors and the membership decided to relocate and upgrade the New York Armenian Home. The Board entered into negotiations with the Armenian Nursing and Rehab Center in Emerson, NJ to jointly build and manage a new facility on the Emerson Home’s existing property.</p>
            <p class="history-content">The new facility will combine top-notch health care, memory care, and assisted living with exciting amenities and activities, into one vibrant and affordable lifestyle. In addition to enjoying an independent and active lifestyle, our residents’ families will have greater peace of mind knowing that continuing care is available – should anybody ever need it. We are planning to open our doors to all seniors in need of elder care. 
                The Home’s motto - “Our doors and hearts are always open” - will remain the same as we hope to continue to serve our seniors for years to come.
            </p>

        </div>
    </section>
    <!--END OF HISTORY-->

    <!--PROJECT UPDATES-->
    <!--END OF PROJECT UPDATES-->
    <section class="container project-updates" id = "ProjectUpdates">
        <h3>Project Updates</h3>
        <hr>
        <div class="project-updates-content">
            <iframe width="70%" height="500" src="https://www.youtube.com/embed/t2AxDUYGKcc" frameborder="0" allowfullscreen></iframe>

                <!--
            <ul class="project-update-list">
                <li>
                    <div class="card bg-light mb-3">
                        <div class="card-header">02/03/2020</div>
                        <div class="card-body">
                          <h5 class="card-title">Emerson Project</h5>
                          <p class="card-text">e</p>
                        </div>
                      </div>
                    
                </li>
            </ul>

            -->
        </div>

    </section>

    <!--CONTACT US-->
    <section class="contact-us" id="ContactUs">
        <div class="container contact-form">
            <h2>Contact Us</h2>
            <hr>
            <form action="contact.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <label for="message">Message</label>
                        <textarea type="text" id="message" name="message" placeholder="Enter your message here" style="height:170px" required></textarea>
                    </div>
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </section>
    <!--END OF CONTACT US-->

    <!-- Footer -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">

        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <p>Armenian Home of New York<br>PO Box 754098<br>Forest Hills, New York 11375</p>

                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
            </div>
            <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center ">© 2020 Copyright:
            <a> ArmenianHomeNY.org</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>