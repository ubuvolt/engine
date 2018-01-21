<?php
$curent_company = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'curent_company_flow');

$price_control = 1;
$api = 1;
$admin = 1;
$mailing = 1;
$shop = 1;
$admin = 1;
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class= <?php echo Yii::app()->user->name == 'admin' ? "separate_line" : ""; ?>>
</div>

<?php
if ($price_control) {
    ?>    

    <div class="moduleTile">
        <div class="moduleImage">
            <img src='/images/money.png'><div class="title">Price control</div>
        </div>
        <div class="moduleTileRight">
            <div class="row buttons">
                <div class="description_button">
                    <?php echo "The view and refresh monitored prices"; ?>
                </div>
                <button style="clear:both">
                    <a title="ebay/getInfo" href="index.php?r=ebay/getInfo">eBay GetItem</a>    
                </button>
            </div> 
            <div class="row buttons">
                <div class="description_button">
                    <?php echo "Adding the new URL to monitor price"; ?>
                </div>
                <button>
                    <a title="ebayPriceMonitor/admin" href="index.php?r=ebayPriceMonitor/create">Add New URL</a>
                </button>
            </div> 
            <div class="row buttons">
                <div class="description_button">
                    <?php echo "eBay Price Monitor with Search"; ?>
                </div>
                <button>
                    <a title="ebaySearch/ebaySearch" href="index.php?r=ebaySearch/ebaySearch">Price Monitor Search</a>
                </button>
            </div> 

            <div class="row buttons">
                <div class="description_button">
                    <?php echo "Generate  report about changes prices"; ?>
                </div>
                <button>
                    <!--///////////////////////////
                    // 3 - raport aboute prices - (ebayPriceEmail button) API CALL
                    ///////////////////////////-->
                    <a title="ebay/ebayPriceEmail" href="index.php?r=ebay/ebayPriceEmail">Ebay Price Email</a>
                </button>
            </div> 
        </div>
    </div>
    <?php
}
?>

<?php
if ($api) {
    ?>
    <div class="moduleTile">
        <div class="moduleImage">
            <img src='/images/API.png'><div class="title">API</div>
        </div>
        <div class="moduleTileRight">
            <div class="row buttons" >

                <button id="official_time" current_company="<?php echo $curent_company; ?>">
                    Time
                </button>

            </div> 

            <div class="row buttons">

                <button>
                    <a title="ebayApi/LoadAllItems" href="index.php?r=ebayApi/LoadAllItems/">Load All Items</a>
                </button>

                <button>
                    <a title="Empty my_ebay_selling. ebayApi/ReStartBaySelling" href="index.php?r=ebayApi/ReStartBaySelling">Re-Start</a>
                </button>

                <span class="description_button">Number of eBay Items <?php echo $number_of_eBay_items . ' (' . $number_of_eBay_items_gbp; ?> GBP)</span>

                <br>
            </div>

            <?php
            if ($item_counter_for_ebay_item >= $number_of_eBay_items_gbp) {
                $get_item_button = 'disabled';
                $get_item_href = 'onclick="return false;"';
                $get_item_href_style = 'style="color: grey;"';
            }
            ?>
            <div class="row buttons" >
                <button type="button" <?php echo $get_item_button; ?>>
                    <a <?php echo $get_item_href_style; ?> title="ebayApi/main/&attribute=GetItem" href="index.php?r=ebayApi/main/&attribute=GetItem" <?php echo $get_item_href; ?> >eBay GetItem</a>
                </button>
                <button>
                    <a title="Empty eBay_item. ebayApi/ReStarteBayItem" href="index.php?r=ebayApi/reStarteBayItem">Re-Start</a>
                </button>
                <br>
                <span class="description_button">Item counter for eBay Item <?php echo $item_counter_for_ebay_item; ?></span>
                <span class="description_button">eBay Item Nos <?php echo $eBay_item_nos; ?> 
                    <?php
                    if ($curent_company == 'expertpcx') {
                        ?>
                        (<?php echo $eBay_item_nos_gbp; ?> GBP)
                        <?php
                    }
                    ?>
                    <span id="item_report"  class="<?php echo $compare_items['flag'] ? "compair_item" : "compair_item_hide"; ?>">!!!</span></span>
                <?php ?>
            </div> 

            <div class="row buttons" >
                <button>
                    <a title="ebayApi/main/&attribute=GetStore" href="index.php?r=ebayApi/main/&attribute=GetStore">eBay GetStore</a>
                </button>
                <button>
                    <a title="Empty eBay_store. ebayApi/ReStarteBayStore" href="index.php?r=ebayApi/reStarteBayStore">Re-Start</a>
                </button>
                <br>
                <span class="description_button">Shop Category Nos <?php echo $shop_category_nos; ?></span>
            </div> 
        </div>
    </div>
    <?php
}
?>

<?php
if ($admin) {
    ?>
    <div class="moduleTile">
        <div class="moduleImage">
            <img src="/images/admin.ico"><div class="title">Admin</div>
        </div>
        <div class="moduleTileRight">
            <div  class="row buttons" >
                <button>
                    <a title="myEbaySelling/index" href="index.php?r=myEbaySelling/index">eBay Selling</a>
                </button>
            </div> 
            <div  class="row buttons" >
                <button>
                    <a title="ebayItem/index" href="index.php?r=ebayItem/index">eBay Items</a>
                </button>
            </div> 
            <div  class="row buttons" >
                <button>
                    <a title="ebayStore/index" href="index.php?r=ebayStore/index">eBay Store</a>
                </button>
            </div> 
        </div>
    </div>
    <?php
}
?>

