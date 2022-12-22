<html>
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- this link is for symbols -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/topbaradmin.css?v=<?php echo time(); ?>">
</head>
<body>

<ul>
    <li class="li-horizontal fixing leftbar">
        <button class="op-left">☰</button>
    </li>
    <li class="li-horizontal fixing">
        <a href="adminpanel.php">Admin Panel</a>
    </li>
    <div style="float:right"> 
        <li class="li-horizontal right-a" >
            <a href="contactus.php">
                <div class="desc">Helpline</div>
                <i style="font-size:20px;margin-top:2px" class="fa"> &#xf095;</i>
            </a>
        </li>
        <li class="li-horizontal right-a">
            <a href="logout.php">
                <div class="desc">Logout</div> 
                <i style="font-size:20px;margin-top:2px" class="fa"> &#xf08b;
                </i>
            </a>
        </li>
    </div>
</ul>
<script type="text/javascript">
    let openBtn = document.querySelector(".op-left");
    let cnt=0;
    openBtn.addEventListener("click",() => {
        if(cnt==0){
            showNav();
            cnt=1;
        }
        else{
            closeNav();
            cnt=0;
        }
    })
    function showNav(){
        let ele=document.querySelector(".ul-verticle");
        ele.style.width="100%";
        ele.style.display="inline";
        document.querySelector(".op-left").innerHTML="×";
    }
    function closeNav(){
        document.querySelector(".ul-verticle").style.width="0px";
        document.querySelector(".op-left").innerHTML="☰";
    }
</script>
</body>
</html>