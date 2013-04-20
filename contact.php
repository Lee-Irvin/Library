
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
                <div class="heading">
                    <h1>Contact Form</h1>
                </div>
                <div class="contactform">
                    <form class="contact_form" action="includes/sendcontact.php" method="post" name="contact_form">
                        <table cellspacing="5">
                            <tr>
                                <td><label>Name:</label></td>
                                <td><input type="text" name="name" title="Enter your name!" placeholder="enter name" /></td>
                            </tr>
                            <tr>
                                <td><label>Surname:</label></td>
                                <td><input type="text" name="surname" title="Enter your surname!" placeholder="enter surname" /></td>
                            </tr>
                            <tr>
                                <td><label>Number:</label></td>
                                <td><input type="text" name="number" title="Enter your number!" placeholder="enter number" /></td>
                            </tr>
                            <tr>
                                <td><label>Email Address:</label></td>
                                <td><input type="email" name="email" title="Enter a valid email address!" placeholder="enter email address" /></td>
                            </tr>
                            <tr>
                                <td><label>Message:</label></td>
                                <td><textarea name="message" id="message" rows="5" cols="30" placeholder="enter message" ></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <?php
                                            //require_once 'library/math-security.php';
                                            //$math = new BasicMathSecurity( 'math' );
                                            //echo $math->getField();
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><label id="error"></label></td>
                            </tr>
                            <tr>
                                <td><input type="submit" size="10" class="input-submit" value="Submit" /></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
