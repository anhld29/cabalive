<?php $page = 'homepage'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

<!-- *** javascript *** -->
</head>

<body>
<?php include "./templates/header.php"; ?>
<div id="contents">
	<section class="box-intro">
		<div class="container">
			<div class="box-left-intro">
				<h2 class="view_pc"><img src="./images/title-intro-pc.svg" alt="オンライン「夜の社交場」CABA Live（キャバライブ"></h2>
				<h2 class="view_tab-sp">オンライン「夜の社交場」<span>CABA Live（キャバライブ</span></h2>
				<div class="sub-title sub-title-mt"><span class="view_tab-sp">＼</span> ネットで <span class="view_tab-sp">／</span></div>
				<div class="title-header">３<em>ミ</em><em>ツ</em><span class="heart-icon">親密</span><span class="heart-icon">隠密</span><span class="heart-icon">甘蜜</span></div>
				<div class="box-btn view_pc"><a href="#" class="btn btn-primary btn-90 btn-md btn-shadow">今すぐ会員登録する</a></div>
				<div class="sub-title view_tab-sp">キャバライブ!!</div>
				<div class="text-btn view_pc">キャバライブの楽しみ方  <i class="fas fa-long-arrow-right"></i></div>
			</div>
			<div class="img-intro">
				<div class="sticker">
					<div class="inner">
						<div class="title">One on One</div>
						<div class="title-main">1<span>対</span>1<span>で</span></div>
						<div class="title-sub">ワンワン <img src="./images/icon-rabbit.svg" alt="ワンワン"></div>
					</div>
				</div>
				<img src="images/girl-with-iphone_sp.svg" alt="1対1で" class="view_tab-sp">
				<img src="images/girl-with-iphone_pc.svg" alt="1対1で" class="view_pc">
			</div>
			<div class="box-btn view_tab-sp"><a href="#" class="btn btn-primary btn-md btn-shadow">今すぐ会員登録する</a></div>
			<div class="text-btn view_tab-sp">キャバライブの楽しみ方  <i class="fal fa-long-arrow-right"></i></div>
		</div>
	</section><!-- /.box-intro -->
	<section class="box-let-it-now">
		<div class="container">
			<div class="title-images">
				<div class="images"><img src="./images/ic-rabbit-lg.svg" alt="今すぐワンワンしましょう"></div>
				<h2>今すぐ<span>ワンワン</span>しましょう</h2>
			</div>
			<div class="title-desc">※ワンワンするには会員登録/ログインが必要です。</div>
			<div class="text">キャストを指名しない</div>
			<div class="box-btn"><a href="#" class="btn btn-primary btn-shadow">フリーワンワン</a></div>
			<div class="line-or"><span>or</span></div>
			<div class="box-nominate-a-cast">
				<h3 class="title-nominate">キャストを指名する</h3>
				<div class="box-parrent-category">
					<ul>
						<li><a href="#" class="active">全て</a></li>
						<li><a href="#">#パリピ</a></li>
						<li><a href="#">#ギャル</a></li>
						<li><a href="#">#天然</a></li>
						<li><a href="#">#お笑い</a></li>
						<li><a href="#">#妹キャラ</a></li>
						<li><a href="#">#姉キャラ</a></li>
						<li><a href="#">#熟女</a></li>
						<li><a href="#">#お嬢様</a></li>
						<li><a href="#">#コンサバ</a></li>
						<li><a href="#">#アウトドア</a></li>
						<li><a href="#">#ストリート</a></li>
						<li><a href="#">#インテリ</a></li>
						<li><a href="#">#セクシー</a></li>
						<li><a href="#">#エッチ</a></li>
						<li><a href="#">#綺麗</a></li>
						<li><a href="#">#可愛い</a></li>
						<li><a href="#">#清楚</a></li>
						<li><a href="#">#スリム</a></li>
						<li><a href="#">#ぽっちゃり</a></li>
						<li><a href="#">#ビギナー</a></li>
						<li><a href="#">#関西弁</a></li>
						<li><a href="#">#京都弁</a></li>
						<li><a href="#">#博多弁</a></li>
						<li><a href="#">#東北弁</a></li>
						<li><a href="#">#広島弁</a></li>
					</ul>
				</div>
				<div class="box-sub-category">
					<ul>
						<li><a href="#" class="active">今すぐOK</a></li>
						<li><a href="#">接客中</a></li>
						<li><a href="#">オフライン</a></li>
					</ul>
				</div>
				<?php include "./templates/product.php"; ?>

			</div>
		</div>
	</section>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
<?php include "./templates/popup_register.php"; ?>

</body>
</html>
