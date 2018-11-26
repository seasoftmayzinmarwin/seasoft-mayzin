<section class="o-m-page__foot">
	<footer class="c-m-footer">
		<div class="c-m-footer__copy-right">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="c-m-text text-center c-m-text--white c-m-text--helvetica c-m-text--s-short">©2009 MEDLEY,INC.</p>
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