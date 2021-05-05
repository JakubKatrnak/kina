<head>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kino</title>

    
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url("vzhled.less"); ?>" />
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

</head>

<body id="menu_body">    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a id="menu" href="<?php echo base_url("vypis"); ?>"  >Výpis</a>		
                        </li>
                        <li class="nav-item">
                            <a id="menu" href="<?php echo base_url("form"); ?>"  >formulář</a>		
                        </li>
                        <li class="nav-item">
                            <a id="menu" href="<?php echo base_url("calendar"); ?>"  >kalendář</a>		
                        </li>                    
                    </ul>
        </div>
    </nav> 