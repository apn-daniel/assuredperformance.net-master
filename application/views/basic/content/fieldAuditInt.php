<p class="bold" style="font-size:14px;">Assured Performance Network</p>
<p class="bold" style="font-size:14px;">Field Auditor</p>
<p class="bold" style="font-size:14px;">Interview Worksheet</p>
<form method="post" id="appForm" name="appForm" action="<?= current_url() ?>">
    <table width="70%" border="0" cellspacing="0" cellpadding="4"  style="margin-top:20px;">
        <tr>
            <td class="bold"">Date of Application:</td>
            <td colspan="2">
                <select name="month_int">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>                
                </select>
                <select name="day_int">
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
                &nbsp;&nbsp;<strong>* </strong>&nbsp;Year:&nbsp;
                <input style="width:70px;"type="text" name="year_int" maxLength="4"/>
            </td>
        </tr>
        <tr>
            <td class="bold">How You Heard About APN:</td>
        </tr>
        <tr>
            <td>
                <textarea name="how_you_heard_about_apn"></textarea>
            </td>
        </tr>
    </table>
    <br />
    <table width="70%" border="0" cellspacing="0" cellpadding="4"  style="margin-top:10px;">
        <tr>
            <td class="bold">Name:</td>
            <td><input name="name" type="text" style="width:154px;" /></td>
            <td class="bold">Company:</td>
            <td><input name="company" type="text" style="width:154px;" /></td>        
        </tr>
        <tr>
            <td class="bold">Office Phone:</td>
            <td><input name="office_phone" type="text" style="width:154px;" /></td>
            <td class="bold">Mobile Phone: *</td>
            <td><input name="mobile_phone" type="text" style="width:154px;" /></td>    
        </tr>
        <tr>
            <td class="bold">Street Address:</td>
            <td><input name="address" type="text" style="width:154px;" /></td> 
        </tr>
        <tr>
            <td class="bold">City, State, Zip:</td>
            <td colspan="3">
                <input type="text" name="city" style="width:154px; margin-right:10px;" />
                <select name="state" style="margin-right:10px;">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>    
                    <option selected="selected" value="CA">California</option>    
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
                <input type="text" style="width:70px;" name="zip" />
            </td>   
        </tr>
        <tr>
            <td class="bold">Email: *</td>
            <td><input type="text" style="width:154px;" name="email" /></td>
        </tr>     
    </table>

    <table width="70%" border="0" cellspacing="0" cellpadding="4"  style="margin-top:10px;">
        <tr>
            <td style="font-weight:bold; width:259px;">Areas Covered:</td>
            <td><input name="areas_covered" type="text" style="width:84%;" /></td>

        </tr>
        <tr>
            <td style="font-weight:bold; width:259px;">Standard Appraisal Rate:</td>
            <td><input name="standard_appraisal_rate" type="text" style="width:84%;" /></td>   
        </tr>
        <tr>
            <td style="font-weight:bold; width:259px;">Trip Charges (if any):</td>
            <td><input name="trip_charges" type="text" style="width:84%;" /></td>
        </tr>
        <tr>
            <td style="font-weight:bold; width:259px;">Other Rate (Hourly)</td>
            <td><input name="other_rate_hourly" type="text" style="width:84%;" /></td>        
        </tr>
        <tr>
            <td style="font-weight:bold; width:259px;">Years Experience In Collision:</td>
            <td><input name="years_exp_in_collision" type="text" style="width:84%;" /></td>     
        </tr>
    </table>
    <table style="margin-top:10px;">
        <tr>
            <td colspan="4" style="font-weight:bold;">Industry Experience: (incl. job role, years, position, duties, etc.):</td>
        </tr>
        <tr>
            <td><textarea name="industry_exp"></textarea></td>
        </tr>
        <tr>
            <td colspan="4" style="font-weight:bold;">Give examples of your experience with collision repair equipment:</td>
        </tr>
        <tr>
            <td><textarea name="examples_of_your_exp"></textarea></td>          
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit Form" />
</form>
