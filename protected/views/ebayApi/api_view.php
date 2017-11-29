<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

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
                <?php echo "Modifing the list of the monitored prices"; ?>
            </div>
            <button>
                <a title="ebayPriceMonitor/admin" href="index.php?r=ebayPriceMonitor/admin">Manage Ebay Price</a>
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
                <?php echo "Generate  report about changes prices"; ?>
            </div>
            <button>
                <a title="ebay/ebayPriceEmail" href="index.php?r=ebay/ebayPriceEmail">Ebay Price Email</a>
            </button>
        </div> 
    </div>
</div>

<!--
    API
-->
<div class="moduleTile">
    <div class="moduleImage">
        <img src='/images/API.png'><div class="title">API</div>
    </div>
    <div class="moduleTileRight">
        <!--
            /index.php?r=ebayApi/ajaxOfficialTime"
        -->
        <div class="row buttons" >
            <button id="official_time">Time</button>
        </div> 

        <!--
            /index.php?r=ebayApi/LoadAllItems
        -->
        <div class="row buttons" >
            <button>
                <a title="ebayApi/LoadAllItems" href="index.php?r=ebayApi/LoadAllItems">Load All Items</a>
            </button>
        </div>

        <div class="row buttons" >
            <button>
                <a title="ebayApi/main/&attribute=GetItem" href="index.php?r=ebayApi/main/&attribute=GetItem">eBay GetItem</a>
            </button>
            <?php
//            d::d(EbayApiController::get_central_setting(1, 'item_counter_for_ebay_item'));
            ?>
        </div> 

        <div class="row buttons" style="border: solid 1px white; width: 90%; margin: 10px 0; padding:0"></div>

        <div class="row buttons" >
            <button class="my_ebay_selling">
                <a title="ebayApi/main/&attribute=MyeBaySelling" href="index.php?r=ebayApi/main/&attribute=MyeBaySelling">eBay Selling</a>
            </button>
            <?php
//            d::d(EbayApiController::get_central_setting(1, 'get_my_eBay_selling'));
            ?>
            <button>
                <a title="ebayApi/ReStartBaySelling" href="index.php?r=ebayApi/ReStartBaySelling">Re-Start</a>
                <?php // echo CHtml::link('Re-Start', array('ebayApi/ReStartBaySelling')); ?>
            </button>
        </div> 

        <div class="row buttons" >
            <button>
                <a title="ebayApi/main/&attribute=GetStore" href="index.php?r=ebayApi/main/&attribute=GetStore">eBay GetStore</a>
                <?php // echo CHtml::link('eBay GetStore', array('ebayApi/main/&attribute=GetStore')); ?></button>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/admin.ico"><div class="title">Admin</div>
    </div>
    <div class="moduleTileRight">
        <div  class="row buttons" >
            <button>
                <a title="myEbaySelling/index" href="index.php?r=myEbaySelling/index">eBay Selling</a>
                <?php // echo CHtml::link('eBay Selling', array('myEbaySelling/index')); ?>
            </button>
        </div> 
        <div  class="row buttons" >
            <button>
                <a title="ebayItem/index" href="index.php?r=ebayItem/index">eBay Items</a>
                <?php // echo CHtml::link('eBay Items', array('ebayItem/index')); ?>
            </button>
        </div> 
        <div  class="row buttons" >
            <button>
                <a title="ebayStore/index" href="index.php?r=ebayStore/index">eBay Store</a>
                <?php // echo CHtml::link('eBay Store', array('ebayStore/index')); ?>
            </button>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/page-icon.png"><div class="title">Shop</div>
    </div>
    <div class="moduleTileRight">
        <div class="row buttons" style="background-color: #f3f3e5;border:4px solid white; padding: 5px; margin-bottom: 10px; width: 160px; overflow: hidden; font-size:11px;line-height: 13px;text-overflow: ellipsis; color:#840b00;">
            Do it once, <br>
            the system duplicates <br>
            the product
            <br>
            <br>
            <button>
                <a title="ebayInsetrs/setDataInPresta" href="index.php?r=ebayInsetrs/setDataInPresta">Insert data to ShopPage</a>
                <?php // echo CHtml::link('Insert data to ShopPage', array('ebayInsetrs/setDataInPresta')); ?>
            </button>
        </div> 
        <div class="row buttons">
            <button>
                <a title="ebayInsetrs/generateImages" href="index.php?r=ebayInsetrs/generateImages">Generate Images</a>
                <?php // echo CHtml::link('Generate Images', array('ebayInsetrs/generateImages')); ?>
            </button>
        </div> 
        <div class="row buttons">
            <button>
                <a title="ebayInsetrs/setHomeCateg" href="index.php?r=ebayInsetrs/setHomeCateg">Set Home Categ</a>
                <?php // echo CHtml::link('Set Home Categ', array('ebayInsetrs/setHomeCateg')); ?>
            </button>
        </div> 
        <div class="row buttons">
            <button>
                <a title="ebayInsetrs/setCateg" href="index.php?r=ebayInsetrs/setCateg">Set Categ</a>
            </button>    
        </div> 
    </div> 
</div>
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

<div id="dialog" title="">
    <div id="ebay_timestamp" class="ebay_timestamp"></div>
    <div id="ebay_ack" class="ebay_timestamp"></div>
    <div id="ebay_version" class="ebay_timestamp"></div>
    <div id="ebay_build" class="ebay_timestamp"></div>
</div>



<script>
    $(function () {
        $("#official_time").click(function () {
            if (confirm("Are you sure you want to Official Time ?")) {
                $.post("/index.php?r=ebayApi/ajaxOfficialTime", {
//                key: 'allocator_leads_status_set_buttons'
                }, function (response) {

                    var parsed = JSON.parse(response);

                    if (parsed.status === 'success') {

                        $('#ebay_timestamp').html('Timestamp [' + parsed.timestamp + ']');
                        $('#ebay_ack').html('Ack [' + parsed.ack + ']');
                        $('#ebay_version').html('Version [' + parsed.version + ']');
                        $('#ebay_build').html('Build [' + parsed.build + ']');

                        $("#dialog").dialog();
                        $("#dialog").dialog('option', 'title', 'Ebay Official Time');
                    } else {
                        alert('Something went wrong, contact support...')
                    }

                });
            }
        });
        var total_number_of_pages = "<?php echo EbayApiController::get_central_setting(1, 'total_number_of_pages'); ?>";
        var get_my_eBay_selling = "<?php echo EbayApiController::get_central_setting(1, 'get_my_eBay_selling'); ?>";
        if (get_my_eBay_selling > total_number_of_pages) {
            $('.my_ebay_selling').removeAttr('href');
            $('.my_ebay_selling').attr("disabled", "disabled");
        }

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
        border:4px solid white;
        line-height: 13px;
        width: 90%;
        font-size: 10px;
        /*padding: 1px;*/
        color:#840b00;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    button
    {
        display: inline-block;
        float: left; 
    }
</style>