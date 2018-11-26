<section class="o-m-page__foot">
	<footer class="c-m-footer">
		<div class="c-m-footer__item">
			<div class="container">
			<div class="row">
				<div class="col">
					<a href="" class="c-m-box-link" title="" id="back2Top">
						<div class="text-center">
							<i class="fa fa-long-arrow-up m-fa-white" aria-hidden="true"></i><br>
							<span class="c-m-text c-m-text--white c-m-text--bold c-m-text--s-short">ページ上に戻る</span>
						</div>
					</a>
					
				</div>
			</div>
		</div>
		</div>
		<div class="c-m-box c-m-box--horizontal-m">
			<nav class="c-m-footer__nav">
				<div class="c-m-footer__nav-item">
					<div class="c-m-footer__nav-item"><a href="searches_mobile.php" class="c-m-text-link c-m-text-link--white c-m-text-link--small">求職者検索</a></div>
				</div>
				<div class="c-m-footer__nav-item">
					<div class="c-m-footer__nav-item"><a href="message_mobile.php" class="c-m-text-link c-m-text-link--white c-m-text-link--small">メッセージ</a></div>
				</div>
				<div class="c-m-footer__nav-item">
					<div class="c-m-footer__nav-item"><a href="announcements_mobile.php" class="c-m-text-link c-m-text-link--white c-m-text-link--small">お知らせ</a></div>
				</div>
				<div class="c-m-footer__nav-item">
					<div class="c-m-footer__nav-item"><a href="" class="c-m-text-link c-m-text-link--white c-m-text-link--small">ご利用ガイド</a></div>
				</div>
			</nav>
		</div>
		<div class="c-m-footer__copy-right">
			<div class="container">
				<div class="row">
					<div class="col">
						<span class="c-m-text c-m-text--white c-m-text--helvetica c-m-text--s-short">©2009 MEDLEY,INC.</span>
					</div>
					<div class="col">
						<a href="" class="pull-right c-m-text-link c-m-text-link--light-blue c-m-text-link--small">PC版を表示</a>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

</script>
<script type="text/javascript">
	$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
		
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
		
	}
});
</script>
<script type="text/javascript" charset="utf-8">
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</body>
</html>