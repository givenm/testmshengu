<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="span7">
            <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Incident Details</h5></div>
            <form class="" id="form" action="api.php" method="POST">
                <input type="hidden" name="mapping" value="incident"/>
                <input type="hidden" name="reason" value="An Incident"/>
                <input type="hidden" value="" id="comboChecker"/>
                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="clientName">Client Name <span class="required">*</span></label>
                    </div>
                    <div class="control-group span9">						
                        <div class="controls">
                            <input class="span12" type="text" name="clientName" id="clientName" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="contactPerson">Contact Person <span class="required">*</span></label>
                    </div>
                    <div class="control-group span9">						
                        <div class="controls">
                            <input class="span12" type="text" name="contactPerson" id="contactPerson" />
                        </div>
                    </div>
                </div>				

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="contactNumber">Contact Number <span class="required">*</span></label>						
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="contactNumber" id="contactNumber" type="text" />
                        </div>
                    </div>
                </div>				

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="incidentType">Incident Type <span class="required">*</span></label>						
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <select class="span12 requiredCombo" name="incidentType" id="incidentType" type="text">
                                <option value="">--Please Choose an Option--</option>
                                <option value="Arson">Arson</option>
                                <option value="Community Protest">Community Protest</option>
                                <option value="Damage">Damage</option>
                                <option value="Theft">Theft</option>
                                <option value="Not Serviced">Not Serviced</option>
                                <option value="Vandalism">Vandalism</option>
                                <option value="Incorrect Placement">Incorrect Placement</option>
                            </select>
                        </div>
                    </div>
                </div>				

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="site">Site</label>

                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="site" id="site" type="text" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="suburb">Suburb</label>

                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="suburb" id="suburb" type="text" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="toilet-type">Toilet Type </label>

                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <select class="span12" name="toiletType" id="toilet-type" type="text" >
                                <option>--Please Choose an Option--</option>
                                <option>Basic</option>
                                <option>Standard</option>
                                <option>Executive-Hand Basin</option>
                                <option>Wheelchair Accecible</option>								
                            </select>
                        </div>
                    </div>
                </div>	

                <div class="row-fluid">			
                    <div class="control-group span3">
                        <label class="control-label" for="remarks">Incident Remarks </label>
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <textarea placeholder="Your message must be greater than 20 characters" name="remarks" id="remarks" rows="6" class="span12"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row-fluid" style="margin: 20px 0 20px 0;">			
                    <div class="control-group span5">
                        <span class="required">*</span> <i>Indicates a required field!</i>					
                    </div>
                    <div class="control-group span7">							
                        <button type="submit" class="span4 btn btn-primary">SUBMIT</button>
                        <button type="button" class="span4 btn reset-btn reset-btn">RESET</button>							
                    </div>
                </div>

            </form>
        </div>

    </body>
</html>
