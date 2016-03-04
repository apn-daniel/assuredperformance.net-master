<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?= $title ?></title>    
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script>
                 google.load("jquery", "1");
                 google.load("jqueryui", "1");
            </script>            
            <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/header.css" />
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/common.css" />
            
            <script type="text/javascript">
                var baseURL = '<?= base_url() ?>';
            </script>

        <!-- custom css files -->
            <?php if (isset($css)): ?>
                    <?php if (is_array($css)): ?>
                            <?php foreach ($css as $path): ?>
                                    <link rel="stylesheet" type="text/css" href="<?= base_url() . $path ?>.css" />
                            <?php endforeach; ?>
                    <?php else: ?>
                            <link rel="stylesheet" type="text/css" href="<?= base_url() . $css ?>.css" />
                    <?php endif; ?>
        <?php endif; ?>
                            
        <!-- custom js files -->
            <?php if (isset($js)): ?>
                    <?php if (is_array($js)): ?>
                            <?php foreach ($js as $path): ?>
                                    <script type="text/javascript" src="<?= base_url() . $path ?>.js"></script>
                            <?php endforeach; ?>
                    <?php else: ?>
                    <script type="text/javascript" src="<?= base_url() . $js ?>.js"></script>
            <?php endif; ?>
        <?php endif; ?>

    </head>


<div class="content bigContent">
    <div id="clogo">
        <img src="<?= base_url() ?>resources/common/images/APNlogo.png"/>
        <h2>REFERRAL</h2>
    </div>
    <div id="table">
        <form method="POST" action="<?= current_url() ?>">

            <table>
                <tr>
                    <td>Shop Name</td><td><input name="name" type="text" /></td>

                    <td>Referral Name</td><td><input name="referralName" type="text" /></td>
                </tr>  
                    <td>Email</td><td><input name="email" type="text" /></td>





                    <td>City</td><td><input name="city" type="text" /></td>
                </tr>
                <tr>
                    <td>State</td>
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
            </table>
            <input style="margin:30px 0 0 240px;" type="submit" value="Send Email" />

        </form>
    </div>
</div>