<?php
if ($shop) {
    ?>
    <div class="moduleTile">
        <div class="moduleImage">
            <img src="/images/page-icon.png"><div class="title">Shop</div>
        </div>
        <div class="moduleTileRight">
            <div class="row buttons">
                <div class="description_button">
                    <?php echo "Do it once, the system duplicates <br>the product"; ?>
                </div>
                <button>
                    <a title="ebayInsetrs/setDataInPresta" href="index.php?r=ebayInsetrs/setDataInPresta">Insert data to ShopPage</a>
                </button>
                <br>
                <span class="description_button">PS product qty <?php echo $ps_product_qty; ?></span>
            </div> 
            <div class="row buttons">
                <button>
                    <a title="ebayInsetrs/generateImages" href="index.php?r=ebayInsetrs/generateImages">Generate Images</a>
                </button>
                <button>
                    <a title="" href="index.php?r=ebayInsetrs/ReStartGenerateImages">Re-Start</a>
                </button>
                <br>
                <span class="description_button">Image counter <?php echo $image_counter_value; ?></span>
            </div> 
            <div class="row buttons">
                <button>
                    <a title="ebayInsetrs/setHomeCateg" href="index.php?r=ebayInsetrs/setHomeCateg">Set Home Categ</a>
                </button>
            </div> 
            <div class="row buttons">
                <button>
                    <a title="ebayInsetrs/setCateg" href="index.php?r=ebayInsetrs/setCateg">Set Categ</a>
                </button>    
            </div> 
        </div> 
    </div>
    <?php
}
?>

<?php
if ($mailing) {
    ?>
    <div class="moduleTile">
        <div class="moduleImage">
            <img src="/images/mailing_list_icon.png"><div class="title">Mailing</div>
        </div>
        <div class="moduleTileRight">
            <div  class="row buttons">
                <a href="http://www.engine.dev/emasil.html"> <?php echo CHtml::submitButton('Email Templates'); ?></a>
            </div> 
        </div>
    </div>
    <?php
}
?>
<div id="dialog" title="">
    <div id="ebay_timestamp" class="ebay_timestamp"></div>
    <div id="ebay_ack" class="ebay_timestamp"></div>
    <div id="ebay_version" class="ebay_timestamp"></div>
    <div id="ebay_build" class="ebay_timestamp"></div>
</div>
<div id="dialog_open" title="">
    <div id="item_report_" title=""></div>
</div>

<script>
    $(function () {
        $("#official_time").click(function () {
            var current_company = $(this).attr('current_company');
            if (confirm("Are you sure you want to Official Time ?")) {
                $.post("/index.php?r=ebayApi/ajaxOfficialTime", {
                    current_company: current_company
                }, function (response) {

                    var parsed = JSON.parse(response);

                    if (parsed.status === 'success') {

                        $('#ebay_timestamp').html('Timestamp [' + parsed.timestamp + ']');
                        $('#ebay_ack').html('Ack [' + parsed.ack + ']');
                        $('#ebay_version').html('Version [' + parsed.version + ']');
                        $('#ebay_build').html('Build [' + parsed.build + ']');

                        $("#dialog").dialog();
                        $("#dialog").dialog('option', 'title', 'Ebay Official Time ' + current_company);
                    } else {
                        alert('Something went wrong, contact support...')
                    }

                });
            }
        });
        var total_number_of_pages = "<?php echo AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'total_number_of_pages'); ?>";
        var get_my_eBay_selling = "<?php echo AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'get_my_eBay_selling'); ?>";
        if (get_my_eBay_selling > total_number_of_pages) {
            $('.my_ebay_selling').removeAttr('href');
            $('.my_ebay_selling').attr("disabled", "disabled");
        }

    });
    $(function () {
        $("#item_report").click(function () {

            $("#dialog_open").dialog();
            $('#item_report_').html(
                    'Incompatible item'
<?php // foreach ($compare_items["diff_item"] as $item_id){                 ?>
//                        +'<br> itemID: '+
<?php
//                         echo $item_id;
//                        }
?>
            );
        });
    });

</script>

<style>
    .ebay_timestamp{
        float: left;
        margin: 5px;
        font-size: 14px;
        clear: both;
    }

    .moduleTile {
        width: 330px;
        border: 1px solid #CCCCCC;
        background-color: #f3f3e5;
        line-height: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
        float: left;
    }
    .moduleTileRight {
        width: 60%;
        height: 230px;
        display: inline-block;
        background-color: #e5e4d4;
        vertical-align: top;
        margin: 10px 10px 10px 0;
        overflow: hidden;
        white-space: nowrap;
        float: right;
        padding:10px;
    }

    .buttons{
        text-decoration: none;
    }

    .buttons a {
        color: #000000;
        text-decoration: none;
    }
    .description_button
    {
        display: inline-block;
        float: left;
        background-color: #f3f3e5;
        border:2px solid white;
        line-height: 13px;
        width: 90%;
        font-size: 10px;
        padding: 2px;
        color:#840b00;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    button
    {
        display: inline-block;
        float: left; 
    }
    .separate_line
    {
        width:100%; 
        display: inline-block;
        float:left;
        border-bottom: 1px solid  #f6ba07;
        padding-bottom: 2px;
        margin-bottom: 30px
    }

    .compair_item_hide
    {
        display: none;
    }
    .compair_item{
        color:white;
        background:black;
        padding:0 5px;
        margin: 0 5px;
        cursor: pointer;
    }
</style>