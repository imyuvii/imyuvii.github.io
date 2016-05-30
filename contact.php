<?php
/**
 * Created by PhpStorm.
 * User: imyuvii
 * Date: 14/01/16
 * Time: 6:57 PM
 */

?>
<!-- Contact Form -->
<form method="POST" action="https://joedawson.me" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="Qnhkvg4igiVhqTd4lseMmJfHNJ2ZgBDDR6bgl8EZ">
    <div class="row">
        <!-- First Name -->
        <div class="col-6">
            <input placeholder="First Name" required="required" name="first_name" type="text">
        </div>
        <!-- First Name -->
        <div class="col-6">
            <input placeholder="Last Name" required="required" name="last_name" type="text">
        </div>
    </div>
    <div class="row">
        <!-- Email Address -->
        <div class="col-6">
            <input placeholder="Email Address" required="required" name="email" type="email">
        </div>
        <!-- Subject -->
        <div class="col-6 select-wrapper">
            <select name="subject">
                <option value="0">Select a Subject</option>
                <option value="General">General</option>
                <option value="Business">Business</option>
                <option value="Just Saying Hi!">Just Saying Hi!</option>
            </select>
        </div>
    </div>
    <!-- Message -->
    <textarea placeholder="Message" required="required" name="text" cols="50" rows="10"></textarea>
    <input type="submit" value="Send Message">
</form>

<div class="row work">
    <div class="col-6">
        <a href="https://instamacro.com/" target="_blank" title="View the Laracasts Project">
            <img src="images/work/instamacro.png" alt="Laracasts" class="img-responsive bmg-20" />
        </a>
        <a href="http://www.djwarehouse.com.au/" target="_blank" title="View the Creplocker Project">
            <img src="images/work/djware.png" alt="Creplocker" class="img-responsive bmg-20" />
        </a>
    </div>
    <div class="col-6">
        <a href="http://rivian.com/" target="_blank" title="View the Laracasts Project">
            <img src="images/work/rivian.png" alt="Laracasts" class="img-responsive bmg-20" />
        </a>
        <a href="http://www.arkadium.com/" target="_blank" title="View the Creplocker Project">
            <img src="images/work/arcadian.png" alt="Creplocker" class="img-responsive bmg-20" />
        </a>
    </div>
</div>