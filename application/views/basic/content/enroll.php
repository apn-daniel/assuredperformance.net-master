<div id="apply">
    <form method="POST" action="<?= current_url() ?>">
        <input type="hidden" name="referral_url" value="<?= $this->input->server('HTTP_REFERER') ?>" />
        <table class="enroll">
            <tbody>
                <tr>
                    <td>
                        <h1 class="bold">Please fill out the following required business information:</h1>
                        <table class="firsttable">
                            <tbody>
                                <tr>                                                                  
                                    <td>Your Name:</td>
                                    <td>
                                        <input type="text" size="8px" name="firstName"/>
                                        <input type="text" size="8px" name="lastName"/>
                                    </td>
                                    <td>Business Name:</td> 
                                    <td><input type="text" name="busName"/></td>                                    
                                </tr>
                                <tr>
                                    <td>Phone Number:</td>
                                    <td><input type="text" name="phone"/></td>
                                    <td>Email:</td>
                                    <td><input type="text" name="email"/></td>
                                </tr>
                                <tr>
                                    <td>Address 1:</td>
                                    <td><input type="text" name="address1"/></td>
                                    <td>Address 2:</td>
                                    <td><input type="text" name="address2"/></td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input type="text" name="city"/></td>
                                    <td>State:</td>                                        
                                    <td>
                                        <select name="state">
                                            <option value="" selected="selected">Select a State</option> 
                                            <option value="AL">Alabama</option> 
                                            <option value="AK">Alaska</option> 
                                            <option value="AZ">Arizona</option> 
                                            <option value="AR">Arkansas</option> 
                                            <option value="CA">California</option> 
                                            <option value="CO">Colorado</option> 
                                            <option value="CT">Connecticut</option> 
                                            <option value="DE">Delaware</option> 
                                            <option value="DC">District Of Columbia</option> 
                                            <option value="FL">Florida</option> 
                                            <option value="GA">Georgia</option> 
                                            <option value="HI">Hawaii</option> 
                                            <option value="ID">Idaho</option> 
                                            <option value="IL">Illinois</option> 
                                            <option value="IN">Indiana</option> 
                                            <option value="IA">Iowa</option> 
                                            <option value="KS">Kansas</option> 
                                            <option value="KY">Kentucky</option> 
                                            <option value="LA">Louisiana</option> 
                                            <option value="ME">Maine</option> 
                                            <option value="MD">Maryland</option> 
                                            <option value="MA">Massachusetts</option> 
                                            <option value="MI">Michigan</option> 
                                            <option value="MN">Minnesota</option> 
                                            <option value="MS">Mississippi</option> 
                                            <option value="MO">Missouri</option> 
                                            <option value="MT">Montana</option> 
                                            <option value="NE">Nebraska</option> 
                                            <option value="NV">Nevada</option> 
                                            <option value="NH">New Hampshire</option> 
                                            <option value="NJ">New Jersey</option> 
                                            <option value="NM">New Mexico</option> 
                                            <option value="NY">New York</option> 
                                            <option value="NC">North Carolina</option> 
                                            <option value="ND">North Dakota</option> 
                                            <option value="OH">Ohio</option> 
                                            <option value="OK">Oklahoma</option> 
                                            <option value="OR">Oregon</option> 
                                            <option value="PA">Pennsylvania</option> 
                                            <option value="RI">Rhode Island</option> 
                                            <option value="SC">South Carolina</option> 
                                            <option value="SD">South Dakota</option> 
                                            <option value="TN">Tennessee</option> 
                                            <option value="TX">Texas</option> 
                                            <option value="UT">Utah</option> 
                                            <option value="VT">Vermont</option> 
                                            <option value="VA">Virginia</option> 
                                            <option value="WA">Washington</option> 
                                            <option value="WV">West Virginia</option> 
                                            <option value="WI">Wisconsin</option> 
                                            <option value="WY">Wyoming</option>                                            
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Zip:</td>
                                    <td><input type="text" name="zip"/></td>
                                    <td>Rep Name:</td>
                                    <td><input type="text" name="repname"/></td>
                                </tr>
                            </tbody>
                        </table>
                        <br/>
                        <p class="pclear">
                            What are your average monthly sales and percentage of business for the following:<br/>
                            <em>example: avg purchases 15,000 a month and GM repairs account for approximately 20% annual business?</em><br/><br/>
                            <strong class="bold">* Denotes Required Fields</strong>
                        </p>
                        <table class="secondtable" cellspacing="0" cellpadding="4">
                            <tbody>
                                <tr class="title">
                                    <td id="annual" >Annual Figures <span style="font-size:10px;">(please enter figures from the previous year)</span></td>
                                    <td class="bold" align="center">Dollars $</td>
                                    <td class="bold" align="center">Percentage %</td>
                                </tr>
                                <tr class="grey">
                                    <td>Total Sales:</td>
                                    <td class="center">
                                        <strong class="margin">* </strong>
                                        <input type="text" name="purchaseStats-totalSales"/>
                                    </td>
                                    <td class="center">100%</td>                                        
                                </tr>
                                <tr>
                                    <td>Years in Business</td>
                                    <td class="center">
                                        <strong class="margin">* </strong>
                                        <input type="text" name="purchaseStats-yearFounded"/>
                                    </td>
                                </tr>
                                <tr class="title">
                                    <td colspan="5">Revenue:</td>
                                </tr>
                                <tr class="grey">
                                    <td>Parts:</td>                                    
                                    <td class="center"><input type="text" value=""  name="purchaseStats-partsRevenueD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-partsRevenueP"/></td>                                    
                                </tr>
                                <tr>
                                    <td>Labor:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-laborRevenueD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-laborRevenueP"/></td>
                                </tr>
                                <tr  class="title">
                                    <td colspan="5">Source</td>                                   
                                </tr> 
                                <tr class="grey">
                                    <td>Consumer Pay:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-consumerPaySourceD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-consumerPaySourceP"/></td>
                                </tr>
                                <tr>
                                    <td>Insurance Pay:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-insurancePaySourceD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-insurancePaySourceP"/></td>
                                </tr>
                                <tr  class="grey">
                                    <td>DRP:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-drpSourceD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-drpSourceP"/></td>
                                </tr>
                                <tr>
                                    <td>Dealer or Fleet Referral:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-dorfSourceD"/></td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-dorfSourceP"/></td>
                                </tr>
                                <tr  class="title">
                                    <td colspan="5">Parts</td>
                                </tr>                                
                                <tr  class="grey">
                                    <td>After Market:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-afterMarketUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-afterMarketUsageP"/></td>
                                </tr>
                                <tr>
                                    <td>Used:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-usedUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-usedUsageP"/></td>
                                </tr> 
                                <tr  class="grey">
                                    <td>Total OEM:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-totalOemUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-totalOemUsageP"/></td>
                                </tr> 
                                <tr>
                                    <td>GM:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-gmUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-gmUsageP"/></td>
                                </tr> 
                                <tr class="grey">
                                    <td>Toyota:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-toyotaUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-toyotaUsageP"/></td>
                                </tr> 
                                <tr>
                                    <td>Ford:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-fordUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-fordUsageP"/></td>
                                </tr> 
                                <tr class="grey">
                                    <td>Honda:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-hondaUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-hondaUsageP"/></td>
                                </tr> 
                                <tr>
                                    <td>Chrysler:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-chryslerUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-chryslerUsageP"/></td>
                                </tr> 
                                <tr class="grey">
                                    <td>Nissan:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-nissanUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-nissanUsageP"/></td>
                                </tr> 
                                <tr>
                                    <td>All Other OEM:</td>
                                    <td class="center"><input type="text" value=""  name="purchaseStats-allOtherUsageD"/></td>
                                    <td class="center"><strong class="margin">* </strong><input type="text" value=""  name="purchaseStats-allOtherUsageP"/></td>
                                </tr> 
                                <tr  class="title">
                                    <td colspan="5">DRP</td>
                                </tr>
                                <tr class="grey">
                                    <td>Are you a participant in one or more insurance direct repair programs (DRP)?</td>
                                    <td colspan="3" class="left">                                       
					<strong>* </strong>Yes: <input type="radio" name="purchaseStats-DRPRad" value="Yes" id="DRPRadio_yes" class="required noBorder"  />
					No: <input type="radio" name="purchaseStats-DRPRad" value="No" id="DRPRadio_no" class="required noBorder"  />
                                        <div id="DRPName"><strong>* </strong>DRP Name: <input type="text" style="width:300px;" name="purchaseStats-DRPName" value="" /></div>                                       
                                    </td>
                                </tr>
                                <tr class="title">
                                    <td colspan="5">Paint &amp; Material Profile</td>
                                </tr>
                                <tr>
                                    <td>Paint Brand:</td>
                                    <td colspan="4">
                                        <select class="required" name="paintBrand">
                                            <option>Please select a paint brand....</option>
                                            <option value="AKZO - AKZO">AKZO - AKZO</option>
                                            <option value="AKZO - Lesenol">AKZO - Lesenol</option>
                                            <option value="AKZO - Sikkens">AKZO - Sikkens</option>
                                            <option value="AKZO - Sikkens">AKZO - Sikkens</option>
                                            <option value="BASF - BASF">BASF - BASF</option>
                                            <option value="BASF - Glaso">BASF - Glaso</option>
                                            <option value="BASF - Glasurit">BASF - Glasurit</option>
                                            <option value="BASF - Limco">BASF - Limco</option>
                                            <option value="BASF - Onyx">BASF - Onyx</option>
                                            <option value="BASF - RM">BASF - RM</option>
                                            <option value="Dupont - Centari">Dupont - Centari</option>
                                            <option value="Dupont - Chroma Base">Dupont - Chroma Base</option>
                                            <option value="Dupont - Chroma Clear">Dupont - Chroma Clear</option>
                                            <option value="Dupont - Chroma Premier">Dupont - Chroma Premier</option>
                                            <option value="Dupont - Nason">Dupont - Nason</option>
                                            <option value="Dupont - Spies Hecker">Dupont - Spies Hecker</option>
                                            <option value="Dupont - Standox">Dupont - Standox</option>
                                            <option value="PPG - DBC">PPG - DBC</option>
                                            <option value="PPG - Delstar">PPG - Delstar</option>
                                            <option value="PPG - Deltron">PPG - Deltron</option>
                                            <option value="PPG - Envirobase">PPG - Envirobase</option>
                                            <option value="PPG - Global Line">PPG - Global Line</option>
                                            <option value="PPG - Nexa">PPG - Nexa</option>
                                            <option value="PPG - Omni">PPG - Omni</option>
                                            <option value="PPG - PPG">PPG - PPG</option>
                                            <option value="Sherwin Williams - 2k">Sherwin Williams - 2k</option>
                                            <option value="Sherwin Williams - Acrylyd">Sherwin Williams - Acrylyd</option>
                                            <option value="Sherwin Williams - Sherwin Williams">Sherwin Williams - Sherwin Williams</option>
                                            <option value="Sherwin Williams - Ultra">Sherwin Williams - Ultra</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="grey">
                                    <td>Main Jobber:</td>
                                    <td colspan="5"><input class="required" type="text" size="48px" value="" name="purchaseStats-mainJobber"></td>
                                </tr>
                                <tr>
                                    <td>Approx. Annual Liquid Purchase ($):</td>
                                    <td colspan="5"><input class="required" type="text" size="48px" value="" name="purchaseStats-liquidPurchase"></td>
                                </tr>
                                <tr class="grey">
                                    <td>Currently Under Long Term Paint Purchase Contract:</td>
                                    <td colspan="3">
                                        Yes:
                                        <input id="paintContract_yes" class="required noBorder" type="radio" value="Yes" name="purchaseStats-contracted">
                                        No:
                                        <input id="paintContract_no" class="required noBorder" type="radio" value="No" name="purchaseStats-contracted">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Main Material Brand:</td>
                                    <td colspan="3"><input class="required" type="text" size="48" value="" name="purchaseStats-materialBrand"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="width:650px; margin:0px auto;">
            <p style="font-size:12px; text-align:justify;">Congratulations and thank you for making the right decision to participate in the 100% Write Rebate Reward Program. When you use 100% OEM collision repair parts to repair a vehicle you are able to earn a rebate from participating OEM Auto Manufactures. This is a reward. To earn a rebate-reward, the transaction must be submitted and pass an audit by the OEM. The rebate is paid to the Co-Op and your agreement is with the Co-Op to be paid in accordance with the Co-Op bylaws as outlined below.</p>
            <p style="font-size:12px; text-align:justify;"> In addition to the Rebate Reward, you will receive an official "Certificate of Authorization" for each repair that meets the requirements and passes the OEM audit. This valuable document is to be given to your customer as part of their final billing and repair documentation or sent to them after the fact. This will add credibility and value to the repair you have provided, and peace of mind to the vehicle owner. The use of the certificate is an exclusive benefit for your business and the consumer and only authorized to be used in accordance with the terms of this program.</p>
            <p style="font-size:12px; text-align:justify;">Acceptance of the terms and conditions of this agreement as illustrated by your signature and is a pre-requisite to allowing your business to earn the rebate-reward provided by the participating OEM Auto Manufactures, as follows:</p>
            <ul style="font-size:12px;">
                <li style="margin-bottom:5px;">You hereby acknowledge that the repair orders submitted and totals used reflect the total amount charged to the customer and it reflects all repair work performed and parts used in the repair of this vehicle. Alterations, double invoicing, supplemental billing or transactions, and any other action that may distort the intended rebate-reward is strictly forbidden. Violations will result in loss of all rebate-reward and termination of your participation in Assured Performance Cooperative (Co-Op).</li>
                <li style="margin-bottom:5px;">Rebate-rewards transactions will be recorded in your Assured Performance Co-Op Member Reward Account and may be audited at any time. Disbursement of earned rebate-rewards is in accordance with the bylaws of the Co-Op and the compliance of the Member in good standing with the terms and conditions of this program and the Co-Op.</li>
                <li style="margin-bottom:5px;">You acknowledge and understand that all rewards will be received and processed through Assured Performance Network Co-Op. The agreement for rebate-rewards is between Assured Performance Network and the participating OEM. Your agreement is strictly between your business and Assured Performance Cooperative (Co-Op). The net total rewards generated will be credited to your rewards account less the administration and processing fee (25% of the total rewards which is approximately 1.25% of total). Your rewards will be disbursed upon request within 30 days following your anniversary date contingent upon continued membership in the network.</li>
                <li style="margin-bottom:5px;">The program participants details and terms may change at any time without notice. You agree to keep all Assured Performance Network/Co-op Agreements confidential.</li>
                <li style="margin-bottom:5px;">All transactions shall be subject to a 6-month maturation period, beginning with an eligible members shop’s origination date. The origination date is defined as the date of the first recorded transaction with any Assured Performance Network approved vendor and/or provider.</li>
                <li style="margin-bottom:5px;">Rewards will not become available for withdrawal for six (6) months from the origination date for new shops and six (6) months from a previous request for all other shops; only funds which have reached maturation (be at least 6 months old), have been approved by the vendor and/or provider and where Assured Performance Network has received payment, hereby known as accrued rewards, will be available for disbursement or use.</li>
                <li style="margin-bottom:5px;">Eligible Member shops can request rewards once every 6 months as long as they continue to patronize Assured Performance Network vendors.</li>
                <li style="margin-bottom:5px;">All reward requests must be submitted in writing on company letterhead, signed by the owner(s) and a completed W9 form must be on file.</li>
                <li style="margin-bottom:5px;">Assured Performance Network will process rewards within 30 days from the date of the request.</li>
                <li style="margin-bottom:5px;">All transactions are subject to a 25% Administrative fee, which is deducted from the rebate.</li>
                <li style="margin-bottom:5px;">"You acknowledge and understand that all rewards will be received and processed through Assured Performance Network. The agreement for rebate-rewards is between (name of program provider) and the Chrysler LLC. Your agreement is strictly between your business and Assured Performance Cooperative (Co-Op)."</li>
            </ul>
            <div>
                <table class="stats" width="650px" cellspacing="0" cellpadding="4" style="margin:10px auto 10px auto;border-collapse:collapse;font-size:11px;background:#d0efeb">
                    <tbody>
                        <tr>
                            <td style="width:300px;"><strong>E-Signature</strong></td>
                            <td><strong>* </strong><input type="text" name="eSig" style="width:280px;"></td>
                        </tr>
                        <tr style="background:#e2faf7;">
                            <td><strong>Shop Name</strong></td>
                            <td><strong>* </strong><input type="text" name="shopName" style="width:280px;"></td>
                        </tr>
                        <tr>
                            <td><strong>Date</strong></td>
                            <td>
                                <select name="month">
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select name="day">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <strong>* </strong>
                                &nbsp;Year:&nbsp;
                                <input type="text" maxlength="4" name="year" style="width:70px;">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input style="margin-left:300px" type="image" value="Submit" name="Submit" src="<? base_url() ?>resources/common/images/bt_submit.png">                
            </div>
        </div>
    </form>    
</div>