		<? defined("C5_EXECUTE") or die("Access Denied."); ?>

    <!-- block example -->
    <?
      $a = new GlobalArea("Footer - Meta");
      $a->display($c);
    ?>

		<? Loader::element("footer_required"); ?>
    <script src="<?= $this->getThemePath(); ?>/js/shared.js"></script>
    <?= page_specific_scripts($c, $this) ?>
	</body>
</html>
