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
    
    $(window).load(function () {

        $(".trigger_popup_fricc").click(function(){
            $('.hover_bkgr_fricc').show();
        });

        $('.hover_bkgr_fricc').click(function(){
            $('.hover_bkgr_fricc').hide();
        });

        $('.popupCloseButton').click(function(){
            $('.hover_bkgr_fricc').hide();
        });

    });

    $(window).load(function () {

        $(".trigger_popup_friccone").click(function(){
            $('.hover_bkgr_friccone').show();
        });

        $('.hover_bkgr_friccone').click(function(){
            $('.hover_bkgr_friccone').hide();
        });

        $('.popupCloseButton').click(function(){
            $('.hover_bkgr_friccone').hide();
        });

    });

    $(window).load(function () {

        $(".trigger_popup_frictwo").click(function(){
            $('.hover_bkgr_frictwo').show();
        });

        $('.hover_bkgr_frictwo').click(function(){
            $('.hover_bkgr_frictwo').hide();
        });

        $('.popupCloseButton').click(function(){
            $('.hover_bkgr_frictwo').hide();
        });

    });

    $(window).load(function () {

        $(".trigger_popup_fricthree").click(function(){
            $('.hover_bkgr_fricthree').show();
        });

        $('.hover_bkgr_fricthree').click(function(){
            $('.hover_bkgr_fricthree').hide();
        });

        $('.popupCloseButton').click(function(){
            $('.hover_bkgr_fricthree').hide();
        });

    });

