<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="span7">
            <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Your Details</h5></div>
            <form id="form" action="api.php" method="POST"> 
                <input type="hidden" name="mapping" value="responsetorfq"/>
                <input type="hidden" name="reason" value="A Response to RFQ"/>
                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="rfqNumber">RFQ Number <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="rfqNumber" id="rfqNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="companyName">Company Name <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <input type="text" class="span12" name="companyName" id="companyName" />
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
                            <input type="text" class="span12" name="vatRegistrationNumber" id="vatRegistrationNumber" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="webSite">Web Site</label>
                        </div>
                        <div class="controls span8">
                            <input type="text" name="webSite" class="span12" id="webSite" />
                        </div>
                    </div>
                </div>

                <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Item Description</h5></div>

                <div class="row-fluid" style="font-weight:bold;">					
                    <div class="span4">Item</div>
                    <div class="span2" style="padding-left:3.4%;">Item Number</div>
                    <div class="span1" style="padding-left:2%;">Qty</div>
                    <div class="span1" style="padding-left:2%;">Unit</div>
                    <div class="span2" style="padding-left:4%;">Unit Price</div>
                    <div class="span2" style="padding-left:4%;">Sub Total</div>								
                </div>
                <div class="row-fluid">					
                    <div class="span4"><input name="item[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="itemNumber[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="qty[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="unit[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="unitPrice[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="subTotal[]" class="span12" type="text"/></div>								
                </div>
                <div class="row-fluid">					
                    <div class="span4"><input name="item[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="itemNumber[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="qty[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="unit[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="unitPrice[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="subTotal[]" class="span12" type="text"/></div>								
                </div>

                <div class="row-fluid">					
                    <div class="span4"><input name="item[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="itemNumber[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="qty[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="unit[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="unitPrice[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="subTotal[]" class="span12" type="text"/></div>								
                </div>

                <div class="row-fluid">					
                    <div class="span4"><input name="item[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="itemNumber[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="qty[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="unit[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="unitPrice[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="subTotal[]" class="span12" type="text"/></div>								
                </div>

                <div class="row-fluid">					
                    <div class="span4"><input name="item[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="itemNumber[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="qty[]" class="span12" type="text"/></div>
                    <div class="span1"><input name="unit[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="unitPrice[]" class="span12" type="text"/></div>
                    <div class="span2"><input name="subTotal[]" class="span12" type="text"/></div>								
                </div>

                <div class="row-fluid"><div class="span4 offset8" style="padding-left: 67px;"><i>All prices must be quoted excluding VAT</i> <span class="required">*</span></div></div>
                <div class="row-fluid blue-heading" style="margin: 0 0 10px 0; border-bottom: 1px dotted rgb(192, 192, 192);"><h5>Payment Terms</h5></div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="validityOfQuote">Validity of Quote <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <select class="span3 offset9 requiredCombo" name="validityOfQuote" id="validityOfQuote">
                                <option></option>
                                <option>7  Days</option>
                                <option>14 Days</option>
                                <option>21 Days</option>
                                <option>28 Days</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">				
                    <div class="control-group span12">					
                        <div class="control-group span4">
                            <label class="control-label" for="paymentTerms">Payment Terms <span class="required">*</span></label>
                        </div>
                        <div class="controls span8">
                            <select class="span3 offset9 requiredCombo" name="paymentTerms" id="paymentTerms">
                                <option value=""></option>
                                <option value="7  Days">7  Days</option>
                                <option value="14 Days">14 Days</option>
                                <option value="21 Days">21 Days</option>
                                <option value="28 Days">28 Days</option>
                                <option value="28 Days">C.O.D</option>
                            </select>
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
