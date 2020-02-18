<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Steven Gerards</title>

        <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='../packages/core/main.js'></script>
    <script src='../packages/interaction/main.js'></script>
    <script src='../packages/daygrid/main.js'></script>
    <script src='../packages/timegrid/main.js'></script>
    <script src='../packages/list/main.js'></script>
    <script src='../resources/js/app.js'></script>
    <script src="../packages/shoppingcart/store.js"></script>

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/custom.css') }}" rel='stylesheet'>
    <link href='../packages/core/main.css' rel='stylesheet' />
    <link href='../packages/daygrid/main.css' rel='stylesheet' />
    <link href='../packages/timegrid/main.css' rel='stylesheet' />
    <link href='../packages/list/main.css' rel='stylesheet' />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
            });

            calendar.render();
        });

    </script>

    <script type="text/JavaScript">
            function createNewElement() {
                // First create a DIV element.
                var txtNewInputBox = document.createElement('div');

                // Then add the content (a new input box) of the element.
                txtNewInputBox.innerHTML = "<input type='text' id='newInputBox' class='bookingnameinput'>";

                // Finally put it where it is supposed to appear.
                document.getElementById("newElementId").appendChild(txtNewInputBox);
            }

    </script>

    <script>

    </script>

    </head>
    <body>
        
    <section id="home">
        <header>
            <div class="headerlogo">
                <div class="navbarphoto">
                    <img src="/storage/img/logosteven.jpg" alt="logo">
                </div>
            </div>
            
            <nav>
                <a class="navbuttonone" href="#home">Home</a>
                <a class="navbuttontwo" href="#biografie">Biografie</a>
                <a class="navbuttonthree" href="#boeken">Boeken</a>
                <a class="navbuttonfour" href="#socialmedia">Social Media</a>
                <a class="navbuttonfive" href="#agenda">Agenda</a>
                <a class="navbuttonsix" href="#contact">Contact</a>
            </nav>

        </header>

        <section class="video">
            <div class="videosection">
            </div>
        </section>

    </section>

    <section id="biografie">
        <main>
            <div class="biografie">
                <h2 class="biografieheadtext">Biografie</h2>
                <p class="biografietext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem corporis cum molestias sint! Aliquam aliquid animi debitis dolor, eligendi facilis illo inventore labore laboriosam nam nemo, officia perspiciatis sed tempore unde. Blanditiis commodi debitis dignissimos dolorum ducimus, eum facere fugit incidunt laborum molestias nemo non odio officia quaerat quisquam quo sed tempora temporibus veritatis vero. Consectetur eveniet facere libero maxime, nisi perspiciatis quibusdam velit. A alias, autem deleniti deserunt laboriosam maxime neque odit quia quibusdam quis sed vero! A provident suscipit vero. Aliquam deserunt dignissimos eos expedita iste labore laborum natus nemo perferendis placeat, quae rerum, sapiente, tempora ullam?</p>
            </div>
        </main>
    </section>
        
    <section id="boeken" class="bookssection">
        <div class="bookstitle">
            <h2 class="headbooktext">Boeken</h2>
        </div>

        <div class="container products">
            
            <div class="row">

                @foreach($products as $product)
                    <div class="booksrowfirst">
                        <div class="thumbnail">
                            <img class="bookimg" src="{{ $product->photo }} " alt="logo">
                            <div class="firstbookinfo">
                                <h4 class="booktitle">{{ $product->name }}</h4>
                                <a href="#contact" class="cartbooks" role="button">Interesse</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    


        <section id="socialmedia">
            <div class="socialmediainstagram">
                <div class="instagramheadtext">
                    <h2 class="instagramtext">Instagram</h2>
                </div>

                <div class="socialmediafacebook">
                    <h2 class="facebooktext">Facebook</h2>
                </div>
            </div>

            <div class="socialmediaphotosrows">
                <div class="instagramphotosrow">
                    <div class="instagramphotosrowsone">
                        <a href="https://www.instagram.com/p/B73K9adhXVd/"><img class="instagramphoto" src="/storage/img/instagram/instagram1.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LA4ZhOW8/"><img class="instagramphoto" src="/storage/img/instagram/instagram2.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LEkjBOtv/"><img class="instagramphoto" src="/storage/img/instagram/instagram3.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LI5vBDef/"><img class="instagramphoto" src="/storage/img/instagram/instagram4.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LOPjBqQM/"><img class="instagramphoto" src="/storage/img/instagram/instagram5.jpg" alt="cart"></a>
                    </div>
                    <div class="instagramphotosrowstwo">
                        <a href="https://www.instagram.com/p/B73LSkQhCP7/"><img class="instagramphoto" src="/storage/img/instagram/instagram6.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LXOdBTst/"><img class="instagramphoto" src="/storage/img/instagram/instagram7.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LarwhO6_/"><img class="instagramphoto" src="/storage/img/instagram/instagram8.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LgGRhXq1/"><img class="instagramphoto" src="/storage/img/instagram/instagram9.jpg" alt="cart"></a>
                        <a href="https://www.instagram.com/p/B73LjoYBMrx/"><img class="instagramphoto" src="/storage/img/instagram/instagram10.jpg" alt="cart"></a>
                    </div>
                </div>

                <div class="rowfacebook">
                    <div class="rowsfacebookphoto">
                        <a href="https://www.facebook.com/stevenschrijft/photos/a.1050745098422219/1050744938422235/?type=3&theater"><img class="facebookphoto" src="/storage/img/facebook/facebook1.jpg" alt="cart"></a>
                        <a href="https://www.facebook.com/stevenschrijft/photos/a.1050745098422219/1050744985088897/?type=3&theater"><img class="facebookphoto" src="/storage/img/facebook/facebook2.jpg" alt="cart"></a>
                    </div>
                    <div class="rowsfacebookphototwo">
                        <a href="https://www.facebook.com/steven.gerards.9"><img class="facebookphoto" src="/storage/img/facebook/facebook3.jpg" alt="cart"></a>
                        <a href="https://www.facebook.com/stevenschrijft/photos/a.745151178981614/1524872231009501/?type=3&theater"><img class="facebookphoto" src="/storage/img/facebook/facebook4.jpg" alt="cart"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="agenda">
            <div class="agenda">
                <h3 class="agendatext">Agenda</h3>
            </div>
            
            <div class="calenderflex">
                <div id='calendar'>   
                </div>
                <div class="bookingtext">
                    <h4 class="bookingle">Lezingen of presentatie boeken</h4>
                    <div class="booking">
                        <form onsubmit="return removeDummy(); class="bookingform" action="" method="POST">
                            @csrf
                            <div>
                                <label class="guestnamelabel" for="guestname">Naam:</label>
                            </div>
                            <div id="inputnames">
                                <input id="guestname" class="bookingnameinput" type="text">
                            </div>
                            <div id="newElementId">     
                            </div>
                            <div id="plusandminbutton">
                                <input class="add_field_button" type="button" value="+" onclick="createNewElement();"/>
                                <input id='btnRemoveDummy' class="removebutton" type="button" value="-" onclick="removeDummy()"/>
                            </div>
                            <div>
                                <label class="startdatelabel" for="start_date">Startdatum:</label>
                            </div>
                            <div>
                                <input class="startdateinput" type="date" name="start_date">
                            </div>
                            <div>
                                <label class="enddatelabel" for="end_date">Einddatum:</label>
                            </div>
                            <div>
                                <input class="enddateinput" type="date" name="end_date">
                            </div>
                            <div>
                                <label class="startdatelabel" for="start_time">Begintijd:</label>
                            </div>
                            <div>
                                <input class="starttimeinput" type="time" name="start_time">
                            </div>
                            <div>
                                <label class="enddatelabel" for="end_time">Eindtijd:</label>
                            </div>
                            <div>
                                <input class="endtimeinput" type="time" name="end_time">
                            </div>
                            <div>
                                <input name="bookingbutton" class="buttonbooking" type="submit" value="Verzenden">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contact" class="contactsection">
            <div class="contact">
                <h3 class="contactinfo">Contact</h3>
            </div>

            <div class="contactmaps">
                <div class="contactinfotext">
                    <p class="name">Naam:</p>
                    <p class="nametext">Steven Gerards</p>
                    <p class="mail">Mail:</p>
                    <p class="mailtext">steven.aga@hotmail.com</p>
                    <p class="Street">Straat en nummer:</p>
                    <p class="Streettext">Heerbaan 100</p>
                    <p class="postalcode">Postcode:</p>
                    <p class="postalcodetext">4817 NL</p>
                    <p class="place">Plaats:</p>
                    <p class="placetext">Breda</p>
                    <p class="country">Land:</p>
                    <p class="countrytext">Nederland</p>
                </div>
                
                <div id="map" class="google_maps">

                        <script>
                            function initMap() {
                                var uluru = {lat: 51.5818686, lng: 4.8107591};
                                var map = new google.maps.Map(document.getElementById('map'), {zoom: 12, center: uluru});
                                var marker = new google.maps.Marker({position: uluru, map: map});
                            }
                        </script>

                        <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQdHOF2hcDSmNHobTwiOUG0deo6Qfv_ks&callback=initMap">
                        </script>
                    </div>
                </div>
            </section>

            <section class="questionsection">
                <div class="questionsformsection">
                    <h4 class="headquestionstext">Heb jullie nog vragen of hebben jullie interesse in een van de boeken</h4>
                    <h4 class="headquestionstext">Neem dat contact op met mij</h4>
                </div>
                
                <div class="qustionsformdiv">

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($message = Session::get('succes'))
                        <div class="alert alert-succes alert-block">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{url('sendemail/send')}}" method="POST">
                        @csrf
                        <div>
                            <label class="namelabel" for="name">Naam en/of achternaam:</label>
                        </div>
                        <div>
                            <input class="nameinput" type="text" name="name">
                        </div>
                        <div class="maildiv">
                            <label class="maillabel" for="email">Email:</label>
                        </div>
                        <div>
                            <input class="mailinput" type="text" name="email">
                        </div>
                        <div>
                            <label class="questionslabel" for="message">Uw vragen:</label>
                        </div>
                        <div>
                            <textarea name="message" class="questionstextarea" rows="7" cols="70"></textarea>
                        </div>
                        <div>
                            <input type="submit" name="send" value="Verzenden" class="buttonquestions">
                        </div>
                    </form>
                </div>
            </section>
            
            <div class="socialmedialinks">
                <a href="https://www.facebook.com/stevenschrijft/?__tn__=kC-R&eid=ARB_UIik4ZhXakIS0JM2HXsJrdNcEl4mB8ro97PSbV9OmNjlF8t9Fco6oIj2SiFTxJkpSouf_8KWN6U4&hc_ref=ARRyyrh_m4UUL98iKEMzYvDOZw_7sMuM6D7d5EAsCchAbhiojQNt84Vh892TNzFJhWo&__xts__[0]=68.ARDadqGZr348A1baePN2akOOyrxyAQtspz34q1-UzOANX6OsKZ6IxIFXtsVIsOumJhUoqYiPNjA4WthRkKXaW2k0a57PmVjMI9eFQpsJfTYOwwVaxeu7mgaAi_qhoWAEgZvZMqEDrpQ8AgODLYbEx82cI_cYIULGwFYqo9VisQMO8wsPRKis8Xd5WE5GNC1UUu_TmUNpNr0tuK4DCmCWiFN1Pi9njLo_6A-YkDuqNwLaeI0FiSly_tzwRxd1f09sHpmtbFQMqQUC8RCosI4rgqCX61wppIN3iTYywhSLdWcaoA4tA_XBghD8EWVvfmYUW0tGne2FRgfKGY5iZEKbq26dmw"><img class="facebook" src="/storage/img/facebook.png" alt="cart"></a>
                <a href="https://www.instagram.com/steven_gerards1995/?hl=nl"><img class="instagram" src="/storage/img/instagram.png" alt="cart"></a>
                <a href="https://twitter.com/steven_gerards"><img class="twitter" src="/storage/img/twitter.png" alt="cart"></a>
                <a href="https://create.snapchat.com/org/b34a4c82-815c-4145-91f8-f2801772189e/accounts/on-demand/orders/status/all"><img class="snapchat" src="/storage/img/snapchat.png" alt="cart"></a>
                <a href="https://www.youtube.com/channel/UCAIcV4qKRk1p_fI5AyuGaWw?view_as=subscriber"><img class="youtube" src="/storage/img/youtube.png" alt="cart"></a>
                <a href=""><img class="tiktok" src="/storage/img/tiktok.png" alt="cart"></a>
            </div>
            
            <footer>
                <div class="copyright">
                    <p class="copyrighttext">Copyright © 2020 Steven Gerarads. All rights reserved</p>
                </div>
            </footer>
            
        </body>
    </html>