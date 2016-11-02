<?php
// source: E:\xamp\htdocs\azulgarweb\app\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Templatea40f3f7113 extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
    <!Doctype html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="Content-Language" content="cs">
            <meta http-equiv="content-Style-Type" content="text/css">
            <meta name="author" content="root">
            <meta name="robots" content="all">
            <meta name="description" content="Scifi strategic space game with modular builder set into deep universe.">
            <meta name="keywords" content="scifi,game,space,universe,action,strategy,ships">
            <!-- css import -->

            <link rel="stylesheet" href= "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */ ?>/css/main2.css"> 
   
            <link rel="stylesheet" href= "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */ ?>/css/footer.css">
            <link rel="stylesheet" href= "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */ ?>/css/bootstrap-theme.min.css"> 
            <link rel="stylesheet" href= "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */ ?>/css/bootstrap.min.css"> 
            <title>Azulgar | v 2.0</title>
        </head>
<?php
		$this->renderBlock('content', $this->params, 'html');
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('scripts', get_defined_vars());
?>
    </body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
        <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */ ?>/js/main.js"></script>
<?php
	}

}
