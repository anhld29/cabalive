<?php $page = 'homepage'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
</head>

<body>
<?php include "./templates/header.php"; ?>
<div id="contents">
    <div class="container" style="padding:3em 0;">
        <h2>input text</h2>
        <input type="text" class="form-control" id="" placeholder="Eメールアドレス">

        <h2>Checkbox</h2>
        <div class="checkboxes">
            <input id="a" type="checkbox" tabindex="1"/><label class="green-background" for="a">Spectacles</label>
            <input id="b" type="checkbox" tabindex="2"/><label class="green-background" for="b">Testicles</label>
            <input id="c" type="checkbox" tabindex="3"/><label class="green-background" for="c">Wallet</label>
            <input id="d" type="checkbox" tabindex="4"/><label class="green-background" for="d">Watch</label>
        </div>
        <h2>Radio</h2>
        <div class="radios">
            <input type="radio" name="yesno" value="Yes" id="radio_0" tabindex="4" checked="checked"><label for="radio_0">Yes</label>
            <input type="radio" name="yesno" value="No" id="radio_1" tabindex="5"><label for="radio_1">No</label>
        </div> 
        <h2>Line space box</h2>  
        <div class="line-or"><span>or</span></div>
        <h2>button normal</h2>  
        <div class="box-btn"><a href="#" class="btn btn-primary">会員登録</a></div>  
        <div class="box-btn"><a href="#" class="btn btn-second">ログイン</a></div>  
            
        <h2>button width 90%</h2>  
        <div class="box-btn"><a href="#" class="btn btn-primary btn-90">会員登録</a></div>  
        <div class="box-btn"><a href="#" class="btn btn-second btn-90">ログイン</a></div>  

        <h2>button width 90% boxshadow</h2>  
        <div class="box-btn"><a href="#" class="btn btn-primary btn-90 btn-shadow">会員登録</a></div>  
        <p></p>
        <p></p>
        <div class="box-btn"><a href="#" class="btn btn-second btn-90 btn-shadow">ログイン</a></div>  
        <p></p>
        <p></p>
        <h2>Icon fontawesome</h2>  
         Solid:
        <i class="fas fa-camera"></i>

        Regular:
        <i class="far fa-camera"></i>

        Light:
        <i class="fal fa-camera"></i>         
    </div>
</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
