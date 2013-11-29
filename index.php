<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    </head>
    <body>
        <a href="incident.php">Incident</a> <br>
        <a href="vendor-registration.php">VendorRegistration</a><br>
        <a href="responsetorfq.php">Response To RQF</a>
        <div class="span7">
            <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Your Details</h5></div>
            <form id="form" action="api.php" method="POST"> 
                <input type="hidden" name="mapping" value="contact"/>
                <input type="hidden" name="reason" value="A Contact"/>
                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="name">Name <span class="required">*</span></label>
                    </div>
                    <div class="control-group span9">						
                        <div class="controls">
                            <input class="span12" type="text" name="name" id="name"/>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">			
                    <div class="control-group span3">
                        <label class="control-label" for="company">Company </label>
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" type="text" name="company" id="company" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="email">Email <span class="required">*</span></label>
                    </div>
                    <div class="control-group span9">						
                        <div class="controls">
                            <input class="span12" type="text" name="email" id="email" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="phone">Phone <span class="required">*</span></label>						
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="phone" id="phone" type="text" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="faxNumber">Fax Number</label>

                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="faxNumber" id="faxNumber" type="text" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span3">
                        <label class="control-label" for="hearAboutUs">How Did You Hear About Us?</label>

                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <input class="span12" name="hearAboutUs" id="hearAboutUs" type="text" />
                        </div>
                    </div>
                </div>				


                <div class="row-fluid">			
                    <div class="control-group span3">
                        <label class="control-label" for="message">Message </label>
                    </div>
                    <div class="control-group span9">
                        <div class="controls">
                            <textarea placeholder="Your message must be greater than 20 characters" name="message" id="message" rows="6" class="span12"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row-fluid" style="margin: 20px 0 20px 0;">			
                    <div class="control-group span5">
                        <span class="required">*</span> <i>Indicates a required field!</i>					
                    </div>
                    <div class="control-group span7">							
                        <button type="submit" class="span4 btn btn-primary">SUBMIT</button>
                        <button type="button" class="span4 btn reset-btn">RESET</button>							
                    </div>
                </div>

            </form>
        </div>
        <script type="text/javascript" src="jquery-lib-1.10.js"></script>
        <script type="text/javascript" src="json-formatter.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').submit(function() {
//                    jsonValues = $('form').serializeObject();
//                    $('form').prepend("<input type='hidden' name='jsondata' value='" + JSON.stringify(jsonValues) + "' />");
                });
            });
        </script>
    </body>
</html>
