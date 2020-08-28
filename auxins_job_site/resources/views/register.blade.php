<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Register</title>
    <link href='#' rel='stylesheet' type = '#'><!--Fonts-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel='stylesheet' type='text/css'><!--CSS frameworks{{ asset('bootstrap-3.4.1-dist\css\bootstrap.min.css') }}-->
    <link href = "{{ asset('css\register.css') }}" rel = 'stylesheet' type = 'text/css'/><!--Custom CSS-->
    <script
    src="{{ asset('jquery-3.5.1.min.js') }}"
    type='application/javascript'>
    </script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    type='application/javascript'>
    </script><!--JavasScript frameworks{{ asset('bootstrap-3.4.1-dist\js\bootstrap.min.js') }}-->
    <script src="js\root.js"
    type='application/javascript'>
    </script><!--Custom JavaScript-->
</head>

<body class="rootBody">
    <header id="rootHeader">
        <img class="rootImg" src='png\banner.png'>
    </header>
    <main id="rootMain">
        <nav class="navbar navbar-light bg-light pageNav">
            <strong class="pageStrong"><u>About</u></strong>

            <a href="http://127.0.0.1:8000/about" class="btn bg-light pageA pageButton">Digital CV Builder</a>

            <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light pageA pageButton">Job Coaching</a>

            <div class="btn-group">
                <button type="button" class="btn bg-light dropdown-toggle pageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item bg-light pageButton" href="#">Account</a>
                    <a class="dropdown-item bg-light pageButton" href="#">Terms & Conditions</a>
                    <a class="dropdown-item bg-light pageButton" href="#">Developers</a>
                    <a class="dropdown-item bg-light pageButton" href="#">Logout</a>
                </div>
            </div>
    </nav>
    <main class="registerBody">
    </main>
    </main>
    <footer id="rootFooter">
        <div id="rootFooterLogo">
            <img class="rootImg" src='png\auxins.png'>
        </div>
        <div id ="rootFooterBusinessEnquiries">
            <p class="rootP">Contact information:</p>
            <?php
                $contactDetails = array(
                    "Email address" => "fakeemail@fakemail.com",
                    "Telephone" => "+44 1632 960964",
                    "Mail address" => "61 Fox Road,<br>Framingham Pigot,<br>NORWICH,<br>NR14 7PZ"
                );
            ?>
            <table>
                <?php foreach ($contactDetails as $detail => $value):
                    echo '<tr>';
                    echo '<td style="text-align: right">' . $detail . '</td>';
                    echo '<td>' . $value . '</td>';
                    echo '</tr>';
                endforeach; ?>
            </table>
        </div>
        <div id="rootFooterOpeningHours">
            <?php        
                // REQUIRED
                // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
                date_default_timezone_set('Europe/London');
                // Include the store hours class
                use App\Libraries\StoreHours;

                // REQUIRED
                // Define daily open hours
                // Must be in 24-hour format, separated by dash
                // If closed for the day, leave blank (ex. sunday)
                // If open multiple times in one day, enter time ranges separated by a comma
                $hours = array(
                    'mon' => array('09:00-17:00'),
                    'tue' => array('09:00-17:00'),
                    'wed' => array('09:00-17:00'),
                    'thu' => array('09:00-17:00'), // Open late
                    'fri' => array('09:00-17:00'),
                    'sat' => array('09:00-17:00'),
                    'sun' => array('09:00-17:00')
                );

                // OPTIONAL
                // Add exceptions (great for holidays etc.)
                // MUST be in a format month/day[/year] or [year-]month-day
                // Do not include the year if the exception repeats annually
                $exceptions = array(
                    '2/24'  => array('11:00-18:00'),
                    '10/18' => array('11:00-16:00', '18:00-20:30')
                );

                $config = array(
                    'separator'      => ' - ',
                    'join'           => ' and ',
                    'format'         => 'g:ia',
                    'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
                );

                // Instantiate class
                $store_hours = new StoreHours($hours, $exceptions, $config);
                
                // Display open / closed message
                if($store_hours->is_open()) {
                    echo '<p class="rootP" style="color: green;">We are open!</p><p class="rootP">Normal office hours:</p>';
                } else {
                    echo '<p class="rootP" style="color: red;">We are closed.</p><p class="rootP">Normal office hours:</p>';
                }

                // Display full list of open hours (for a week without exceptions)
                echo '<table>';
                foreach ($store_hours->hours_this_week() as $days => $hours) {
                    echo '<tr>';
                    echo '<td style="text-align: right">' . $days . '</td>';
                    echo '<td>' . $hours . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </footer>
    <form id="registrationForm" class="topLayer">afdf
    </form>
</body>

</html>
