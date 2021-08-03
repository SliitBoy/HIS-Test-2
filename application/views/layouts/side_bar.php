<?php
/*
------------------------------------------------------------------------------------------------------------------------
Copyright (c) Digital Pulz (Pvt) Ltd, 2021
<http: http://www.digitalpulz.com />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<!-- Left side column. contains the sidebar -->
<style>

    .notification {
        color: white;
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    .notification:hover {
        background: red;
    }

    .notification .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        border-radius: 50%;
        background-color: red;
        color: white;
    }

    .activeLink {
        background-color: darkslateblue;
    }

    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 100;
        top: 0;
        right: 0;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
    }

    .overlay-content {
        position: relative;
        top: 10%;
        width: 100%;
        margin-top: 30px;

    }

    .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 16px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
    }

    .overlay .closebtn {
        position: absolute;
        top: 20px;
        left: 5%;
        font-size: 50px;
    }

    @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px
        }

        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
    }
</style>
<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image" id="image3">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('username') ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li id="examinationtest" id="1" class="trigger">
                <a href="<?php echo base_url("/index.php/examination_test_c"); ?>">
                    <i class="fa fa-circle-o"></i><span>Test</span>
                </a>
            </li>
            
        </ul>
    </section>

</aside>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px" id="tostDiv">
            <!-- Position it -->
            <div style="position: absolute; top: 0; right: 5px;left: 5px" class="notifyDiv">


            </div>
        </div>

    </div>
</div>
<script>
    var noticount = 0;
    var notify = true;
    $(document).ready(function () {

        var roleId = '<?php echo $this->session->userdata('userlevel');?>';
        let userType = '<?php echo $this->session->userdata('userType');?>';

        var listId = sessionStorage.getItem("listId");
        var sublistId = sessionStorage.getItem("sublistId");

        if (listId != null) {
            var searchID = '#' + listId;
            $(searchID).addClass("active");
        }

        if (sublistId != null) {
            var searchID = '#' + sublistId;
            $(searchID).addClass("active");
        }

        $(".trigger").click(function () {

            var id = $(this).attr("id");

            if (id.split("_")[0] != "sub")
                sessionStorage.setItem("listId", id);
            else
                sessionStorage.setItem("sublistId", id);
        });

        document.getElementById('image3').src = '<?php echo base_url('/icons/Male.png'); ?>';
        
    });

</script>
<!-- =============================================== -->
