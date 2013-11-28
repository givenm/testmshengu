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
                <input type="hidden" name="mapping" value="requestaquote"/>
                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="companyName">Name of Company <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="companyName" id="companyName" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="companyregistrationnumber">Company Registration Number <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="companyregistrationnumber" id="companyregistrationnumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="companyType">Legal Form of the Company <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <select class="span12 requiredCombo" name="companyType" id="companyType">
                                <option value="">--Please Choose an Option--</option>
                                <option value="Closed Corporation">Closed Corporation</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Private Company">Private Company</option>
                                <option value="Public Company">Public Company</option>
                                <option value="Sole Proprietorship">Sole Proprietorship</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">			
                        <div class="control-group span4">
                            <label class="control-label" for="yearEstablishment">Year of Business Establishment <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="yearEstablishment" id="yearEstablishment" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="chiefExecutive">Name of the Chief Executive/Proprietor <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="chiefExecutive" id="chiefExecutive" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="vatRegistrationNumber">VAT Registration Number <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="vatRegistrationNumber"  id="vatRegistrationNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="webSite">Web Site</label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="webSite" id="webSite" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Contact Information</h5></div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="addressLine1">Address Line 1 <span class="required">*</span></label>						
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="addressLine1" id="addressLine1" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid" style="margin-top: -11px;">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="addressLine2">Address Line 2 </label>
                        </div>
                        <div class="controls span8">
                            <input  type="text" name="addressLine2" class="span12" id="addressLine2" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid" style="margin-top: -11px;">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="city">City <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input  type="text" name="city" class="span12" id="city" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid" style="margin-top: -11px;">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="postalCode">Postal Code <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input  type="text" name="postalCode" ="span12" id="postalCode" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="contactPerson">Contact Person <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="contactPerson" id="contactPerson" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="telephoneNumber">Telephone Number <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="telephoneNumber" id="telephoneNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="faxNumber">Fax Number </label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="faxNumber" id="faxNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="mobileNumber">Mobile Number <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="mobileNumber" id="mobileNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span12">
                        <div class="control-group span4">
                            <label class="control-label" for="email">Email <span class="required">*</span></label>
                        </div>						
                        <div class="controls span8">
                            <input type="text" class="span12" name="email" id="email" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Organizational Information</h5></div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="vendorCategory">Vendor Category <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <select class="span12" name="vendorCategory" id="vendorCategory">
                                <option value="">--Please Choose an Option--</option>
                                <option value="Manufacturer">Manufacturer</option>
                                <option value="Service Provider">Service Provider</option>
                                <option value="Sub-Contractor">Sub-Contractor</option>
                                <option value="Supplier">Supplier</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span12">
                        <div class="control-group span4">
                            <label class="control-label" for="bank">Bank <span class="required">*</span></label>
                        </div>						
                        <div class="controls span8">
                            <input class="span12" type="text" name="bank" id="bank" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span12">
                        <div class="control-group span4">
                            <label class="control-label" for="accountNumber">Account Number<span class="required">*</span></label>
                        </div>										
                        <div class="controls span8" >
                            <input class="span12" type="text" name="accountNumber" id="accountNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="control-group span12">
                        <div class="control-group span4">
                            <label class="control-label" for="branchCode">Branch Code<span class="required">*</span></label>
                        </div>						
                        <div class="controls span8">
                            <input class="span12" type="text" name="branchCode" id="branchCode" />
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

    </body>
</html>