</script>

    </head>
    <body>

    <div class="hover_bkgr_fricc">
        <span class="helper"></span>
        <div>
            <h2 class="headtextinfobook">Meer informatie over dit boek</h2>
            <div class="popupCloseButton">&times;</div>       
                <img id="bookone" src="/storage/img/achterkantAllesmag.png" alt="logo">
                <h4 class="headtextbookinfo">Iedereen geef je een kans, maakt niet uit wat je bent en hoe je eruit ziet, want jij bent perfect.</h4>
                <p class="generinlinfo">In dit boeken zitten gedichten die ik zelf heb geschreven. Hieronder is meer informatie over de gedichten.</p>
                <p class="bookoneinfopopus">Steven Gerarads is een 21de jarige jongeman uit Breda. Hij doet aan hockey en werkt bij Avans Hogeschool als schoonmaker. Volgens zijn achtergrond heeft hij een verstandelijke beperking, maar daar geeft hij niks om Althans, er geen vervelende opmerkingen worden gemaakt. Een aantal jaren geleden is Steven begonnen met dichten. Hij vindt het leuk om boze, verdrietige en sterke gevoelens op papier te zitten. Door het van zich af te schrijven maakt hij zich sterk en vrolijker. Ook geeft hij lezingen over zijn leven en voorlichten op scholen over pesten, dat doet hij graag en met zijn hart. Hij schrijft helemaal op gevoel en spreek helemaal naar zijn eigen mening. Steven leeft naar dromen en door doorzettingvermogen, eigenwijsheid en te wil, lukt het hem stapje voor stapje.</p>
                <p class="endheadtextbookinfo">Iedereen geef je een kans, maakt niet uit wat je bent en hoe je eruit ziet, want jij bent perfect.</p>
            </div>
        </div>

    <div class="hover_bkgr_friccone">
        <span class="helper"></span>
        <div>
        <h2 class="headtextinfobook">Meer informatie over dit boek</h2>
            <div class="popupCloseButton">&times;</div>
                <img id="bookone" src="/storage/img/achterkantdewereld.png" alt="logo">
                <p class="generinlinfo">In dit boeken zitten gedichten die ik zelf heb geschreven. Hieronder is meer informatie over de gedichten.</p>
                <h4 class="headtextbookinfo">Steven Gerards wil zich weer bewijzen met een nieuw boek.</h4>
                <p class="bookoneinfopopus">Steven Gerards (23) uit Breda heeft een nieuw rugzakje aangeschaft voor dit project. In dit boek laat hij zijn fantasie stromen en geeft hij zijn nieuwe kijk op de wereld. Zijn wereld is mooier en dat wil hij graag laten zien. Of u het met hem eens bent? Dat mag u zelf beslissen.</p>
                <p class="bookoneinfopopusone">Steven Gerards presteert met trots zijn 3de boek 'de wereld' Lees over zijn gevoelens en oordeel zelf wiens wereld mooier is.</p>
                <p class="endheadtextbookinfo">'Ik ben ervan overtuigt dat u voor mijn wereld kiest' aldus Steven.</p>
            </div>
        </div>

    <div class="hover_bkgr_frictwo">
        <span class="helper"></span>
        <div>
            <h2 class="headtextinfobook">Meer informatie over dit boek</h2>
            <div class="popupCloseButton">&times;</div>
                <img id="bookone" src="/storage/img/achterkantdewaarheid.png" alt="logo">
                <p class="generinlinfo">In dit boeken zitten gedichten die ik zelf heb geschreven. Hieronder is meer informatie over de gedichten.</p>
                <p class="bookoneinfopopus">Hi, Steven Gerards (07-05-1995) is er weer! Steven is een jongeman uit Breda met een rugzakje. Hij doet aan hockey en natuurlijk, aan dichten. Je kunt hem kennen van internet wellicht, is het je buurman geweest of misschien heeft hij wel een lezing gegeven over zijn leven. Hij geeft voorlichting op scholen over pesten.</p>
                <p class="bookoneinfopopusone">Met trots, brengt hij zijn tweede gedichtenbundel uit, genaamd 'de waarheid' Deze gedichten, zijn allemaal gebaseerd op gevoel.</p>
                <p class="endheadtextbookinfo">'nog steeds praat ik vanuit mijn hart en nog steeds ben ik eigenwijs genoeg om door te zetten, maak niet uit wat mensen zeggen' aldus Steven. 'Durf jij de waarheid te openen?</p>
            </div>
        </div>

    <div class="hover_bkgr_fricthree">
        <span class="helper"></span>
        <div>
            <h2 class="headtextinfobook">Meer informatie over dit boek</h2>
            <div class="popupCloseButton">&times;</div>
                <img id="bookone" src="/storage/img/achterkantmagdit.png" alt="logo">
                <p class="textfourbookinfo">'Steven (07-05-1995) Mijn kunstwerk/boek, mijn regels, mijn gedichten, mijn verhalen, mijn vise' Na al die jaren is Steven Gerards nog lekker eigenwijs.  Dit boek is zijn 4de boek en het heet: Mag dit? 'niets is wat het lijkt' en dat klopt ook. Dit boek heeft geen einde, maar heeft wel twee beginnen, hoe kan dat? Het boek bevat méér verhalen dan elke ander boek van hem. Dit is zijn dikste gedichtbundel ooit! Dit boek bevat één vriendelijke kant en één kwaadaardige kant. U mag kiezen wat het begin wordt.</p>
            </div>
        </div>
        
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

                    <div class="booksrowfirst">
                        <div class="thumbnail">
                        <a class="trigger_popup_fricc"><img id="bookone" class="bookimg" src="/storage/img/Allesmag.png" alt="logo"></a>
                            <div class="firstbookinfo">
                                <h4 class="booktitle">Alles mag</h4>
                                <a href="#contact" class="cartbooks" role="button">Interesse</a>
                            </div>
                        </div>
                    </div>

                    <div class="booksrowtwo">
                        <div class="thumbnail">
                        <a class="trigger_popup_friccone"><img id="bookone" class="bookimg" src="/storage/img/dewereld.png" alt="logo"></a>
                            <div class="firstbookinfo">
                                <h4 class="booktitle">De wereld</h4>
                                <a href="#contact" class="cartbooks" role="button">Interesse</a>
                            </div>
                        </div>
                    </div>

                    <div class="booksrowthree">
                        <div class="thumbnail">
                        <a class="trigger_popup_frictwo"><img id="bookone" class="bookimg" src="/storage/img/dewaarheid.png" alt="logo"></a>
                            <div class="firstbookinfo">
                                <h4 class="booktitle">De waarheid</h4>
                                <a href="#contact" class="cartbooks" role="button">Interesse</a>
                            </div>
                        </div>
                    </div>

                    <div class="booksrowfour">
                        <div class="thumbnail">
                        <a class="trigger_popup_fricthree"><img id="bookone" class="bookimg" src="/storage/img/magdit.png" alt="logo"></a>
                            <div class="firstbookinfo">
                                <h4 class="booktitle">Mag dit?</h4>
                                <a href="#contact" class="cartbooks" role="button">Interesse</a>
                            </div>
                        </div>
                    </div>

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
                            <div>
                                <label class="guestnamelabel" for="guestname">Bedrijfsnaam:</label>
                            </div>
                            <div id="inputnames">
                                <input id="guestname" class="companynameinput" type="text">
                            </div>
                            <div>
                                <label class="startdatelabel" for="start_date">Datum:</label>
                            </div>
                            <div>
                                <input class="startdateinput" type="date" name="start_date">
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