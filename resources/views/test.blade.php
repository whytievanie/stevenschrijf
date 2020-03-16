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
                                <label class="guestnamelabel" for="companyname">Bedrijfsnaam:</label>
                            </div>
                            <div id="inputnames">
                                <input id="companyname" class="companynameinput" type="text">
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