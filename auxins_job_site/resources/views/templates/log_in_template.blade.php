<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>@yield('title')</title>
    <link href='#' rel='stylesheet' type = '#'><!--Fonts-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel='stylesheet' type='text/css'><!--CSS frameworks{{ asset('bootstrap-3.4.1-dist\css\bootstrap.min.css') }}-->
    <link href = "{{ asset('css\log_in_template.css') }}" rel = 'stylesheet' type = 'text/css'/>
    <link href = "{{ asset('css\base_template.css') }}" rel = 'stylesheet' type = 'text/css'/><!--Custom CSS-->
    <script
    src="{{ asset('jquery-3.5.1.min.js') }}"
    type='application/javascript'>
    </script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    type='application/javascript'>
    </script><!--JavasScript frameworks{{ asset('bootstrap-3.4.1-dist\js\bootstrap.min.js') }}-->
    <script src="js\base_template.js"
    type='application/javascript'>
    </script>
    <script src="js\log_in_template.js"
    type='application/javascript'>
    </script>
    @auth <script>publicPage()</script> @endauth<!--Custom JavaScript-->
</head>
<body id="rootBody">
    <header id="rootHeader"class="center">
        <img class="imageFill" src='png\banner.png'>
    </header>
    <main id="rootMain">        
        <nav class="navbar navbar-light bg-light primmaryNav text-dark">
            <p class="fontLarge fontBold fontFill center">About</p>

            <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light fontLarge fontFill center noOutline" @guest onclick="anchorGuest(event)" @endguest>Digital CV Builder</a>

            <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light fontLarge fontFill center noOutline" @guest onclick="anchorGuest(event)" @endguest>Job Coaching</a>

            <div class="btn-group">
                <button type="button" class="btn bg-light dropdown-toggle fontLarge fontFill center noOutline" style="flex-direction: row;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @guest onclick="anchorGuest(event)" @endguest>
                More
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Account</a>
                    <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Terms & Conditions</a>
                    <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Developers</a>
                    <a class="dropdown-item bg-light fontLarge center noOutline" href="http://127.0.0.1:8000/user/logout">Log Out</a>
                </div>
            </div>
        </nav>
        <article id="logInTemplateMain">
    </main>
    <footer id="rootFooter" class="center">
        <div id="rootFooterLogo" class="center">
            <img class="imageFill" src='png\auxins.png'>
        </div>
        <div id ="rootFooterBusinessEnquiries" class="center">
            <p class="fontSmall fontMinimumSpace">Contact information:</p>
            <?php
                $contactDetails = array(
                    "Email address" => "fakeemail@fakemail.com",
                    "Telephone" => "+44 1632 960964",
                    "Mail address" => "61 Fox Road,<br>Framingham Pigot,<br>NORWICH,<br>NR14 7PZ"
                );
            ?>
            <table class="fontSmall">
                <?php foreach ($contactDetails as $detail => $value):
                    echo '<tr>';
                    echo '<td style="text-align: right">' . $detail . '</td>';
                    echo '<td style="text-align: left">' . $value . '</td>';
                    echo '</tr>';
                endforeach; ?>
            </table>
        </div>
        <div id="rootFooterOpeningHours" class="center">
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
                    echo '<p class="fontSmall fontMinimumSpace" style="color: green;">We are open!</p><p class="fontSmall fontMinimumSpace">Normal office hours:</p>';
                } else {
                    echo '<p class="fontSmall fontMinimumSpace" style="color: red;">We are closed.</p><p class="fontSmall fontMinimumSpace">Normal office hours:</p>';
                }

                // Display full list of open hours (for a week without exceptions)
                echo '<table class="fontSmall">';
                foreach ($store_hours->hours_this_week() as $days => $hours) {
                    echo '<tr>';
                    echo '<td style="text-align: right">' . $days . '</td>';
                    echo '<td style="text-align: left">' . $hours . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </footer>
    @yield('form')
</body>

</html>
